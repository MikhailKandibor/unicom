<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Кабинет пользователя - Учебный Центр «Юником»</title>
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
<body>
<?php
include ROOT.'/views/layout/header.php';
?>







<div class="container" style="padding-bottom: 20px">
  <div class="row">



    <div class="col-md-3">
	   <br><br>
	     <div class="form-contact-title">
         <h2 style="text-align: center">
             Добро пожаловать, <b><?php echo $user['username'];?></b>!
         </h2>
        <p style="text-align: center">
             В своём кабинете вы можете посмотреть данные своего аккаунта, а также отредактировать данные своего аккаунта!
        </p>
          <br>
          <div style="background: url(/template/img/no-ava.png); height:150px; width: 150px; background-size: 150px; background-position: center center; background-repeat: no-repeat;
  border-radius: 50%; margin: 0 auto;">
          </div>

     <?php if($user['role'] == 'admin'):?>
        <center>
        <br>
          <div class="form-contact">
          <div class="wrap-btn">
            <p>
             <a href="/admin/">
              <button type="submit" name="submit" class="flat-btn bg-color">Админпанель</button>
             </a>
          </div>
          </div>
        </center>
        </p>
      <?php endif;?>

      </div>
      </div>             


<div class="col-md-9">

<style type="text/css">
  
  /**
 * Tabs navigation
 */
.c-tabs-nav {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  list-style: none;
  margin: 0;
  padding: 0;
}

.c-tabs-nav__link {
  -webkit-box-flex: 1;
  -webkit-flex: 1;
      -ms-flex: 1;
          flex: 1;
  margin-right: 4px;
  padding: 12px;
  color: #fff;
  background-color: #6f787f;
  text-align: center;
  -webkit-transition: color 0.3s;
          transition: color 0.3s;
}

.c-tabs-nav__link:last-child {
  margin-right: 0;
}

.c-tabs-nav__link:hover {
  color: #ffbf43;
}

.c-tabs-nav__link.is-active {
  color: #ffbf43;
  background-color: #5a6167;
}

.c-tabs-nav__link i,
.c-tabs-nav__link span {
  margin: 0;
  padding: 0;
  line-height: 1;
}

.c-tabs-nav__link i {
  font-size: 18px;
}

.c-tabs-nav__link span {
  display: none;
  font-size: 18px;
}

@media all and (min-width: 720px) {
  .c-tabs-nav__link i {
    margin-bottom: 12px;
    font-size: 22px;
  }
  .c-tabs-nav__link span {
    display: block;
  }
}

/**
 * Tab
 */
.c-tab {
  display: none;
}

.c-tab.is-active {
  display: block;
}

.c-tab__content {
  padding-top: 1.5rem;
  padding-bottom: 1.5rem;
}

/**
 * Tabs no-js fallback
 */
.c-tabs.no-js .c-tabs-nav {
  display: none;
}

.c-tabs.no-js .c-tab {
  display: block;
  margin-bottom: 1.5rem;
}

.c-tabs.no-js .c-tab:last-child {
  margin-bottom: 0;
}
</style>

<div class="col-md-12" style="margin-top: 20px">

<div id="tabs" class="c-tabs no-js">
  <div class="c-tabs-nav">
    <a href="#" class="c-tabs-nav__link is-active">Список курсов</a>
    <a href="#" class="c-tabs-nav__link">Сообщения (0)</a>
    <a href="#" class="c-tabs-nav__link">Редактирование данных</a>
    
  </div>
  <div class="c-tab is-active">
    <div class="c-tab__content">
