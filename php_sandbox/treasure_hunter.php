<?php

function walk_directory($dirpath) {
  $handle = opendir($dirpath);
  if($handle) {
    while(false !== ($entry = readdir($handle))) {
      // skip all . files
      if(stripos($entry, '.') === 0) { continue; }

      $entry_path = $dirpath . '/' . $entry;
      if(is_dir($entry_path)) {
        walk_directory($entry_path);
      } else {
        examine_file($entry_path);
      }
    }
    closedir($handle);
  } else {
    echo "Could not open directory.";
  }
}

function examine_file($filepath) {
  // echo "Looking in {$filepath}<br />";
  $handle = fopen($filepath, 'r');
  if($handle) {
    $data = fread($handle, 8); // treasure = 8 bytes/characters
    if($data == 'treasure') {
      echo "Found treasure! {$filepath}<br />";
    }
    fclose($handle);
  } else {
    echo "Could not open file.";
  }
}

$huntpath = __DIR__ . '/assets/treasure_hunt';

walk_directory($huntpath);

?>
