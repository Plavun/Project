<?php

$login = filter_var (trim ($_POST ['login']) , FILTER_SANITIZE_STRING) ;

$pass = filter_var (trim ($_POST ['pass']) , FILTER_SANITIZE_STRING) ;


$pass = md5 ($pass."assasasa12") ;

$mysql = new mysqli ('localhost' , 'root' , 'root' , 'kniga') ;


$result = $mysql->query ("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass' ") ;

$user = $result -> fetch_assoc () ;

if (count($user) == 0 ) {

    echo "Такой пользователь не найден" ;
    exit() ;
} 

    setcookie ('user' , $user ['name'], time() + 3600 , "/") ;

$mysql -> close () ;

$new_url = 'http://post/newKniga.html' ;

header ('Location:'. $new_url) ;

exit() ;

?>