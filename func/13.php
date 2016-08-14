<?php
class order{
	//当前业务ID
	protected $id;
	public $var1 = 88;
	private $var2 = 99;
	
	function __construct($id = 0) {
		$this->id = $id;
	}
	function set($id){
		$this->id = $id;
	}
	function get(){
		return $this->id;
	}
}
$e = function($str){
	if(is_array($str)){
		print_r($str);
	}else{
		echo $str;
	}
	echo "<br>";
};
$obj = new order(8);
$e(get_class($obj));
$e(get_class_methods($obj));
$e(get_class_vars(get_class($obj)));
if(class_exists(get_class($obj))){
	$e(get_class($obj));
	if(method_exists(get_class($obj), "set")){
		$e("own set()");
	}
}

