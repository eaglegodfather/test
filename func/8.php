<?php
	$num = 1234;						//声明一个整型变量
	$math = &$num;						//声明一个对变量$num的引用$math
	echo "\$math is:  ".$math."<br>";	//输出引用$math
	unset($math);						//取消引用$math
	echo "\$math is: ".$math."<br>";	//再次输出引用
	echo "\$num is:  ".$num;			//输出原变量
?>