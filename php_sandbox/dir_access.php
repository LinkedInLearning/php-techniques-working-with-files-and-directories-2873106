<?php

$dirpath = __DIR__;

$handle = opendir($dirpath);
if($handle) {

  while(false !== ($entry = readdir($handle))) {
    echo $entry . "<br />";
  }

  closedir($handle);
} else {
  echo "Could not open file.";
}

echo "<br />";

$array = scandir($dirpath);
echo $array[3] . "<br />";

?>
