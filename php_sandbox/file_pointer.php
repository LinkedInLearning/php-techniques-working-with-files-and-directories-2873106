<?php

$filepath = __DIR__ . '/sonnet.txt';

$handle = fopen($filepath, 'r+'); // read and write
if($handle) {

  echo ftell($handle) . '<br />';

  fread($handle, 26);

  echo ftell($handle) . '<br />';

  fwrite($handle, 'winter');

  echo ftell($handle) . '<br />';

  fseek($handle, 35);

  echo ftell($handle) . '<br />';

  fwrite($handle, 'eve');

  echo ftell($handle) . '<br />';


  fclose($handle);

}


?>
