<?php

if (!isset($_GET["img"])) {
  return;
}
$image_file = $_GET["img"];
if (!file_exists($image_file)) {
  return;
}
$image_info = getimagesize($image_file);
$image_data = fread(fopen($image_file, 'r'), filesize($image_file));
$base64_image = 'data:' . $image_info['mime'] . ';base64,' . chunk_split(base64_encode($image_data));
echo $base64_image;

// echo '<img src="' . $base64_image . '" />';
