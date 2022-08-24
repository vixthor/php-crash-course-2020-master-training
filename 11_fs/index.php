<?php
// Magic constants
echo __DIR__. '<br>';
echo __FILE__. '<br>';

// Create directory
//mkdir('groot');

// Rename directory
//rename('groot','Thor');
// Delete directory
//rmdir('Thor');
// Read files and folders inside directory
$files = scandir('../');
echo '<pre>';
var_dump($files);
echo '</pre>';
// file_get_contents, file_put_contents
echo file_get_contents('lorem.txt');    

// file_get_contents from URL
// file_get_contents('sample.txt', 'get_some_Content');
https://www.php.net/manual/en/book.filesystem.php
 
// file_exists
// is_dir
// filemtime
// filesize
// disk_free_space
// file