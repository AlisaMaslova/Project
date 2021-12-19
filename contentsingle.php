<!DOCTYPE html> 

<html>

<head>

<link rel="shortcut icon" href="/favicon.ico" type="image/jpg">

<link type="text/css" rel="stylesheet" href="/css/styleShablon.css"/>

<link type="text/css" rel="stylesheet" href="/css/index.css"/>

<link type="text/css" rel="stylesheet" href="/css/contentsingle.css"/>
<link  rel="stylesheet" href="/css/lightbox.css"/>

<meta charset="utf-8">

<title>Хор "Скворушка"</title>

<meta name="viewport" content="width=device-width">

<meta name="keywords" content="хор, Скворушка, вокал, музыка, хоровое пение, детское творчество, Украина, Харьков">

<meta name="description" content="Сайт детского хорового коллектива хора 'Скворушка', Украина, г.Харьков">

</head>





<body>

    <?php include "html/header.html"; ?>



    <main>

    <h1>Новини</h1>

<?php include "db1.php";?>

<?php views_update($_GET['id']); ?>

<?php $single = get_single_by_id($_GET['id']); ?>



<div class="block">


<h1><?php echo $single[1];?></h1>

<span class="date"> Дата: &emsp;&emsp;&emsp;&emsp;<?php     echo date("d.m.Y в H:i", strtotime($single[4])); ?></span><br>

<span class="views">Переглядів:&ensp; <?php       echo $single[5]; ?></span> 

<br><br><a data-lightbox="lightbox" href="<?php echo $single[3]; ?>"> 
<img class="img" src=<?php echo $single[3]; ?>></a>

<p> <?php echo $single[2]; ?></p><br>

</div>

</main>    

<br>

    <?php include "html/footer.html"; ?>

<script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/lightbox-plus-jquery.js"></script>

</body>

</html>