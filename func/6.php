<?php
function go($name = "jack") {		//定义go函数
    echo $name."走了<p>";
}
function back($string)				//定义back函数
{
    echo "又回来了，$string<p>";
}
$func = "go";						//重新给变量赋值
$func("Tom"); 						//使用变量函数来调用函数go()
$func = "back";						//重新给变量赋值
$func("Hanks");

?>