<!DOCTYPE html> 

<html>

<head>

<link rel="shortcut icon" href="/favicon.ico" type="image/jpg">

<link type="text/css" rel="stylesheet" href="/css/styleShablon.css"/>

<link type="text/css" rel="stylesheet" href="/css/index.css"/>

<link type="text/css" rel="stylesheet" href="/css/achivements.css"/>

<link  rel="stylesheet" href="/css/lightbox.css"/>

<meta charset="utf-8">

<title>Хор "Скворушка"</title>

<meta name="viewport" content="width=device-width">

<meta name="keywords" content="хор, Скворушка, вокал, музика, хоровий спів, дитяча творчість, Україна, Харків,

нагороди, лауреат, гран-прі, конкурс">

<meta name="description" content="Сайт детского хорового коллектива хора 'Скворушка', Украина, г.Харьков">

</head>



<body>

    <?php include "html/header.html"; ?>



    <main>

    <h1>Наші досягнення</h1>    

    <?php include "db2.php";?>

    <?php 

        $res = mysqli_query($db, "SELECT count(id) FROM singles"); // 

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

    foreach ($posts as $post): {

        if($post['id'] % 2 != 0){    

        ?>

        <div class="block">

            <p>

            <a data-lightbox="lightbox" href="<?php echo $post["imgBig"]; ?>">    

            <img class="front" src=<?php echo $post["img"]; ?> alt=""></a>

                <div class="title">

                    <p><?php echo $post['title']; ?></p>

                </div>

                <br>

                <?php echo $post['text']; ?>

            </p>

        </div><br>

    <?php } 

    

    else{?>

    <div class="block1">

            <p>

            <a data-lightbox="lightbox" href="<?php echo $post["imgBig"]; ?>">    

            <img class="front" src=<?php echo $post["img"]; ?> alt=""></a>

                <div class="title">

                    <p><?php echo $post['title']; ?></p>

                </div>

                <br>

                <?php echo $post['text']; ?>

            </p>

        </div><br>

        <?php } }endforeach;?> 

        

            <div class="clear"></div>

                <div class="pagination"><?=$pagination?></div>





    <br><br><br>    

</main>    

<br>

    <?php include "html/footer.html"; ?>



    <script src="http://code.jquery.com/jquery-latest.js"></script>

    <script src="/js/lightbox-plus-jquery.js"></script>

</body>

</html>

