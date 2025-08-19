<?php

$dir = scandir(__DIR__);
//var_dump($dir);

//mkdir('foo');
//rmdir('foo');
//mkdir('foo/bar', recursive: true);
//rmdir('foo');


/*
if(file_exists('foo.txt')){
    echo filesize('foo.txt') . "<br>";

    file_put_contents('foo.txt', 'Hello World');


    clearstatcache();
    echo filesize ('foo.txt') . "<br>";
} else{
    echo "File does not exist";
}

*/


/*
$file = fopen('foo.txt', 'r');
//modes
//r = read
//w = write
//a = append
//x = create
//r+ = read and write
//w+ = write and read
//a+ = append and read


//readline from file
while($line = fgetcsv($file)) {

    print_r($line);
}

fclose($file);

*/

/*
$content = file_get_contents('foo.txt', offset: 3, length: 2);
echo $content;
*/

//file_put_contents('bar.txt', 'Hello');
//file_put_contents('bar.txt', 'World' , FILE_APPEND);
unlink('bar.txt');
rename('foo.txt', 'bar.txt');

?>