<?php 

require_once ('config.php') ;

$id = $_GET['id'] ;

mysqli_query ($connect, "DELETE FROM `vse_kningi` WHERE `vse_kningi`.`id` = '$id ' ") ;

header ('Location: admin.php') ;

exit () ;

?>