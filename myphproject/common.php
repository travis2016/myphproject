<?php
  header("Content-Type: text/html;charset=UTF-8");

  class Common{
    private $names; //名字a

    //get方法获取值
    public function __get($pro_names){
    	if(isset($this->$pro_names)){
	  return($this->$pro_names);
	}else{
	  return(null);
	}
    }

   public function __set($pro_names,$value){
      $this->$pro_names = $value;
   }  
  
    public function setNames($value){
        if(trim($value)){
           $this->names = $value;
        }  
    }

    public function getNames(){
     return $this->names;
    }
  }

  //$p = new Persons();
  //$p->setNames("sdd");
  //echo $p->getNames()."<br>";

?>
