<?php if(isset($_COOKIE['count'])){
            $count = $_COOKIE['count'];
            setcookie('count', $count+1, time()+3600 * 24 * 7);
        }else{
            setcookie('count', 1, time()+3600 * 24 * 7); 
            $count = 1;
        } 
?>

<!DOCTYPE html> 
<html>
<head>
<script src="http://code.jquery.com/jquery-latest.js"></script>    
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="/js/swalert.js"></script>
<script src="/js/sweetalert.min.js"></script>
<script src="/js/jquery.cookie.js"></script>  
<script src="/js/jquery.maskedinput.js"></script>
<link rel="shortcut icon" href="/favicon.ico" type="image/jpg">
<link type="text/css" rel="stylesheet" href="/css/styleShablon.css"/>
<link type="text/css" rel="stylesheet" href="/css/index.css"/>
<link type="text/css" rel="stylesheet" href="/css/slider.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<meta charset="utf-8">
<title>Хор "Скворушка"</title>
<meta name="viewport" content="width=device-width">
<meta name="keywords" content="хор, Скворушка, вокал, музика, хоровий спів, дитяча творчість, Україна, Харків">
<meta name="description" content="Сайт детского хорового коллектива хора 'Скворушка', Украина, г.Харьков">
</head>

<body>
    <?php include "html/header.html"; ?>
    <main>
    <div class="content">
        <div id="slider"></div>
    </div>
        <h1>Вас вітає хор "Скворушка"!</h1>
        <p>     Одного разу потрапивши до нас, ви назавжди потрапите до захоплюючого світу співу. 
                Колектив "Скворушка" налічує 40-45 осіб. Керівник хору Юлія Миколаївна Іванова, чий творчий шлях -
                це шлях педагога, дослідника і практика-виконавця. Запорукою її щасливої творчої долі була зустріч
                з Лідією Борисівною Шапіро, керівником дитячого хору "Скворушка". Саме  завдяки  співу  в  цьому  колективі 
                Ю.М. Іванова обрала професію хормейстера.
        </p>
           <br><video controls="controls"><source src="/video/video.mp4" width="550" height="400"> </video>
           <br>
           <p><h2>Ми раді бачити кожного в нашому колективі!</h2></p>
           <p>Запрошуємо всіх бажаючих з 3-х до 20-ти років
           в нашу велику, дружну сім'ю. Працюють групи для різних вікових груп. Ви потрапите в захоплюючий світ
           співу, де все буде цікаво - вчитися, виступати в кращих концертних залах Харкова, гастролювати по Україні
           та країнами Європи. У нас ви знайдете безліч друзів, а також отримаєте високопрофесійну вокальну підготовку 
           у кращих педагогів.
           <h2>Ми навчимо співати грамотно і професійно!<br>
           Чекаємо на вас в Харківському областному палаці дитячої та юнацької творчості</h2></p>
           </main>    
    <?php include "html/footer.html"; ?>
</body>
</html>

      
 <!--
      <div class="popWindow subscribe_window">
          <p class="subcsribe-text">Долучайтесь до нашого колективу!</p>
          <form class="subscribe-form" autocomplete="off">

          <input type="hidden" name="project_name" value="skvorushka.com">
          <input type="hidden" name="admin_email" value="skvorushka@mail.com">
        <input type="hidden" name="form_subject" value="заявка на запись">
        <div>
       <input type="text" id="name" name="name" placeholder=" " required>
       <label for="name">Ім'я <span>*</span></label>
     </div>
     <div>
       <input type="text" id="age" name="age" placeholder=" " required>
       <label for="age">Вік <span>*</span></label>
     </div>
     
     <div>
       <input id="phone" type="tel" placeholder="+38(0XX)-XXX-XX-XX" pattern="^\+380\d{9}$" name="phone" required>
       <label for="phone">Телефон <span>*</span></label> 
     </div>



            
            <div class="aligncenter">
              <button type="submit" class="btn"><i class="fa fa-check" aria-hidden="true"></i> Записатися</button>
            </div>
            <div class="req-fields"><sup>*</sup> обов'язкові поля</div>
          </form>
          <div class="close-btn">&times;</div>
        </div>
 
        <div class="popWindow thank_you_window">
          <p class="thank_you_title">Дякуємо!<br>Ваша заявка була відправлена!</p>
          <p class="thank_you_body">Вам обов'язково зателефонують!</p>
          <div class="close-btn">&times;</div>
        </div>
 
      


<script>
  // PopUp Form and thank you popup after sending message
var $popOverlay = $(".popup-overlay");
var $popWindow = $(".popWindow");
var $subscribeWindow = $(".subscribe_window");
var $popThankYouWindow = $(".thank_you_window");
var $popClose = $(".close-btn");
 
$(function() {
  // Close Pop-Up after clicking on the button "Close"
  $popClose.on("click", function() {
    $popOverlay.fadeOut();
    $popWindow.fadeOut();
  });
 
  // Close Pop-Up after clicking on the Overlay
  $(document).on("click", function(event) {
    if ($(event.target).closest($popWindow).length) return;
    $popOverlay.fadeOut();
    $popWindow.fadeOut();
    event.stopPropagation();
  });
 
  // Form Subscribe
  $(".subscribe-form").submit(function() {
    var th = $(this);
    $.ajax({
      type: "POST",
      url: "mail.php",
      data: th.serialize()
    }).done(function() {
      // после успешной отправки скрываем форму подписки и выводим окно с благодарностью за заполнение формы
      $subscribeWindow.fadeOut();
      $popThankYouWindow.fadeIn();
      // используем куки на 30 дней, если человек заполнил форму
      // для куки обязательно должен быть подключен jquery.cookie.min.js
      $.cookie('hideTheModal', 'true', { expires: 30 });
      // очищаем форму
      setTimeout(function() {
        th.trigger("reset");
      }, 1000);
    });
    return false;
  });
});


// используйте этот код, если нужно появление формы без куки
$(window).load(function() {
  setTimeout(function() {
    $popOverlay.fadeIn();
    $subscribeWindow.fadeIn();
  }, 2000);
});
  </script>*/

</body>
</html>

