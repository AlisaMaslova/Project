<!--<_?php if(isset($_COOKIE['count'])){

            $count = $_COOKIE['count'];

            setcookie('count', $count+1, time()+3600 * 24 * 7);

        }else{

            setcookie('count', 1, time()+3600 * 24 * 7); 

            $count = 1;

        } 

?>-->

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

<link type="text/css" rel="stylesheet" href="css/styleShablon.css"/>

<link type="text/css" rel="stylesheet" href="css/index.css"/>

<link type="text/css" rel="stylesheet" href="css/contact.css"/>

<meta charset="utf-8">

<title>Хор "Скворушка"</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="keywords" content="хор, Скворушка, вокал, музика, хоровий спів, дитяча творчість,

                                зворотній зв'язок, email, контакти, Україна, Харків">

<meta name="description" content="Сайт детского хорового коллектива хора 'Скворушка', Украина, г.Харьков">

</head>



<body>

    <?php include "html/header.html";?>



    <main>

    <h1>Як нас знайти</h1>

    <div class="cont">

    <p><img src="pictures/place.png" alt="" align="top"> Адреса: м.Харків, вул. Сумська 37</p><br>

    <p><img src="pictures/tel.png" alt=""  align="top"> Телефон: +38(067)2510398, +38(066)7910094</p><br>

    <p><img src="pictures/mes.png" alt=""  align="top"> Email: skvorushka.choir@gmail.com</p>

    </div>

    <div>

        <br><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2564.434942032807!2d36.23159231517182!3d50.00320252737145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a0e0cc1977cb%3A0x3ca1ff3d48a7df74!2z0YPQuy4g0KHRg9C80YHQutCw0Y8sIDM3LCDQpdCw0YDRjNC60L7Qsiwg0KXQsNGA0YzQutC-0LLRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwgNjEwMDA!5e0!3m2!1sru!2sua!4v1634389931432!5m2!1sru!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    </div>



    <selection class="contact__form">

        <br><h1>Напишіть нам</h1>

        <div class="contact__wrapper">

            <form id="mail" name="newform" method="post">

                <div class="form__inputs">

                    <p>Ім'я<span class="red">*</span><br> <input id="name1" type="text" name="name"></p>

                    <p>Email<span class="red">*</span><br> <input id="email" type="email" name="email"></p>

                </div>

                <div class="form__inputs">

                <p>Дата<br><input id="date" type="datetime-local" id="localdate" name="date"></p>



                <p>Телефон<br><input id="phone" type="tel" placeholder="+38(0XX)-XXX-XX-XX" name="phone"></p> 

                <script>

                $(function(){

                $("#phone").mask("+38(099) 999-99-99");

                });

                </script>            

                

                </div> 

                <div class="form__inputs">

                <p>Оберіть мету звернення<span class="red">*</span><br><select id="list1" name="list1">

                <option></option>

                <option>Записатися</option>

                <option>Виникли питання</option>

                <option>Інше</option>

                </select></p>

                </div><br>

                

                <div class="form__inputs">

                <p>Повідомлення<br></p></div>

                <textarea id="messag" name="messag"></textarea>

                <div class="button__block">

                    <button class="btn" id="btn"  type="button" onclick="return func();"><p>ВІДПРАВИТИ</p></button>

                </div>



            </form>

        </div>

        <br><br>

        <br><br><br>

    </selection>

    </main>    

    <?php include "html/footer.html"; ?>



    

<script>

    function func(event) {  

        var isOldBrowser = false;

        var uAgent = navigator.userAgent;            

        isOldBrowser = (uAgent.search('Chrome') > 0 )  ? (uAgent.match(/Chrome\/(\d+)/)[1] < "50") : isOldBrowser;

        isOldBrowser = (uAgent.search('Firefox') > 0 )  ? (uAgent.match(/Firefox\/(\d+)/)[1] < "53") : isOldBrowser;

        alert(" name1: " + $('#name1').val() + "+" + $('#name1').text() + ' email:' + $('#email').val());

        if ($('#name1').val() == "") {

            if(!isOldBrowser ){

            Swal.fire({

                icon: "error",

                title: "Ваше повідомлення не відправлено!",

                text: "Заповніть поле Ім'я!"

            })}

            else{

                alert("Ваше повідомлення не відправлено!  Заповніть поле Ім'я!  Також рекомендується терміново оновити браузер!"); 

            }

            exit;

            } /*

         else {

            $.cookie('name', $('#name').val(), {expires: 7, path: '/'});

        };   */

        

        



        

    var email = $('#email').val();

    var success = false;

    if (email.length< 1) {

        if(!isOldBrowser) {

        Swal.fire({

            icon: "error",

            title: "Ваше повідомлення не відправлено!",

            text: "Заповніть поле Email!"

        })}

        else{

            alert("Ваше повідомлення не відправлено!  Заповніть поле Email! Також рекомендується терміново оновити браузер!");

        } exit;

        



    } else {

        var regEx = /^[a-zA-Z0-9\_\.\-]{2,20}\@[a-zA-Z0-9\_\-]{2,20}\.[A-Za-z]{2,9}$/;

        var validEmail = regEx.test(email);

        if (!validEmail) {

            $('#email').after();

            if(!isOldBrowser) {

            Swal.fire({

                icon: "error",

                title: "Ваше повідомлення не відправлено!",

                text: "Введіть правильний Email!"

            })

            }else{

                alert("Ваше повідомлення не відправлено!  Введіть правильний Email!  Також рекомендується терміново оновити браузер!");

            } exit;

            }/*

         else{

            $.cookie('email', $('#email').val(), {expires: 7, path: '/'});

        };*/



    }



    if ($('#list1').val() == "") { 

        if(!isOldBrowser) {

            Swal.fire({

                icon: "error",

                title: "Ваше повідомлення не відправлено!",

                text: "Заповніть поле Мета!"

            })}else{

            alert("Ваше повідомлення не відправлено!  Заповніть поле Мета!  Також рекомендується терміново оновити браузер!");

        }

            exit;

        };   

   



    success = true;

    $.ajax({

        type: 'POST',
        url: "sendmail.php", 
        dataType: 'html', 
        data: {name: $('#name1').val(), email: $('#email').val(), messag: $('#messag').val(), date: $('#date').val(),
            phone: $('#phone').val(), list: $("#list :selected").val()},
        success: function(result) {
            /*if($.cookie('cnt_mail')){
                $.cookie('cnt_mail', Number($.cookie('cnt_mail'))+1, {expires: 7, path: '/'});
            } else {
                $.cookie('cnt_mail', 1, {expires: 7, path: '/'});
            };*/
            /*var txt = ' (' + $.cookie('name') + ', ' + $.cookie('email') + ', кол-во: ' +  $.cookie('cnt_mail') + ') ';
            */if(!isOldBrowser) {
            Swal.fire('Ваше повідомлення відправлено!', "Параметри: ім'я, email та кількість відправлених повідомлень записані до файлів cookie" + result, 'success');
            } else{
                alert("Ваше повідомлення відправлено! Параметри: ім'я, email та кількість відправлених повідомлень записані до файлів cookie");
            }
            } 
    });

    if(!success) 
    {
        event.preventDefault();
    } else {
        document.newform.reset();
    }        
};
</script>
</body>
</html>

