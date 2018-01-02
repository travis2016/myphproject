<?php
  header("Content-Type: text/html;charset=UTF-8");
  require './com.szc.test/Md5Util.php';

  class Persons{
    private $names; //名字a

    //get方法获取值
    public function __get($pro_names){
    	if(isset($this->$pro_names)){
	  return($this->$pro_names);
	}else{
	  return(null);
	}
    }

   


  }

?>
