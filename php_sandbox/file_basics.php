<?php

$filepath = '/Users/kevinskoglund/Sites/php_sandbox/file_basics.php';
$dirpath = '/Users/kevinskoglund/Sites/php_sandbox/';

echo file_exists($filepath) ? 'exists' : 'none';
echo "<br />";

echo file_exists($dirpath) ? 'exists' : 'none';
echo "<br />";

echo is_file($filepath) ? 'file' : 'not file';
echo "<br />";

echo is_file($dirpath) ? 'file' : 'not file';
echo "<br />";

echo is_dir($filepath) ? 'dir' : 'not dir';
echo "<br />";

echo is_dir($dirpath) ? 'dir' : 'not dir';
echo "<br />";

?>
