<?php
//输出函数
echo "<pre>";
// echo 1,2,3,4,"\n";
// print "hi Ted \n";
// // exit("你挂了");
// printf('There is a difference between %s and %s !<br>', 'good', 'evil');

$arr = array(1,2=>"Sky","a"=>"Ted");
// var_dump($arr);
// var_export($arr);
// print_r($arr);

//变量类型检测
// if(is_string($arr)){
// 	echo "this is string!";
// }else{
// 	echo "this is ".gettype($arr);
// }
//字符串函数
$str = "I love music";
// echo strlen($str);
// print_r(explode(" ", $str));
// echo implode("|", array('lastname', 'email', 'phone'))."\n";
// echo substr("abcdef", 1,2)."\n";    // 返回 "f"
// echo substr_replace($str, 'dota', 7)."\n";	
// echo str_replace("%body%", "black", "color is '%body%'");

// echo "<br>";
// $text = "<p>Test paragraph.</p><!-- Comment --> ''<a href='#fragment'>Other text</a>";
// echo strip_tags($text)."\n";
// echo htmlspecialchars($text)."\n";
// echo strcmp("ab", "ab")."\n";	
// echo stripos("abc", "C")."\n";
// echo strrev($str)."\n";
// echo strtolower($str)."&".strtoupper($str)."\n";

//数组函数

// print_r(array_values($arr));
// print_r(array_keys($arr));
// print_r(array_flip($arr));
// print_r(array_search('Sky',$arr));
// echo "<br>";
// print_r(array_key_exists('a',$arr));

// print_r(array_slice($arr,2));
// print_r(array_splice($arr,2));print_r($arr);
// print_r(array_chunk($arr, 2));
// print_r(array_pad($arr, 5,"zbj"));
//栈和队列
// $arr = array(1,2=>"Sky","a"=>"Ted");
// array_push($arr,"apple");print_r($arr);
// array_pop($arr);print_r($arr);
// array_shift($arr);print_r($arr);
// array_unshift($arr,"Tom");print_r($arr);
//排序
$fruits = array('a9','a9','last'=>'a7');
// sort($fruits);print_r($fruits);
// rsort($fruits);print_r($fruits);
// asort($fruits);print_r($fruits);
// arsort($fruits);print_r($fruits);

// usort ( $fruits , function ($a, $b) {
// 			return strcmp($a,$b);
// 		}
// 	);
// print_r($fruits);
// uasort ( $fruits , function ($a, $b) {
// 			return strcmp($a,$b); 
// 		}
// 	);
// print_r($fruits);
//其它
// print_r(array_merge($arr,$fruits));
// print_r(range(0,5));
// print_r(array_unique($fruits));
// print_r(array_reverse($arr,true));
// print_r(array_rand($arr,2));
// shuffle($arr);print_r($arr);

//日期函数
$date = getdate();
echo time(),"\n";
echo date("Y-m-d H:i:s"),"\n";
echo strtotime(date("Y-m-d H:i:s")), "\n";
//数学函数
// echo abs(-200);  //200
// echo "<br>";
// echo ceil(5.2); //6
// echo "<br>";
// echo floor(5.2); //5
// echo "<br>";
// echo round(-5.236,2); //-5.24