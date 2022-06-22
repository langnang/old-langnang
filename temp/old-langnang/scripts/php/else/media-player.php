<!-- 
*******************************************************************
***         __                                                  ***
***        / /   ____  ____  ____  ____  ____  ____  ____ _     ***
***       / /   / __ `/ __ \/ __ `/ __ \/ __ `/ __ \/ __ `/     ***
***      / /___/ /_/ / / / / /_/ / / / / /_/ / / / / /_/ /      ***
***     /_____/\__,_/_/ /_/\__, /_/ /_/\__,_/_/ /_/\__, /       ***
***                       /____/                  /____/        ***
***                                                             ***
***                          MediaPlayer                        ***
*******************************************************************

多媒体播放器
- [ ] 文件夹+列表
- [ ] 可播放文件列表
- [ ] 播放列表
 -->
<?php
class fsModel
{
  private $path_type; //路径类型，file/dir
  private $children = [];
  function __construct($path)
  {
    // "name" => $filename,
    $this->name = basename($path);
    $this->dir = dirname($path);
    // "path" => $this->dir_path . "/" . $filename,
    // "type" => $this->file_suffix($filename),
    // "media" => $media_type,
    $this->fileatime = fileatime($path); // 取得文件的上次访问时间
    $this->filectime = filectime($path); // 取得文件的 inode 修改时间
    $this->filegroup = filegroup($path); // 取得文件的组
    $this->fileinode = fileinode($path); // 取得文件的 inode
    $this->filemtime = filemtime($path); // 取得文件修改时间
    $this->fileowner = fileowner($path); // 取得文件的所有者
    $this->fileperms = fileperms($path); // 取得文件的权限
    $this->filesize = filesize($path); // 取得文件大小
    $this->filetype = filetype($path); // 取得文件类型
    $this->is_dir = is_dir($path); // 判断给定文件名是否是一个目录
    $this->is_executable = is_executable($path); // 判断给定文件名是否可执行
    $this->is_file = is_file($path); // 判断给定文件名是否为一个正常的文件
    $this->is_link = is_link($path); // 判断给定文件名是否为一个符号连接
    $this->is_readable = is_readable($path); // 判断给定文件名是否可读
    $this->is_uploaded_file = is_uploaded_file($path); // 判断文件是否是通过 HTTP POST 上传的
    $this->is_writable = is_writable($path); // 判断给定的文件名是否可写
    $this->is_writeable = is_writeable($path); // is_writable 的别名
    $this->pathinfo = pathinfo($path); // 返回文件路径的信息
    $this->stat = stat($path); // 给出文件的信息
  }
  function get_info()
  {
  }
  function get_children()
  {
  }
}
class fsMedia
{
  private $path; // 路径
  private $is_dir; // 是否是目录
  private $dir_path; // 目录路径。如果是目录，即该目录路径。如果是文件，即该文件的父文件夹路径。
  private $dir_list = []; // 目录下子目录列表
  private $file_list = []; // 目录下文件列表
  private $file_group = []; // 目录下文件列表组
  function __construct()
  {
    $this->path = isset($_SERVER["PATH_INFO"]) ? $_SERVER["PATH_INFO"] : '';
    $this->info = new fsModel(__DIR__ . $this->path);
    $this->is_dir = is_dir(__DIR__ . $this->path);
    $this->dir_path = $this->is_dir ? __DIR__ . $this->path : dirname(__DIR__ . $this->path);
    $this->opendir();
  }
  // 获取文件类型，文件后缀名
  function file_suffix($filename)
  {
    return explode(".", $filename)[count(explode(".", $filename)) - 1];
  }
  // 获取媒体类型，视频、音频、图片
  function media_type($filename)
  {
    if (in_array(strtolower($this->file_suffix($filename)), ['mp4', 'mkv', 'rmvb', 'avi'])) return 'video';
    if (in_array(strtolower($this->file_suffix($filename)), ['mp3', 'flac'])) return 'audio';
    if (in_array(strtolower($this->file_suffix($filename)), ["jpg", 'jpge', "png", 'ico', 'gif', 'svg'])) return 'image';
    return false;
  }
  // 读取目录下所有文件
  function opendir()
  {
    $handler = opendir($this->dir_path);
    while (($filename = readdir($handler)) !== false) { //务必使用!==，防止目录下出现类似文件名“0”等情况
      if ($filename == "." || $filename == "..") {
        continue;
      }
      $fs = new fsModel($this->dir_path . "\\" . $filename);
      // 文件类型 
      if ($fs->filetype == 'dir') {
        array_push($this->dir_list,  $fs);
        continue;
      }
      $media_type = $this->media_type($filename);
      if (!$media_type) {
        continue;
      }
      // var_dump(stat($this->dir_path . "\\" . $filename));
      $fs->media = $media_type;
      array_push($this->file_list, $fs);
      if (!isset($this->file_group[$media_type])) {
        $this->file_group[$media_type] = [];
      }
      array_push($this->file_group, $filename);
      // var_dump($this->file_suffix($filename));
      // var_dump($this->media_type($filename));
      // $file_type == 'file' ? array_push($file_list, $filename) : array_push($dir_list, $filename);
    }
    closedir($handler);
  }
  function print_breadcrumb()
  {
    $path_array = explode("/", $_SERVER["SCRIPT_NAME"] . $this->path);

    echo '<ol class="breadcrumb" style="margin-bottom:0px;background-color:#d9edf7;">
      <li><a href="' . $_SERVER["SCRIPT_NAME"] . '">Home</a></li>';
    for ($i = 2; $i <= count($path_array) - 1; $i++) {
      if ($i == count($path_array) - 1) {
        echo '<li class="active">' . $path_array[$i] . '</li>';
      } else {
        echo '<li><a href="' . implode("/", array_slice($path_array, 0, $i + 1)) . '">' . $path_array[$i] . '</a></li>';
      }
    }
    echo '</ol>';
  }
  function print_play_list()
  {
    if (count($this->dir_list) == 0 && count($this->file_list) == 0) {
      echo '<a href="' . implode("/", array_slice($this->path_array, 0, count($this->path_array) - 1)) . '" class="list-group-item"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>&nbsp;&nbsp;...上一级...</a>';
      return;
    }
    foreach ($this->dir_list as $value) {
      echo '<a href="' . $_SERVER["SCRIPT_NAME"] . $this->path . "/" . $value->name . '" class="list-group-item"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>&nbsp;&nbsp;' . $value->name . "</a>";
    }
    var_dump($this->file_list);
    foreach ($this->file_list as $value) {
      // if (in_array(strtolower(explode(".", $value)[count(explode(".", $value)) - 1]), $video_type_list)) {
      //   $is_active = $path_array[count($path_array) - 1] == $value ? 'active' : '';
      //   echo '<a href="' . implode("/", array_slice($path_array, 0, count($path_array) - ($is_dir ? 0 : 1))) . "/" . $value . '" class="list-group-item ' . $is_active . '"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span>&nbsp;&nbsp;' . $value . "</a>";
      // }
    }
  }
  function print_media_player()
  {
    echo '<img  src="' . $this->path . '"  style="width: 100%;  overflow: hidden" ended="next"></img>';
  }
}
$_SELF = [
  "path" => isset($_SERVER["PATH_INFO"]) ? $_SERVER["PATH_INFO"] : '',

  "is_dir" => false,
  "dir_path" => __DIR__,
  "dir_list" => [],
  "file_list" => [],
  "file_path" => [],
];

