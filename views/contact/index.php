<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Учебный Центр «Юником» - компьютерные курсы в городе Абакан</title>
    <link rel="stylesheet" type="text/css" href="/template/css/sweetalert.css">
    <script type="text/javascript" src="/template/js/sweetalert.js"></script>
  <link rel="stylesheet" href="/template/css/bootstrap.css">
  <link rel="stylesheet" href="/template/css/font-awesome.min.css">
  <link rel="stylesheet" href="/template/css/main.css">
  <link rel="icon" type="image/png" href="/template/favicon.png">
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <script type="text/javascript" src="/template/js/jquery.min.js"></script>
  <script type="text/javascript" src="/template/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){

$(window).scroll(function(){
if ($(this).scrollTop() > 100) {
$('.scrollup').fadeIn();
} else {
$('.scrollup').fadeOut();
}
});

$('.scrollup').click(function(){
$("html, body").animate({ scrollTop: 0 }, 600);
return false;
});

});
</script>



</head>
<body >

  <div class="social_vertical">
    <ul>
      <li><a title="ВКонтакте" class="ang_vk" href="#" target="_blank" rel="nofollow">ВКонтакте</a></li>
      <li><a title="Facebook" class="ang_fb" href="#" target="_blank" rel="nofollow">Facebook</a></li>
      <li><a title="Одноклассники" class="ang_ok" href="#" target="_blank" rel="nofollow">Одноклассники</a></li>
    </ul>
  </div>

<?php
include ROOT.'/views/layout/header.php';
?>

<br><br>



 <!-- Contact -->
        <section class="flat-row contact">
            <div class="container">
                <div class="row opacityup"  style="opacity: 0">
                    <div class="col-md-4 col-sm-6">

                      <?php if($result):?>  
                        <script type="text/javascript">
    $(document).ready(function() {
swal({
  type: 'success',
  title: 'Готово!',
  text: 'Ваше сообщение успешно передано! В ближайшее время с вами свяжется наш менеджер!',
  showConfirmButton: false,
  timer: 3000
})

});


</script>
  <?php else: ?>
<?php if(isset($errors) && is_array($errors)):?>
  <ul>
    <?php foreach ($errors as $error):?>
        <p><li> - <?php echo $error;?></li></p>
    <?php endforeach; ?>
  </ul>
<?php endif;?>
                      <?php endif;?> 
                        <form id="formcontact" class="form-contact animated bounceInDown" method="post" action="#">
                            <div class="form-contact-title">
                               <h6 class="contact-title">ОСТАЛИСЬ ВОПРОСЫ? - ЗАДАЙТЕ ИХ НАМ!</h6>
                               <p>Если у вас остались какие-либо вопросы,<br>вы можете задать их в форме ниже, или просто оставить данные<br> чтобы мы вам перезвонили.</p><br>
                               <?php if(isset($_SESSION['user'])) :?>
                                  <p style="text-align: center;"><b>Так как вы авторизовались на сайте, мы уже подставили ваши данные в форму.</b></p>
                               <? endif;?>
                            </div>
                            <div class="info-contact">
                                <p class="wrap-input-name">

                                    <input type="text" id="name" name="name" value="<?php if(isset($_SESSION['user'])) { 
                                  $userId = User::checkLogged();
                                  // Получаем информацию о пользователе из БД
                                  $user = User::getUserById($userId);
                                  echo $user['username']; 
                                }?>" tabindex="1" required="required" placeholder="Как вас зовут?" <?php if(isset($_SESSION['user'])) { 
                                    echo 'disabled';
                                    echo ' style="color:#ffbf43"';
                                   }?>></p>
                                <p class="wrap-input-phone">

                                    <input type="text" id="phone" name="phone" value="<?php if(isset($_SESSION['user'])) { 
                                  $userId = User::checkLogged();
                                  // Получаем информацию о пользователе из БД
                                  $user = User::getUserById($userId);
                                  echo $user['phone']; 
                                }?>" tabindex="2" required="required" placeholder="Номер телефона для связи" <?php if(isset($_SESSION['user'])) { 
                                    echo 'disabled';
                                    echo ' style="color:#ffbf43"';
                                   }?>>

                                </p>
                                <p class="wrap-input-email">

                                    <input type="text" id="email" name="email" value="<?php if(isset($_SESSION['user'])) { 
                                  $userId = User::checkLogged();
                                  // Получаем информацию о пользователе из БД
                                  $user = User::getUserById($userId);
                                  echo $user['email']; 
                                }?>" tabindex="3" required="required" placeholder="Ваш Email адрес" <?php if(isset($_SESSION['user'])) { 
                                    echo 'disabled';
                                    echo ' style="color:#ffbf43"';
                                   }?>>

                                </p>
                                <p class="wrap-input-messages">

                                    <textarea id="messages-contact" name="message" tabindex="4" placeholder="Опишите свою проблему, задайте вопрос или просто оставьте пожелание" required></textarea>

                                </p>
                                <div class="row centered">
                                <div class="wrap-btn">
                                <input type="submit" name="submit" value="Отправить" class="flat-btn bg-color">
                                    <!--<button type="submit" name="submit" class="flat-btn bg-color">Отправить</button>-->


                                </div></div>
                            </div> 
                        </form>    
                    </div>


                    <div class="col-md-8 col-sm-6 animated bounceInRight">
                        <div class="wrap-maps">
                            <div id="flat-map" >
                              <a class="dg-widget-link" href="http://2gis.ru/abakan/firm/9711414977505000/center/91.45141839981079,53.719517068669695/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Абакана</a><div class="dg-widget-link"><a href="http://2gis.ru/abakan/center/91.451765,53.717408/zoom/16/routeTab/rsType/bus/to/91.451765,53.717408╎ЮниКом плюс, учебный центр?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до ЮниКом плюс, учебный центр</a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":"100%","height":475,"borderColor":"#a3a3a3","pos":{"lat":53.719517068669695,"lon":91.45141839981079,"zoom":16},"opt":{"city":"abakan"},"org":[{"id":"9711414977505000"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<br><br>


                    <script type="text/javascript">
                      $('.opacityup').delay(2000).animate({'opacity':'1'},500);

                    </script>


<?php
include ROOT.'/views/layout/footer.php';
?>
</body>
</html>
