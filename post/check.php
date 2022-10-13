<?php
    $login = filter_var  ($_POST ['login'])  ;

    $name = filter_var ($_POST ['name'])  ;

   $name_book = filter_var ( $_POST ['name_book']);

   $book_description = filter_var ( $_POST ['book_description']);

   $book_text = filter_var ( $_POST ['book_text']);


   $mysql = new mysqli ('localhost' , 'root' , 'root' , 'kniga') ;

   $mysql -> query ("INSERT INTO `vse_kningi` (`name` , `name_book`, `book_description` , `book_text`) 
   VALUES ('$name', '$name_book', '$book_description' ,  '$book_text')") ;

$mysql -> close () ;

$new_url = 'http://post' ;

header ('Location:'.$new_url) ;

exit () ;


?>
