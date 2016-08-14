<?php
function &example($tmp=0){					//定义一个函数，别忘了加“&”符
	return $tmp;							//返回参数$str
}
$str = &example("巴菲特");				//声明一个函数的引用$str1;
echo $str."<p>";
?>