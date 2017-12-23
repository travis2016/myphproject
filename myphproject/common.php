<?php
  header("Content-Type: text/html;charset=UTF-8");
  require './com.szc.test/Md5Util.php';

  class Persons{
    private $names; //名字a

    public function __get($pro_names){
	    echo '1';
	    echo 'tww';
    }


  }

?>
