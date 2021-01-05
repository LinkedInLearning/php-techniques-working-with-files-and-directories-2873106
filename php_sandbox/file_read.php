<?php

$filepath = __DIR__ . '/assets/lorem_ipsum.txt';
$bytes = filesize($filepath);

$handle = fopen($filepath, 'r');
if($handle) {
  $data = fread($handle, $bytes); // bytes/characters
  fclose($handle);
} else {
  echo "Could not open file.";
}

// echo nl2br($data);

$data = file_get_contents($filepath);
echo nl2br($data);


?>
