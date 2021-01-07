<?php

$filepath = __DIR__ . '/sonnet.txt';

echo is_readable($filepath) ? 'readable' : 'no';
echo '<br />';
echo is_writable($filepath) ? 'writable' : 'no';
echo '<br />';
echo is_executable($filepath) ? 'executable' : 'no';
echo '<br />';

echo '<br />';

echo filemtime($filepath) . '<br />';
echo strftime('%m/%d/%Y %H:%M', filemtime($filepath))  . '<br />';
echo strftime('%m/%d/%Y %H:%M', filectime($filepath))  . '<br />';
echo strftime('%m/%d/%Y %H:%M', fileatime($filepath))  . '<br />';

echo '<br />';

$path = pathinfo($filepath);

echo $path['dirname'] . '<br />';
echo $path['basename'] . '<br />';
echo $path['filename'] . '<br />';
echo $path['extension'] . '<br />';

echo '<br />';

echo dirname($filepath) . '<br />';
echo basename($filepath) . '<br />';

?>
