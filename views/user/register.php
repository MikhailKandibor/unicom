<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Регистрация - Учебный Центр «Юником»</title>
  <link rel="stylesheet" href="/template/css/bootstrap.css">
  <link rel="stylesheet" href="/template/css/font-awesome.min.css">
  <link rel="stylesheet" href="/template/css/main.css">
  <link rel="icon" type="image/png" href="/template/favicon.png">
  <script type="text/javascript" src="/template/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/template/js/jquery.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="stylesheet" type="text/css" href="/template/css/sweetalert.css">
    <script type="text/javascript" src="/template/js/sweetalert.js"></script>

</head>
<body >




<?php
include ROOT.'/views/layout/header.php';
?>




  <div class="container" style="margin-bottom: 50px; margin-top: 50px">


    <div class="row">
  <div class="col-md-3">
  </div>
  <div class="col-md-6">

  <?php if($result):?>
    <script>
    setTimeout(function() {
        swal({
  type: 'success',
  title: 'Успешно!',
  text: 'Вы успешно зарегистрировались!',
  showConfirmButton: false,
  timer: 3000
        }, function() {
            window.location = "/cabinet";
        });
    }, 1000);
</script>
  <?php else: ?>
<?php if(isset($errors) && is_array($errors)):?>
<ul>
     <?php foreach ($errors as $error):?>
        <p><li> - <?php echo $error;?></li></p>
    <?php endforeach; ?>
</ul>
<?php endif;?>


<form id="formcontact" class="form-contact" method="post" action="#">
                            <div class="form-contact-title">
                               <h6 class="contact-title" style="text-align: center">Регистрация</h6>
                              <p>Зарегистрированный аккаунт откроет вам гораздо большо возможностей. Если вы уже зарегистированы, то вам необходимо <a href="/user/login">авторизоваться</a> под своим аккаунтом!</p>
                            </div>
                            <div class="info-contact">
                                <p class="wrap-input-name">
                                    <input type="email" id="email" name="email" value="<?php echo $email; ?>" tabindex="1" required="required" placeholder="Адрес электронной почты*">
                                    <p style="font-size: 13px; font-weight: bold; padding-left: 20px">* на указанный почтовый ящик будет отправлено письмо с подтверждением регистрации</p>
                                </p>


                                <script>
//Код jQuery, установливающий маску для ввода телефона элементу input
//1. После загрузки страницы,  когда все элементы будут доступны выполнить...
$(function(){
  //2. Получить элемент, к которому необходимо добавить маску
  $("#phone").mask("+7(999) 999-9999");
});
</script> 


                                <p class="wrap-input-name">
                                    <input type="text" id="phone" name="phone" value="<?php echo $phone; ?>" tabindex="1" required="required" placeholder="Номер телефона*">
                                    <p style="font-size: 13px; font-weight: bold; padding-left: 20px">* пожалуйста, указывайте настоящий номер телефона</p>
                                </p>
                                <p class="wrap-input-name">
                                    <input type="password" id="password" name="password" value="" tabindex="3" required="required" placeholder="Пароль">
                                </p>
                                <p class="wrap-input-name">
                                    <input type="password" id="password-2" name="password-2" value="" tabindex="3" required="required" placeholder="Подтверждение пароля">
                                </p>
                                <p class="wrap-input-name">
                                    <input type="text" id="name" name="name" value="<?php echo $name; ?>" tabindex="3" required="required" placeholder="Имя">
                                </p>
                                <p class="wrap-input-name">
                                    <input type="text" id="lastname" name="lastname" value="<?php echo $lastname; ?>" tabindex="3" required="required" placeholder="Фамилия">
                                </p>



                                
                                <p class="wrap-input-name"><input name='agree' type="checkbox" onchange="submit.disabled=!checked" checked/> <span style="padding-left: 15px;">* Я согласен с использованием моих персональных данных</span></p>

<div style="margin-bottom: 20px; margin-top: 20px" class="g-recaptcha" data-sitekey="6Le1JFkUAAAAAEVl9ltxETYJsjqRndzkzMX84WO3"></div>

                                <center><div class="wrap-btn flat-btn" style="padding: 0;">
                                   <button type="submit" name="submit">Зарегистрироваться</button>
                                </div></center>


                            </div> 
                        </form>

<?php endif;?>

  </div>

  <div class="col-md-3">
  </div>

  </div>
  </div>


<?
include ROOT.'/views/layout/footer.php'; ?>


<script type="text/javascript" src="/template/js/jquery.maskedinput.min.js"></script>

<script>
function Go(Obj) {
    document.getElementsByName(Obj.name)[1].disabled=Obj.checked
}
</script>

</body>
</html>