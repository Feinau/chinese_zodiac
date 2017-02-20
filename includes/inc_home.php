<?php
if(isset($_GET['section'])){
  switch ($_GET['section']){
    case 'zodiac':
      include('includes/inc_chinese_zodiac.php');
      break;
    
    case 'php':
      
    default:
      include('includes/inc_php_info.php');
      break;
  }
}else{
  include('includes/inc_php_info.php');
}