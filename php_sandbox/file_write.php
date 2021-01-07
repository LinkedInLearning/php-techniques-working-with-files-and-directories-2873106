<?php

$filepath = __DIR__ . '/sample_file.txt';

$handle = fopen($filepath, 'w'); // overwrite
if($handle) {
  fwrite($handle, 'abcdef');
  fwrite($handle, '1234567890');
  fclose($handle);
} else {
  echo "Could not open file.";
}

$filepath = __DIR__ . '/sample_file2.txt';

// Unix/Mac new lines are "\n"
// Windows new lines are "\r\n"
// double-quotes matter
$data = "A page of data\n111\n222\n333\n";

file_put_contents($filepath, $data);

?>