$media = new fsMedia();
// var_dump($media);
// 音频文件类型
$video_type_list = ["jpg", 'jpge', "png", 'ico', 'gif', 'svg'];
$dir_list = [];
$file_path = "";
$file_list = [];
$path = isset($_SERVER["PATH_INFO"]) ? $_SERVER["PATH_INFO"] : '';
$path_array = explode("/", $_SERVER["SCRIPT_NAME"] . $path);
$is_dir = is_dir(__DIR__ . $path);
// 目录路径
$dir_path = $is_dir ? __DIR__ . $path : dirname(__DIR__ . $path);
//获取某目录下所有文件、目录名（不包括子目录下文件、目录名）
$handler = opendir($dir_path);
while (($filename = readdir($handler)) !== false) { //务必使用!==，防止目录下出现类似文件名“0”等情况
  if ($filename == "." || $filename == "..") {
    continue;
  }
  // 文件类型
  $file_type = filetype($dir_path . "/" . $filename);
  $file_type == 'file' ? array_push($file_list, $filename) : array_push($dir_list, $filename);
}
closedir($handler);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $media->info->name; ?></title>
  <link rel="icon" type="image/x-icon" href="https://simpleicons.org/icons/homebridge.svg">
  <link href="https://fonts.font.im/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style type="text/css">
    * {
      padding: 0;
      margin: 0;
    }

    :focus {
      outline: 0;
    }
  </style>
</head>

<body>
  <div class="container" style="margin-top: 20px;">
    <?php $media->print_breadcrumb(); ?>
    <div class="list-group">
      <a href="<?php echo implode("/", array_slice($path_array, 0, count($path_array) - 1)); ?>" class="list-group-item" style="display: none;"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>&nbsp;&nbsp;...上一级...
      </a>
      <?php
      if (!is_dir(__DIR__ . $path)) {
        $media->print_media_player();
      }
      $media->print_play_list();


      ?>
    </div>
  </div>
  <script src=" https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@langnang/js/lib/ln.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {})
  </script>
</body>

</html>