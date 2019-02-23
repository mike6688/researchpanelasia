<?php

class MyGreeter{
	
	public function __construct(){
		date_default_timezone_set('Asia/Shanghai');
	}
	public $time;

	public function get_t(){
		
		$this->time = date("H");

		if($this->time>0 && $this->time<12){

			echo "Good morning";

		}else if($this->time>12 && $this->time<18){

			echo "Good afternoon";

		}else if($this->time>18 && $this->time<24){

			echo "Good evening";
		}
	}
}


?>