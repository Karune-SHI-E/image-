<?php
// 图片存储目录
$imagesDir = 'images/';

// 从存储目录中获取所有图片文件
$images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

// 随机选择一张图片
$randomImage = $images[array_rand($images)];

// 设置响应头，指定返回的内容类型为图片
header('Content-Type: image/jpeg');

// 输出图片内容
readfile($randomImage);
?>
