<?php 
	function values($price,$tax=0.45){		//定义一个函数，函数中的一个参数有默认值
		$price=$price+($price*$tax); 		//计算物品金额
		return array(111,1000,1000);						//返回金额
	}
	print_r(values(100));						//调用函数

?>