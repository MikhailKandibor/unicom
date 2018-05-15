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
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="icon" type="image/png" href="/template/favicon.png">
  <script src="https://maps.api.2gis.ru/2.0/loader.js"></script>
  <script type="text/javascript" src="/template/js/jquery.min.js"></script>
  <script type="text/javascript" src="/template/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>



<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>

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
 <?php
include ROOT.'/views/layout/header.php';
?>




    
<?php if($result):?>

<script>
    setTimeout(function() {
        swal({
  type: 'success',
  title: 'Готово!',
  text: 'Вы успешно записались на курс! В рабочее время с вами свяжется менеджер!<br> В личном кабинете вы можете оплатить обучение!',
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


<div class="view">
        <!-- Button to trigger modal -->
         
    <!-- Modal -->
    <div class="modal fade" id="modal-container-51641" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">

          <!--<div class="modal-header">
            <h5 class="modal-title" id="myModalLabel" contenteditable="true">Подтвердите запись на курс</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>-->
          
          <div class="modal-body" contenteditable="false">
            
            <form id="entryCourse" class="form-contact" method="post" action="#">
          
                            <div class="form-contact-title" style="text-align: left; text-indent:2em;">


                               <h6 class="contact-title" style="text-align: center">Принять участие в курсе</h6>

                              <p >Уважаемый пользователь, вы можете принять участие в курсе - <b><?php echo $coursesItem['name'] ?></b>! </p>
                              <p style="text-align: left">Функция оплаты будет доступна после заключения договора в нашем офисе! Также вы можете оплатить своё обучения непосредственно в нашем офисе!</p>

                               <p style="text-align: left">Вы можете записаться сами, а также записать другого человека, например, своего ребёнка.</p>
                             

                               <p style="text-align: left">После записи на курс наш менеджер перезвонит вам в течение рабочего дня и согласует детали!</p>
                             

                              <p style="text-align: center"><u>Спасибо, что вы пользуетесь нашими услугами!</u></p><br>


                              
                              <p style="text-align: center"><b>Заполните следующие поля:</b></p>
                            </div>

                            <div class="info-contact">

<table style="width: 100%;">
                                <tr>
                                    <td>Имя<br>обучающегося:</td>
                                    <td >
                                        <p class="wrap-input-name">
                                            <input type="text" id="username" name="username" value="" tabindex="1" required="required" placeholder="Имя обучающегося" >
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Фамилия<br>обучающегося:</td>
                                    <td >
                                        <p class="wrap-input-name">
                                            <input type="text" id="lastname" name="lastname" value="" tabindex="1" required="required" placeholder="Фамилия обучающегося" >
                                        </p>
                                    </td>
                                </tr>

                                <tr>
                                <td colspan="2"><hr></td>
                                </tr>
                            
                                <tr>
                                    <td  style="padding-top: 0px">Имя:</td>
                                    <td  style="padding-top: 0px">
                                        <p class="wrap-input-name">
                                            <input type="text" id="username" name="username" value="<?php echo $user['username']; ?>" tabindex="1" required="required" placeholder="Имя пользователя" disabled>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Фамилия:</td>
                                    <td>
                                        <p class="wrap-input-name">
                                            <input type="text" id="lastname" name="lastname" value="<?php echo $user['lastname']; ?>" tabindex="1" required="required" placeholder="Фамилия пользователя" disabled>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Телефон*:</td>
                                    <td>
                                        <p class="wrap-input-name">
                                            <input type="text" id="lastname" name="lastname" value="<?php echo $user['phone']; ?>" tabindex="1" required="required" placeholder="Телефон" disabled>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                  <td colspan="2"><p style="font-size: 13px; font-weight: bold;">* пожалуйста, указывайте настоящий номер телефона</p></td>
                                </tr>

                                <tr>
                                    <td>Email:</td>
                                    <td>
                                        <p class="wrap-input-name">
                                            <input type="text" id="lastname" name="lastname" value="<?php echo $user['email']; ?>" tabindex="1" required="required" placeholder="Email" disabled>
                                        </p>
                                    </td>
                                </tr>
                                <tr>                                        
                                <td></td>
                                    <td><p style="text-align: center"><a href="/cabinet">ИСПРАВИТЬ ДАННЫЕ</a></p>
                                    </td>
                                </tr>
                                <tr>
                                  <td colspan="2"><hr></td>
                                </tr>
                                <tr>
                                    <td style="padding-top: 0px">Название курса:</td>
                                    <td style="padding-top: 0px">
                                        <p class="wrap-input-name">
                                            <input type="text" id="lastname" name="lastname" value="<?php echo $coursesItem['name']; ?>" tabindex="1" required="required" placeholder="Email" disabled>
                                        </p>
                                    </td>
                                </tr>
                                <tr >
                                    <td>Стоимость:</td>
                                    <td>
                                        <p class="wrap-input-name">
                                            <input type="text" id="lastname" name="lastname" value="<?php echo $coursesItem['price']; ?> руб." tabindex="1" required="required" placeholder="Email" disabled>
                                        </p>
                                    </td>
                                </tr>
                                <tr >
                                    <td>Длительность:</td>
                                    <td>
                                        <p class="wrap-input-name">
                                            <input type="text" id="lastname" name="lastname" value="<?php echo $coursesItem['timeline']; ?> часов." tabindex="1" required="required" placeholder="Длительность" disabled>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-top: 0px">Группа:</td>
                                    <td style="padding-top: 0px">
                                        <p class="wrap-input-name">
                                        <select>
  <option>Группа №1, c 15.05.2018г. по 15.06.2018г.</option>
  <option>Пункт 2</option>
</select>
                                        </p>
                                    </td>
                                </tr>
                              </tbody>
                            </table>



                               <!-- <p class="wrap-input-name">
                                    <input type="text" id="phone" name="phone" value="<?php echo $phone; ?>" tabindex="1" required="required" placeholder="Номер телефона">
                                </p>
                                <p class="wrap-input-name">
                                    <input type="password" id="password" name="password" value="" tabindex="3" required="required" placeholder="Пароль от аккаунта">
                                </p>
                                <p class="wrap-input-name">
                                    <input type="text" id="name" name="name" value="<?php echo $name; ?>" tabindex="3" required="required" placeholder="Ваше имя">
                                </p>
                                <p class="wrap-input-name">
                                    <input type="text" id="lastname" name="lastname" value="<?php echo $lastname; ?>" tabindex="3" required="required" placeholder="Ваша фамилия">
                                </p>-->
                                <input type="hidden" id="userId" name="userId" value="<?php echo $user['id']; ?>" tabindex="1" required="required">
                                <input type="hidden" id="courseId" name="courseId" value="<?php echo $coursesItem['id']; ?>" tabindex="1" required="required">

                                <center><div class="wrap-btn">
                                   <button type="submit" name="entryCourse-submit" class="flat-btn bg-color">ЗАПИСАТЬСЯ</button>
                                </div></center>


                      <?php endif;?> 
                            </div> 
                        </form>

          </div>
          <!--<div class="modal-footer">
          <a class="flat-btn" contenteditable="true">ПОДТВЕРДИТЬ</a>
            <button type="button" class="flat-btn" contenteditable="true">Подтвердить</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal" contenteditable="true">Выйти</button>
          </div>-->
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    </div>







<div class="view">
        <!-- Button to trigger modal -->
         
    <!-- Modal -->
    <div class="modal fade" id="modalGuest" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">

          <!--<div class="modal-header">
            <h5 class="modal-title" id="myModalLabel" contenteditable="true">Подтвердите запись на курс</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>-->
          
          <div class="modal-body" contenteditable="false">
            
          
                            <div class="form-contact-title">


                               <h6 class="contact-title" style="text-align: center">Принять участие в курсе</h6>

                              <p style="text-align: center; padding-bottom: 20px;">К сожалению, запись на курс в нашем учебном центре доступна только для <b>зарегистрированных</b> пользователей! Если у вас уже есть учётная запись, то вам необходимо <b>авторизоваться</b>!</p>
                              <p style="text-align: center"><u>Спасибо, что вы пользуетесь нашими услугами!</u></p><br>
                            </div>
                            <div class="info-contact">
                            

                                <center><div class="wrap-btn" style="padding-bottom: 20px">
                                   <a href="/user/login" ><button style="padding-top: 0" name="entryCourse" class="flat-btn bg-color">АВТОРИЗАЦИЯ</button></a>
                                   &nbsp;&nbsp;&nbsp;&nbsp;
                                   <a href="/user/register" ><button name="entryCourse" style="padding-top: 0" class="flat-btn bg-color">РЕГИСТРАЦИЯ</button></a>
                                </div></center>


                            </div> 

          </div>
          <!--<div class="modal-footer">
          <a class="flat-btn" contenteditable="true">ПОДТВЕРДИТЬ</a>
            <button type="button" class="flat-btn" contenteditable="true">Подтвердить</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal" contenteditable="true">Выйти</button>
          </div>-->
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    </div>








 <!-- Details -->
        <section class="flat-row bg-theme" style="padding: 20px 0px 0px 0px">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-8 wrap-reponsive animated bounceInLeft">
                        <div class="wrap-course-details">




                                    <center><a data-fancybox="gallery" href="
<?php echo Courses::getImage($coursesItem['id']);?>">
<img src="<?php echo Courses::getImage($coursesItem['id']);?>" width="300">
                                    </a></center>

           
                      



                            <div class="course-text">
                              <h3 class="course-title-text"><a style="font-size: 16pt" href="#"><?php echo mb_strtoupper($coursesItem['name']); ?>
                                                      
                                                    </a></h3>
                                <p><?php echo $coursesItem['description'] ?></p>

<br>
<!-- Таблица курсов -->
<div class="table-body" style="padding-top: 0; ">

  <div class="form-contact" >
      <div class="form-contact-title">
        <h6 class="contact-title" style="text-align: left; margin-bottom: 0; font-size: 16px;">Список групп:</h6>
      </div>
   </div>

                            <table class="table" >
                                <thead >
                                    <tr>
                                        <th>Номер группы</th>
                                        <th>Начало обучения</th>
                                        <th>Окончание обучения</th>
                                    </tr>
                                </thead>
                                <tbody>

                    <tr>
                        <td>1</td>
                        <td>15.05.2018г.</td>  
                        <td>15.06.2018г.</td>  

    
                    </tr>

                                    
                                </tbody>
                            </table>
                        </div>




                        <!-- Конец -->




                            </div>
                            
                        </div>
                        
                    </div><!-- col-md-9 -->
                    <div class="col-md-3 col-sm-4 wrap-overflow animated bounceInRight">
                        <div class="sidebar">
                            <div class="widget widget-button">

                                <ul class="infomation-free" style="margin: 0;">
                                    <li>Стоимость:</li>
                                </ul>

                                <p class="button-free">
                                  <?php echo $coursesItem['price'] ?> руб.
                                </p>
                                <ul class="infomation-free">
                                    <li>Категория:<span><?php echo $coursesItem['catname'] ?></span></li>
                                </ul>
                                <div class="wrap-btn" style="text-align: center; margin: 0 5px;">





                                    <?php if(User::isGuest()):?>
                                       <a class="flat-btn" id="modal-51641" href="#modalGuest" role="button" data-toggle="modal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ЗАПИСАТЬСЯ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                    <? else: ?>

                                        <a class="flat-btn" id="modal-51641" href="#modal-container-51641" role="button" data-toggle="modal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ЗАПИСАТЬСЯ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                    <?php endif;?>

                                </div>
                            </div>

                            <div class="widget widget-categories">
                                <h3 class="widget-title">КАТЕГОРИИ КУРСОВ</h3>
                                <ul>
                                    <li <?php if ($_SERVER['REQUEST_URI'] == "/courses/"){?>class="active"<?php } ?>><a href="/courses/">ВСЕ</a></li>
                                      <?php foreach ($categories as $categoryItem) : ?>
                                      <li><a class="" href="/courses/category/<?php echo $categoryItem['id'] ?>"><?php echo mb_strtoupper($categoryItem['name']) ?></a></li>
                                      <?php endforeach; ?>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>























<?php
include ROOT.'/views/layout/footer.php';
?>
    

</body>
</html>
