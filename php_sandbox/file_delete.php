<?php

$filepath = __DIR__ . '/delete_me.txt';

file_put_contents($filepath, 'delete me');

echo file_exists($filepath) ? 'exists' : 'none';
echo "<br />";

unlink($filepath);

echo file_exists($filepath) ? 'exists' : 'none';
echo "<br />";

?>
