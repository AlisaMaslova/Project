<!DOCTYPE html> 
<html>
<head>
<link rel="shortcut icon" href="/favicon.ico" type="image/jpg">
<link type="text/css" rel="stylesheet" href="/css/styleShablon.css"/>
<link type="text/css" rel="stylesheet" href="/css/index.css"/>
<link type="text/css" rel="stylesheet" href="/css/news.css"/>
<meta charset="utf-8">
<title>Хор "Скворушка"</title>
<meta name="viewport" content="width=device-width">
<meta name="keywords" content="хор, Скворушка, вокал, музика, хоровий спів, дитяча творчість, Україна, Харків, новини">
<meta name="description" content="Сайт детского хорового коллектива хора 'Скворушка', Украина, г.Харьков">
</head>

<body>
    <?php include "html/header.html"; ?>

    <main>
    <h1>Новини</h1>
    
    <?php include "db1.php";
    $res = mysqli_query($db, "SELECT count(id) FROM singles"); 
    if (!$res) {
        echo 'Could not run query: ' . mysql_error();
        exit;
    }
   $k = mysqli_fetch_row($res); 
   
    include "function.php";
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit = 5;
    $offset = $limit * ($page - 1);
    $cntpg = ceil($k[0] / $limit);
    $pagination = pagination($page, $cntpg);
    $posts = get_posts($limit, $offset);    
    ?>

        <?php 
        foreach ($posts as $post): {?>
        
        <div class="block">
            <p><img src=<?php echo $post["img"]; ?>>
                <div class="title">
                    <a href='contentsingle.php?id=<?php echo $post["id"]; ?>'><?php echo $post["title"]; ?></a>
                </div>
                <br>
                <?php $string = $post["text"];
                      $len = strlen($string);
                      if ($len > 700 ) {
                        $string2 = substr($string, 0, strpos($string, " ", 700) ) . " ... "; 
                      }
                ?>
                <?php echo $string2?><a href="contentsingle.php?id=<?php echo $post["id"]; ?>"><button id="but"><p>Читати далі</p></button></a></p>
               
                    <span class="date"><?php echo date("d.m.Y в H:i", strtotime($post["date"]));?> <img src="/pictures/date.png"></span>
                    <span class="views"><?php echo $post["views"]; ?><img src="/pictures/eye.png"></span> 
        </p>
                </div>

        <?php  } endforeach;?>
        </div>
        <div class="clear"></div>
                <div class="pagination"><?=$pagination?></div>

</main>    
<br>
    <?php include "html/footer.html"; ?>
</body>
</html>
