<?php
// 音频文件类型
$video_type_list = ["mp3", "flac"];
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
  <title>Video Player</title>
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

    <ol class="breadcrumb">
      <li><a href="<?php echo $_SERVER["SCRIPT_NAME"] ?>">Home</a></li>
      <?php
      for ($i = 2; $i <= count($path_array) - 1; $i++) {
        if ($i == count($path_array) - 1) {
          echo '<li class="active">' . $path_array[$i] . '</li>';
        } else {
          echo '<li><a href="' . implode("/", array_slice($path_array, 0, $i + 1)) . '">' . $path_array[$i] . '</a></li>';
        }
      }
      ?>
    </ol>
    <div class="list-group">
      <a href="<?php echo implode("/", array_slice($path_array, 0, count($path_array) - 1)); ?>" class="list-group-item"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>&nbsp;&nbsp;...上一级...</a>
      <?php
      if (!is_dir(__DIR__ . $path)) {
        echo '<audio id="video" controls src="' . $path . '" autoplay style="width: 100%;  overflow: hidden" ended="next"></audio>';
      }
      foreach ($dir_list as $value) {
        echo '<a href="' . $_SERVER["SCRIPT_NAME"] . $path . "/" . $value . '" class="list-group-item"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>&nbsp;&nbsp;' . $value . "</a>";
      }
      foreach ($file_list as $value) {
        if (in_array(strtolower(explode(".", $value)[count(explode(".", $value)) - 1]), $video_type_list)) {
          $is_active = $path_array[count($path_array) - 1] == $value ? 'active' : '';
          echo '<a href="' . implode("/", array_slice($path_array, 0, count($path_array) - ($is_dir ? 0 : 1))) . "/" . $value . '" class="list-group-item ' . $is_active . '"><span class="glyphicon glyphicon-music" aria-hidden="true"></span>&nbsp;&nbsp;' . $value . "</a>";
        }
      }
      ?>
    </div>
  </div>
  <!-- <script src=" https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/@langnang/js/lib/ln.js"></script> -->
  <script type="text/javascript">
    window.onload = function() {
      const video = document.getElementById('video');
      const li = document.querySelector(".list-group-item.active");
      video.onended = function() {
        setTimeout(function() {
          li.nextSibling.click()
        }, 3)
      }
    }
  </script>
</body>

</html>