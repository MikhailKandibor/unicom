<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Учебный Центр «Юником» - компьютерные курсы в городе Абакан</title>
  <link rel="stylesheet" href="/template/css/bootstrap.css">
  <link rel="stylesheet" href="/template/css/font-awesome.min.css">
  <link rel="stylesheet" href="/template/css/main.css">
  <link rel="icon" type="image/png" href="/template/favicon.png">
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <script src="https://maps.api.2gis.ru/2.0/loader.js"></script>
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





 




 <!-- Контейнер с новостями -->
  <div class="container w">
      <div class="row centered">





<div class="welcome">
  <h3>Последние новости</h3><br>
  <p>Мы регулярно публикуем новости, касающиеся нашей деятельности</p>
<br>
  <section class="flat-row">

      <div class="container">
          <div class="blog-list2 lates-new wrap-box">

<style type="text/css">
.entry-content p:after{
  content: '';
  display: inline-block;
  position: absolute;
  bottom: 0;
  right: 0;
  width: 14.2em;
  height: 2.3em;
  background: linear-gradient(to top, #fff, rgba(255, 255, 255, 0));
}
.entry-content p {
  position: relative;
  margin: 0;
  font-size: 1em;
  line-height: 1.4em;
  height: 5.6em;
  overflow: hidden;
}
</style>
              <div class="row">



<?php foreach ($newsList as $newsItem) :?>
<div class="col-md-6 wrap-grid animated fadeIn">
                      <article class="entry">
                          <div class="row">
                              <div class="col-md-6 col-sm-6 left">
                                  <div class="entry-post">
                                      <div class="entry-meta">
                                          <span>
                                              <?php echo $newsItem['date'] ?>
                                          </span>
                                      </div>
                                      <h3 class="entry-title"><a href="/news/<?php echo $newsItem['id'] ?>">
                                      <?php echo $newsItem['title'] ?>
                                      </a></h3>
                                      <div class="entry-author">
                                          <span>автор: <a href="#"><?php echo $newsItem['users'] ?></a></span>
                                      </div>
                                      <div class="entry-content">
                                          <p><?php echo $newsItem['description'] ?></p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-6 col-sm-6 right">
                                  <div class="feature-post">

                                    <a href="<?php echo News::getImage($newsItem['id']);?>">
                                      <div style="background: url(<?php echo News::getImage($newsItem['id']);?>); height:270px; weight: 270px; background-size: 600px; background-position: left top; background-repeat: no-repeat;">
                                    </div>
                                    </a>

                                  </div>
                              </div>
                          </div>
                      </article>
</div>
<?php endforeach;?>

                  


                
                  </div>
              </div>
          </div>
      </div>
      <div class="button-style center mg-left2">
          <div class="wrap-btn" style="height: 70px;">
              <a class="flat-btn pdwith57 no-bg" href="/news/">КО ВСЕМ НОВОСТЯМ</a>
          </div>
      </div>
  </section>
  </div>
</div>
</div>






















<div class="map" style="opacity: 0">
<!-- Карта от 2гис -->
<a id="map2gis" class="dg-widget-link" href="http://2gis.ru/abakan/firm/9711414977505000/center/91.451765,53.717408/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Абакана</a><div class="dg-widget-link"><a href="http://2gis.ru/abakan/center/91.451765,53.717408/zoom/16/routeTab/rsType/bus/to/91.451765,53.717408╎ЮниКом плюс, учебный центр?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до ЮниКом плюс, учебный центр</a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":"100%","height":100,"borderColor": "none", "pos":{"lat":53.717408,"lon":91.451765,"zoom":15},"opt":{"city":"abakan"},"org":[{"id":"9711414977505000"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
</div>

                    <script type="text/javascript">
                      $('.map').delay(3000).animate({'opacity':'1'},500);

                    </script>


<?php
include ROOT.'/views/layout/footer.php';
?>
</body>
</html>
