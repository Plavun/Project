<?php 



require_once 'config.php' ;



$kniga_id = $_GET['id'] ;

$kniga = mysqli_query ($connect, "SELECT * FROM `vse_kningi` WHERE `id` = '$kniga_id' ") ;
$kniga= mysqli_fetch_assoc ($kniga) ; 



?>



<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактировать  книгу</title>


</head>
<body>

   
<Center>
        <form action="obnov.php" method="post">
            <div>
            <fieldset>
            <legend align="center">Редактировать название книги</legend>
            <table>
                <input type="hidden" name= "id" value="<?= $kniga['id']?>">
            <tr>
                <td><label for="">Новое название книги:</label></td>
                <td><input type="text" name="name_book"  value="<?= $kniga['name_book']?>"></td>
            </tr>
            <tr>
                <td><label for="">Краткое описание книги:</label></td>
                <td><textarea name="book_description" id="book_description" cols="50" rows="11"><?= $kniga['book_description']?></textarea></td>
            </tr>
            <tr>
            <td><label for="">Текст книги:</label></td>
            <td><textarea name="book_text" id="book_text" cols="100" rows="25"><?= $kniga['book_text']?></textarea></td>
            </tr>
        </table>
       <button type="submit">Редаектировать</button>
        </fieldset>
         </div>
        </form>

    </Center>


    
</body>
</html>