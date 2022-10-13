<?php

$mysql = new mysqli ('localhost' , 'root' , 'root' , 'kniga') ;

$sql = "SELECT * FROM `vse_kningi`" ;
$result = $mysql->query($sql) ;

$vibor = mysqli_fetch_assoc ($result) ;


?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Книги</title>
</head>
<body>


    
<center>

<form action="">
            <div>
          <a href="http://kniga">Зарегестрироваться/Авторизоваться</a>
            </div>
        </form>

<?php 

while ($vibor = mysqli_fetch_assoc($result)){ ?>

        <div class="main">
            <div class="title">
                <h3><?php echo $vibor ['name_book'] ; ?></h3>
            </div>

        <div class="info"> 
            <p><?php echo $vibor ['book_description'] ?></p>
     </div>
        <div class="col-md-7">
          <div class="text"> <?php echo $vibor ['book_text'] ?>
     </div>
    </div>
        </div>

<?php   }

?>

    






</center>



    
</body>
</html>