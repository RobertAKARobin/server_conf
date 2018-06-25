<?php

header("Content-Type: application/json");
setcookie("MessageFromRobin", "I've put a cookie in your browser!");
print_r(json_encode(array(
  "\$_SERVER"   => $_SERVER,
  "\$_GET"      => $_GET,
  "\$_POST"     => $_POST,
  "\$_COOKIE"   => $_COOKIE
)));

?>
