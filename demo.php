<?php

require('FileDownload.class.php');
$file = 'book.rar';
$name = time().'.rar';
$obj = new FileDownload();
$flag = $obj->download($file, $name);
//$flag = $obj->download($file, $name, true); // 断点续传

if(!$flag){
    echo 'file not exists';
}

?>