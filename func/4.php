<?php
	function values($tax="",$price){
		$price=$price+($price*$tax);
		echo "价格:$price<br>";
	}
	values(100,0.25);        //为可选参数赋值0.25
	values(100);            //没有给可选参数赋值
?>