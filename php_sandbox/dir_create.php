<?php

if(!file_exists('temp')) {
  mkdir('temp');
}

if(file_exists('temp')) {
  rmdir('temp');
}

?>
