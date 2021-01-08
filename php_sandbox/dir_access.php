<?php

$dirpath = __DIR__;

$handle = opendir($dirpath);
if($handle) {

  while(false !== ($entry = readdir($handle))) {
    // skip . and .. files
    if($entry == '.' || $entry == '..') { continue; }
    // skip all dot-files
    if(stripos($entry, '.') === 0) { continue; }
    // skip all directories
    if(is_dir($dirpath . '/' . $entry)) { continue; }

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
