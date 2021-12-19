<!DOCTYPE html> 

<html>

<head>

<link rel="shortcut icon" href="/favicon.ico" type="image/jpg">

<link type="text/css" rel="stylesheet" href="/css/styleShablon.css"/>

<link type="text/css" rel="stylesheet" href="/css/index.css"/>

<link type="text/css" rel="stylesheet" href="/css/video.css"/>

<link  rel="stylesheet" href="/css/lightbox.css"/>

<meta charset="utf-8">

<title>Хор "Скворушка"</title>

<meta name="viewport" content="width=device-width">

<meta name="keywords" content="хор, Скворушка, вокал, музика, хоровий спів, дитяча творчість, Україна, Харків, відеогалерея">

<meta name="description" content="Сайт детского хорового коллектива хора 'Скворушка', Украина, г.Харьков">

</head>



<body>

    <?php include "html/header.html"; ?>

    <main>

    <h1>Відеогалерея</h1>



    <?php include "db3.php";?>

    <?php 

        



        $res = mysqli_query($db, "SELECT count(id) FROM singles"); // 

        if (!$res) {

            echo 'Could not run query: ' . mysql_error();

            exit;

        }

       $k = mysqli_fetch_row($res);        

    include "function.php";

    $page = isset($_GET['page']) ? $_GET['page'] : 1;

    $limit = 10;

    $offset = $limit * ($page - 1);

    $cntpg = ceil($k[0] / $limit);

    $pagination = pagination($page, $cntpg);

    $posts = get_posts($limit, $offset);

    ?>

    



    <?php 

    foreach ($posts as $post): {

        if($post['id'] % 2 != 0){ 

        ?>

        

    <div class="brd" style="background: url(//img.youtube.com/vi/<?php echo $post["link"]; ?>/maxresdefault.jpg)  0% 0% / cover;">

        <div class="video-play" data-video="<?php echo $post["link"]; ?>" onclick="videoplay(this);"></div>

    </div>

    <?php } 

    

    else{?>

     <div class="brd1" style="background: url(//img.youtube.com/vi/<?php echo $post["link"]; ?>/maxresdefault.jpg)  0% 0% / cover;">

        <div class="video1-play" data-video="<?php echo $post["link"]; ?>" onclick="videoplay(this);" ></div>

    </div><br> <?php } }endforeach;?> 

   

        <div class="clear"></div>

        <br><br><div class="pagination"><?=$pagination?></div>

    <br>

    <br>

    </main>    

</selecter>

    <?php include "html/footer.html"; ?>

    <script src="http://code.jquery.com/jquery-latest.js"></script>

    <script src="js/lightbox-plus-jquery.js"></script>



    <script>

function videoplay(button) {

    let par = button.parentNode;

    let videoId = button.getAttribute('data-video');

    par.innerHTML = '<iframe src="//www.youtube.com/embed/' + videoId + '?autoplay=1" scrolling="no" style="width: 100%; height: 100%;" allow="autoplay" allowfullscreen></iframe>';

}

</script>

</body>

</html>

