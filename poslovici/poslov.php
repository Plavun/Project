<?php

$homepage = file_get_contents('https://nukadeti.ru/poslovicy/pro-druzhbu/') ;

echo '<pre>';

preg_match_all ('/<li[^>]*?>(.*?)<\/li>/si', $homepage , $arr) ;

$z = preg_grep ('/[.!?]/u' , $arr[0] ) ; 

$x = array_map( 'strip_tags', $z ) ;

$a = preg_grep ('/\bНе /ui' , $x) ;

$c = preg_replace ('#\d#u', ' ', $a ) ;




print_r ($c)  ;










?>




