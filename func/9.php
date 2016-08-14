<?php
// $greet = function($name)
// {
//     printf("Hello %s!<br>", $name);
// };

// $greet('World'); //调用闭包函数，输出：hello world!

// function callGreet( $func ) {
// 	$func( 'Baby' );
// }
// callGreet($greet);
// die;

// function getMoney() {
// 	$rmb = 1;
// 	$dollar = 6;
// 	$func = function() use ( $rmb ) {
// 		echo $rmb;
// 		echo $dollar;
// 	};
// 	$func();
// }
// getMoney();
//输出：
//1
//报错，找不到dorllar变量

// echo preg_replace_callback('~-([a-z])~', function ($match) {
// 	return strtoupper($match[1]);
// }, 'hello-world');

// exit;

//例一
//在函数里定义一个匿名函数，并且调用它
function printStr() {
	$func = function( $str ) {
		echo $str;
	};
	$func( 'some string1<br>' );
}

printStr();



//例二
//在函数中把匿名函数返回，并且调用它
function getPrintStrFunc() {
	$func = function( $str ) {
		echo $str;
	};
	return $func;
}

$printStrFunc = getPrintStrFunc();
$printStrFunc( 'some string2<br>' );




//例三
//把匿名函数当做参数传递，并且调用它
function callFunc( $func ) {
	$func( 'some string3<br>' );
}

$printStrFunc = function( $str ) {
	echo $str;
};
callFunc( $printStrFunc );

//也可以直接将匿名函数进行传递。如果你了解js，这种写法可能会很熟悉
callFunc( function( $str ) {
	echo $str;
} );