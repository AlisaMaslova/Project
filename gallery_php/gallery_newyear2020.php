<?php 

include '../function.php';

$dir =  "/photogallery/photo/newyear2020/small/";

$bdir =  "/photogallery/photo/newyear2020/big/";

$images = get_images($_SERVER['DOCUMENT_ROOT'] . $dir);

 /*-----пагинация----*/   

$perpage = 12;

$count_img = count($images);

$count_pages = ceil($count_img / $perpage);

if(!$count_pages) $count_pages = 1;

if(isset($_GET['page'])){

    $page = (int)$_GET['page'];

    if($page < 0) $page = 1;

}else{

    $page = 1;

}

if($page > $count_pages) $page = $count_pages;

$start_pos = ($page - 1) * $perpage;

$end_pos = $start_pos + $perpage;

if($end_pos > $count_img) $end_pos = $count_img;

$pagination = pagination($page, $count_pages);

?>

<!DOCTYPE html> 

<html>

<head>

<link rel="shortcut icon" href="/fabicon.jpg" type="image/jpg">

<link type="text/css" rel="stylesheet" href="/css/styleShablon.css"/>

<link type="text/css" rel="stylesheet" href="/css/index.css"/>

<link type="text/css" rel="stylesheet" href="/css/photogallery.css"/>

<link  rel="stylesheet" href="/css/lightbox.css"/>

<meta charset="utf-8">

<title>Хор "Скворушка"</title>

<meta name="viewport" content="width=device-width">

<meta name="keywords" content="хор, Скворушка, вокал, музыка, хоровое пение, детское творчество, Украина, Харьков">

<meta name="description" content="Сайт детского хорового коллектива хора 'Скворушка', Украина, г.Харьков">

<link rel="import" href="html/header.html">

</head>



<body>

    <?php include $_SERVER['DOCUMENT_ROOT'] . "/html/header.html"; ?>

    <main>

    <h1>Хор "Скворушка" разом зустрічає Новий 2021 рік</h1>

    <div class="wrapper">

     <div class="gallery">



     <?php if($images): $i = $start_pos+1; ?>

     <?php for($j = $start_pos; $j < $end_pos; $j++): ?>

        <div class="item">

             <div>

                 <a data-lightbox="lightbox" href="<?=$bdir . $images[$j]?>">

                 <img class="front" src="<?=$dir . $images[$j]?>" alt="">

                 <span class="back">Фото <?=$i?></span>

                 </a>

            </div>

         </div>

         <?php $i++; endfor; ?>

         <?else: ?>

            <p>В данной папке нет картинок</p>

            <?php endif; ?>



            <div class="clear"></div>

            <?php if($count_pages > 1): ?>

                <div class="pagination"><?=$pagination?></div>

                <?php endif; ?>

     </div>

</div>

    </main>    



    <?php include $_SERVER['DOCUMENT_ROOT'] . "/html/footer.html"; ?>



    <script src="http://code.jquery.com/jquery-latest.js"></script>

    <script src="/js/lightbox-plus-jquery.js"></script>

</body>

</html>

