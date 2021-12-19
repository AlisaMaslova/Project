<?php
$age = $_POST["age"];
if($age >= 3 && $age < 6)
header("Location: 1groups.php");
else if($age >= 6 && $age < 8)
header("Location: 2groups.php");
else if($age >= 8 && $age < 12)
header("Location: 3groups.php");
else if($age >= 12)
header("Location: 4groups.php");
?>
<!DOCTYPE html> 
<html>
<head>
<link rel="shortcut icon" href="/favicon.ico" type="image/jpg">
<link type="text/css" rel="stylesheet" href="/css/styleShablon.css"/>
<link type="text/css" rel="stylesheet" href="/css/index.css"/>
<link type="text/css" rel="stylesheet" href="/css/groups.css"/>
<meta charset="utf-8">
<title>Хор "Скворушка"</title>
<meta name="viewport" content="width=device-width">
<meta name="keywords" content="хор, Скворушка, вокал, музика, хоровий спів, дитяча творчість, Україна, Харків, записатися,
тест, вік">
<meta name="description" content="Сайт детского хорового коллектива хора 'Скворушка', Украина, г.Харьков">
</head>

<body>
    <?php include "/html/header.html"; ?>

    <main>
    <h1>Запис до хору</h1>
    <p>Якщо ви вже на цій сторінці, то, мабуть, твердо вирішили долучитися до нашої творчої родини.
    У колективі працюють 4 різновікові групи - молодша підготовча група, молодша, середня та старша.
     Поділ на групи дає змогу дотримуватись принципу логічності й послідовності навчання. 
     Освітній процес у кожній з груп базується, перш за все, на врахуванні вікових та індивідуальних
     особливостей дитини.</p>
    <h2>Для визначення яка група вам підходить, введіть вік дитини до поля нижче!</h2>
    <h3>Нагадуємо! У нашому хорі працюють групи для дітей від 3-х до 21 року!</h3>
    <form  method="POST">
    <input type="number" id="num_field" name="age" max="21" min="3">
    <div class="button__block">
        <button class="btn" id="btn" type="submit"><p>ВИЗНАЧИТИ</p></button>        
    </div>
    <br><br>
    </form>
</main>    

    <?php include "html/footer.html"; ?>
</body>
</html>
