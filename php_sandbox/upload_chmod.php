<?php

$filepath = __DIR__ . '/uploads/sonnet.txt';

if(file_exists($filepath)) {
  chmod($filepath, 0766);
}

?>
