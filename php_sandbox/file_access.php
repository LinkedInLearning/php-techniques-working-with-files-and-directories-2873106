<?php

$filepath = __DIR__ . '/assets/lorem_ipsum.txt';

$handle = fopen($filepath, 'r');
if($handle) {
  // ...
  echo 'Success';
  fclose($handle);
} else {
  echo "Could not open file.";
}

?>
