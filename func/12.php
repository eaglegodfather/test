<?php
//文件操作函数
$file = "D:/www/test/test.txt";
$e = function($str){
	if(is_array($str)){
		print_r($str);
	}else{
		echo $str;
	}
	echo "<br>";
};
// $e(basename($file));
// $e(dirname($file));
// $e(pathinfo($file));
// $e(file_exists($file));

// $fh = fopen($file, 'r+');
// if(fwrite($fh, "hello world!!")){
// 	$e('write success');
// }
// fclose($fh);

// $fh = fopen($file, 'r');
// $data = fread($fh, filesize($file));
// $e($data);
// fclose($fh);

// file_put_contents($file, "hello baby!!!!" );
// $info = file_get_contents($file);	
// $e($info);

//文件夹操作函数
$dir = "D:/www/test/func";
$handle = opendir($dir);
while($file = readdir($handle)) {
	$e($file);
}
closedir($handle);












?> 