<!-- Таблица курсов -->
<div class="table-body" style="padding-top: 0; ">

  <div class="form-contact" >
      <div class="form-contact-title">
        <h6 class="contact-title" style="text-align: center; margin-bottom: 0">Список курсов</h6>
      </div>
   </div>

                            <table class="table" >
                                <thead >
                                    <tr>
                                        <th>Название курса</th>
                                        <th>ФИО обучающегося</th>
                                        <th>Дата записи</th>
                                        <th>Группа</th>
                                        <th>Договор</th>
                                        <th>Статус оплаты</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

 <?php if($ordersListUser):?>
                                <?php foreach ($ordersListUser as $order): ?>
                    <tr>
                        <td ><?php echo $order['name_course']; ?></td>
                        <td >Иванов Иван Иванович</td>  
                        <td><?php echo $order['date']; ?></td>  
                        <td>Группа №1, с 15.05.2018г. по 15.06.2018г.</td>

                        <td>Договор №243 от 10.05.2018г</td>  

                        <?php if($order['id_pay_status'] == '3'){?>
<td>
<form id="payment" name="payment" method="post" action="https://sci.interkassa.com/" enctype="utf-8">
  <input type="hidden" name="ik_co_id" value="5ae19d423c1eaf9b7c8b4567" />
  <input type="hidden" name="ik_pm_no" value="<?php echo time().'_'.$order['id']; ?>" />
  <input type="hidden" name="ik_am" value="<?php echo $order['price']; ?>" />
  <input type="hidden" name="ik_x_id" value="<?php echo $order['id']; ?>" />
  <input type="hidden" name="ik_cur" value="RUB" />
  <input type="hidden" name="ik_desc" value="<?php echo $order['name_course']; ?>" />
        <a href="/"><button type="submit-pay"> Оплатить </button></a>
</form>


</td>  
       <?} else {
          echo '<td>'.$order['pay_status'].'</td>'; 
           }
        ?>
                          
<?php 
    if($order['id_pay_status'] != '3'){?>
<td><a href="/cabinet/delete/<?php echo $order['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
<? } ?> 

                    </tr>
                <?php endforeach; ?>

       <?php else: ?>         
           <td colspan="4">В данный момент, вы ещё не записались на обучение.<br> Вы можете сделать это в разделе "Курсы обучения"</td>

<?php endif; ?>

                                    
                                </tbody>
                            </table>
                        </div>




                        <!-- Конец -->
    </div>
  </div>
  <div class="c-tab">
    <div class="c-tab__content">2</div>
  </div>

    <div class="c-tab">
    <div class="c-tab__content">
<!-- Редактирование данных -->


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


  <form id="formcontact" class="form-contact" method="post" action="#">
                            <div class="form-contact-title">
                               <h6 class="contact-title" style="text-align: center">Редактирование данных</h6>
                            </div>

                            <div class="info-contact">
                                 <p class="wrap-input-name"><label>Почта:</label>
                                    <input style="color:#6f787f" type="email" id="email" name="email" value="<?php echo $user['email'];?>" tabindex="1" required="required" placeholder="Адрес электронной почты" disabled>
                                </p>
                                <p class="wrap-input-name"><label>Имя:</label>
                                    <input type="text" id="name" name="name" value="<?php echo $name; ?>" tabindex="1" required="required" placeholder="Ваше имя">
                                </p>
                                <p class="wrap-input-name"><label>Фамилия:</label>
                                    <input type="text" id="lastname" name="lastname" value="<?php echo $lastname; ?>" tabindex="1" required="required" placeholder="Ваша фамилия">
                                </p>

<script>
//Код jQuery, установливающий маску для ввода телефона элементу input
//1. После загрузки страницы,  когда все элементы будут доступны выполнить...
$(function(){
  //2. Получить элемент, к которому необходимо добавить маску
  $("#phone").mask("+7(999) 999-9999");
});
</script> 

                                <p class="wrap-input-name"><label>Телефон:</label>
                                    <input type="text" id="phone" name="phone" value="<?php echo $phone; ?>" tabindex="1" required="required" placeholder="Номер телефона">
                                </p>
                                <center><div class="wrap-btn">
                                   <button type="submit" name="submit" class="flat-btn bg-color">Обновить</button>
                                </div></center>
                            </div> 
                        </form>

<?php endif;?>
<br>

<!-- конец -->
    </div>
  </div>
</div>

</div>

 





</div>

</div>
      

 
</div>

<?php
include ROOT.'/views/layout/footer.php';
?>

      
  
  <script type="text/javascript" src="/template/js/jquery.maskedinput.min.js"></script>

<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="http://onetwostudy.com/demo/adaptivnye-vkladki-na-javascript-i-css/demo.js"></script>
<script>
      var myTabs = tabs({
        el: '#tabs',
        tabNavigationLinks: '.c-tabs-nav__link',
        tabContentContainers: '.c-tab'
      });
      myTabs.init();
    </script>

</body>
</html>
