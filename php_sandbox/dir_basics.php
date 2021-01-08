<?php

echo getcwd() . "<br />";

chdir('assets');

echo getcwd() . "<br />";

chdir('..');

echo getcwd() . "<br />";

chdir(__DIR__ . '/assets');

echo getcwd() . "<br />";

?>
