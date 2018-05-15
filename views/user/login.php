  <?php if($result):?>
<script language="JavaScript"> 
  window.location.href = "/cabinet"
</script>
  <?php else: ?>
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
  <script src='https://www.google.com/recaptcha/api.js'></script>

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
                               <h6 class="contact-title" style="text-align: center">АВТОРИЗАЦИЯ</h6>
                               <p>Для просмотра некоторых разделов, необходима авторизация на сайте. Пожалуйста, авторизируйстесь или <a href="/user/register/">зарегистрируйтесь</a>.</p>
                            </div>
                            <div class="info-contact">
                                <p class="wrap-input-name">
                                    <input type="email" id="email" name="email" value="<?php echo $email; ?>" tabindex="1" required="required" placeholder="Адрес электронной почты">
                                </p>
                                <p class="wrap-input-email">
                                    <input type="password" id="password" name="password" value="" tabindex="3" required="required" placeholder="Пароль от аккаунта">
                                </p>
                                <div style="margin-bottom: 20px; margin-top: 20px" class="g-recaptcha" data-sitekey="6Le1JFkUAAAAAEVl9ltxETYJsjqRndzkzMX84WO3"></div>
                                <center><div class="wrap-btn">
                                   <button type="submit" name="submit" class="flat-btn bg-color">Войти</button>
                                </div></center>
                            </div> 
                        </form>

<?php endif;?>

    <br><br>

</div>





</div>
<div class="col-md-4"></div>
</div>
</div>


<?php
include ROOT.'/views/layout/footer.php';
?>