<?php

if(isset($_POST['submit'])) {

  // process the form data

  echo "<pre>";
  print_r($_FILES['file_upload']);
  echo "</pre>";

  $data = file_get_contents($_FILES['file_upload']['tmp_name']);
  echo nl2br($data);
}

?>
