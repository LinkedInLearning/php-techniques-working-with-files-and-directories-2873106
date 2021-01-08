<?php

$entries = glob("*/*.txt");
foreach($entries as $entry) {
  echo $entry . '<br />';
}

?>
