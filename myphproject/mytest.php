<?php
  header("Content-Type: text/html; charset=UTF-8");
  require './com.szc.test/Md5Util.php';
  require './common.php';

  echo "111<br>";
  $a = Md5Util::encode(3);
  echo "a=".$a."<br>";
  if(class_exists('Md5Util')){
      $b = new Md5Util('张三');
      echo $b ->name."<br>";
  }
  $p = new Persons();
  $p->setNames("tesfff");
  echo  $p->getNames()."<br>";

?>
