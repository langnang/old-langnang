<?php

class BDecode
{
  function numberdecode($wholefile, $offset)
  {
    $negative = false;
    if ($wholefile[$offset] == '-') {
      $negative = true;
      $offset++;
    }
    if ($wholefile[$offset] == '0') {
      $offset++;
      if ($negative)
        return array(false);
      if ($wholefile[$offset] == ':' || $wholefile[$offset] == 'e')
        return array(0, ++$offset);
      return array(false);
    }
    $ret[0] = 0;
    for (;;) {
      if ($wholefile[$offset] >= '0' && $wholefile[$offset] <= '9') {
        $ret[0] *= 10;
        settype($ret[0], 'double');
        $ret[0] += ord($wholefile[$offset]) - ord('0');
        $offset++;
      } else if ($wholefile[$offset] == 'e' || $wholefile[$offset] == ':') {
        $ret[1] = $offset + 1;
        if ($negative) {
          if ($ret[0] == 0)
            return array(false);
          $ret[0] = -$ret[0];
        }
        return $ret;
      } else return array(false);
    }
  }

  function decodeEntry($wholefile, $offset = 0)
  {
    if ($wholefile[$offset] == 'd')
      return $this->decodeDict($wholefile, $offset);
    if ($wholefile[$offset] == 'l')
      return $this->decodelist($wholefile, $offset);
    if ($wholefile[$offset] == 'i')
      return $this->numberdecode($wholefile, ++$offset);

    $info = $this->numberdecode($wholefile, $offset);
    if ($info[0] === false)
      return array(false);
    $ret[0] = substr($wholefile, $info[1], $info[0]);
    $ret[1] = $info[1] + strlen($ret[0]);
    return $ret;
  }

  function decodeList($wholefile, $offset)
  {
    if ($wholefile[$offset] != 'l')
      return array(false);
    $offset++;
    $ret = array();
    for ($i = 0;; $i++) {
      if ($wholefile[$offset] == 'e')
        break;
      $value = $this->decodeEntry($wholefile, $offset);
      if ($value[0] === false)
        return array(false);
      $ret[$i] = $value[0];
      $offset = $value[1];
    }
    return array(0 => $ret, 1 => ++$offset);
  }

  function decodeDict($wholefile, $offset = 0)
  {
    if ($wholefile[$offset] == 'l')
      return $this->decodeList($wholefile, $offset);
    if ($wholefile[$offset] != 'd')
      return false;
    $ret = array();
    $offset++;
    for (;;) {
      if ($wholefile[$offset] == 'e') {
        $offset++;
        break;
      }
      $left = $this->decodeEntry($wholefile, $offset);
      if (!$left[0])
        return false;
      $offset = $left[1];
      if ($wholefile[$offset] == 'd') {
        $value = $this->decodedict($wholefile, $offset);
        if (!$value[0])
          return false;
        $ret[addslashes($left[0])] = $value[0];
        $offset = $value[1];
        continue;
      }
      if ($wholefile[$offset] == 'l') {
        $value = $this->decodeList($wholefile, $offset);
        if (!$value[0] && is_bool($value[0]))
          return false;
        $ret[addslashes($left[0])] = $value[0];
        $offset = $value[1];
        continue;
      }
      $value = $this->decodeEntry($wholefile, $offset);
      if ($value[0] === false)
        return false;
      $ret[addslashes($left[0])] = $value[0];
      $offset = $value[1];
    }
    return array(0 => (empty($ret) ? true : $ret), 1 => $offset);
  }
}

function BDecode($wholefile)
{
  $decoder = new BDecode;
  $return = $decoder->decodeEntry($wholefile);
  return $return[0];
}

class BEncode
{
  function makeSorted($array)
  {
    if (empty($array))
      return $array;
    $i = 0;
    foreach ($array as $key => $dummy)
      $keys[$i++] = stripslashes($key);
    sort($keys);
    for ($i = 0; isset($keys[$i]); $i++)
      $return[addslashes($keys[$i])] = $array[addslashes($keys[$i])];
    return $return;
  }

  function encodeEntry($entry, &$fd, $unstrip = false)
  {
    if (is_bool($entry)) {
      $fd .= 'de';
      return;
    }
    if (is_int($entry) || is_float($entry)) {
      $fd .= 'i' . $entry . 'e';
      return;
    }
    if ($unstrip)
      $myentry = stripslashes($entry);
    else
      $myentry = $entry;
    $length = strlen($myentry);
    $fd .= $length . ':' . $myentry;
  }

  function encodeList($array, &$fd)
  {
    $fd .= 'l';
    if (empty($array)) {
      $fd .= 'e';
      return;
    }
    for ($i = 0; isset($array[$i]); $i++)
      $this->decideEncode($array[$i], $fd);
    $fd .= 'e';
  }

  function decideEncode($unknown, &$fd)
  {
    if (is_array($unknown)) {
      if (isset($unknown[0]) || empty($unknown))
        return $this->encodeList($unknown, $fd);
      else
        return $this->encodeDict($unknown, $fd);
    }
    $this->encodeEntry($unknown, $fd);
  }

  function encodeDict($array, &$fd)
  {
    $fd .= 'd';
    if (is_bool($array)) {
      $fd .= 'e';
      return;
    }
    $newarray = $this->makeSorted($array);
    foreach ($newarray as $left => $right) {
      $this->encodeEntry($left, $fd, true);
      $this->decideEncode($right, $fd);
    }
    $fd .= 'e';
  }
}

function BEncode($array)
{
  $string = '';
  $encoder = new BEncode;
  $encoder->decideEncode($array, $string);
  return $string;
}

// include './BEncode.php';
// include './BDecode.php';
if (!isset($_GET["bt"])) {
  return;
}
$path = $_GET["bt"];
if (!file_exists($path)) {
  return;
}
$torrent = file_get_contents($path);
$desc = BDecode($torrent);
$info = $desc['info'];
$hash = strtoupper(sha1(BEncode($info)));
$magnet = sprintf('magnet:?xt=urn:btih:%s&dn=%s', $hash, $info['name']);
echo $magnet;
