<?php 

require_once ('config.php') ;

$id = $_GET['id'] ;

mysqli_query ($connect, "DELETE FROM `vse_kningi` WHERE `vse_kningi`.`id` = '$id ' ") ;

$new_url = 'http://post' ;

header ('Location:'.$new_url) ;

exit () ;

?>