<?php
  header("Content-Type: text/html; charset=UTF-8");
  require './com.szc.test/Md5Util.php';
  
  echo "111\n";
  $a = Md5Util::encode(3);
  echo "a=".$a."\n";
  if(class_exists('Md5Util')){
      $b = new Md5Util('张三');
      echo $b ->name;
  }
?>
