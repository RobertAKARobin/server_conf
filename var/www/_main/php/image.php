<?php

if(isset($_GET["message"])){
  header("Content-Type: image/png");

  $image =  new Imagick();
  $image -> newImage(400, 200, new ImagickPixel("#ffccaa"));

  $text  =  new ImagickDraw();
  $text  -> setFillColor("#6699cc");
  $text  -> setFont("Bookman-Demi");
  $text  -> setFontSize(50);

  $image -> annotateImage($text, 10, 100, 0, $_GET["message"]);

  $image -> setImageFormat("png");
  echo $image;
}else{
  echo("Try adding '?message=hello' to the end of the URL.");
}

?>
