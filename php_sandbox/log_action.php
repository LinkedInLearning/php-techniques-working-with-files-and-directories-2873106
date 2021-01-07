<?php

function log_action($action, $message="") {
  $filepath = __DIR__ . '/log.txt';

  $handle = fopen($filepath, 'a'); // append
  if($handle) {
    $time_string = strftime("%Y-%m-%d %H:%M:%S");
    fwrite($handle, $time_string);
    fwrite($handle, ' - ');
    fwrite($handle, ucwords($action));
    if($message != "") {
      fwrite($handle, ': ' . $message);
    }
    fwrite($handle, "\n"); // line return
    fclose($handle);
  } else {
    echo "Could not open file.";
  }

}

log_action('test');
log_action('Login', 'jsmith logged in');
log_action('Logout', 'jsmith logged out');

?>
