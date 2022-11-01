
<?php 

require_once 'config.php' ;

$id = $_POST['id'] ;

$login = filter_var  ($_POST ['login'])  ;

$name = filter_var ($_POST ['name'])  ;

$name_book = filter_var ( $_POST ['name_book']);

$book_description = filter_var ( $_POST ['book_description']);

$book_text = filter_var ( $_POST ['book_text']);


mysqli_query ($connect, "UPDATE `vse_kningi` SET `name_book` = '$name_book', `book_description` = 'book_description', `book_text` = 'book_text' WHERE `vse_kningi`.`id` = '$id' ") ;
 
header ('Location: admin.php ') ;


exit () ;

?>