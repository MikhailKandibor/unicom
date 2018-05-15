<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Авторизация - Учебный Центр «Юником»</title>
 <link rel="stylesheet" href="/template/css/bootstrap.css">
  <link rel="stylesheet" href="/template/css/font-awesome.min.css">
  <link rel="stylesheet" href="/template/css/main.css">
  <link rel="icon" type="image/png" href="/template/favicon.png">
  <script type="text/javascript" src="/template/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="/template/js/jquery.min.js"></script>
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


<div class="container">


  <div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">



<?php if($result):?>
  <p>Данные отредактированы!</p>
<?php else:?>
<?php if(isset($errors) && is_array($errors)):?>
  <ul>
    <?php foreach ($errors as $error):?>
        <p><li> - <?php echo $error;?></li></p>
    <?php endforeach; ?>
  </ul>
<?php endif;?>

<br><br>
  <form id="formcontact" class="form-contact" method="post" action="#">
                            <div class="form-contact-title">
                               <h6 class="contact-title" style="text-align: center">Редактирование данных</h6>
                               <div style="background: url(/template/img/news/1.jpg); height:250px; width: 250px; background-size: 600px; background-position: left top; background-repeat: no-repeat;
  border-radius: 50%; margin: 0 auto;">
                                    </div>
                              <p style="text-align: center">Добро пожаловать, <?php echo $user['username'];?></p>
                            </div>
                            <div class="info-contact">
                                 <p class="wrap-input-name"><label>Почта:</label>
                                    <input type="email" id="email" name="email" value="<?php echo $user['email'];?>" tabindex="1" required="required" placeholder="Адрес электронной почты" disabled>
                                </p>
                                <p class="wrap-input-name"><label>Имя:</label>
                                    <input type="text" id="name" name="name" value="<?php echo $name; ?>" tabindex="1" required="required" placeholder="Адрес электронной почты">
                                </p>
                                <p class="wrap-input-name"><label>Пароль:</label>
                                    <input type="password" id="password" name="password" value="<?php echo $password; ?>" tabindex="3" required="required" placeholder="Пароль от аккаунта">
                                </p>
                                <center><div class="wrap-btn">
                                   <button type="submit" name="submit" class="flat-btn bg-color">Обновить данные</button>
                                </div></center>
                            </div> 
                        </form>

<br><br>
<?php endif;?>
</div>



</div>
<div class="col-md-3"></div>
</div>
</div>


<?php
include ROOT.'/views/layout/footer.php';
?>