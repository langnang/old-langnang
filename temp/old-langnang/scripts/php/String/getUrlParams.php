<?php

function getUrlParams($url)
{
  $url_components = parse_url($url);
  if (isset($url_components['query'])) {
    parse_str($url_components['query'], $params);
  } else {
    $params = array();
  }
  return $params;
}
