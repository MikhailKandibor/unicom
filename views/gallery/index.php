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

<style type="text/css">
img {
    width:100%;
}
.gallery-img img {
    width:350px;
    height:150px;
}
</style>

         <!-- Gallery -->
        <section class="flat-row bg-theme gallery galleryGrid02 galleryHome" style="padding-top: 30px"> 
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wrap-gallery">

                            <div class="item campus education gradution event">
                                <div class="gallery-img ">
                                    <a href="#">
                                        <img src="/template/img/news/1.jpg" alt="image">
                                        <div class="overlay">
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="item education teacher campus">
                                <div class="gallery-img">
                                    <a href="#">
                                        <img src="/template/img/news/2.jpg" alt="image">
                                        <div class="overlay">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="item teacher gradution event">
                                <div class="gallery-img">
                                    <a href="#">
                                        <img src="/template/img/news/1.jpg" alt="image">
                                        <div class="overlay">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="item education teacher campus">
                                <div class="gallery-img">
                                    <a href="#">
                                        <img src="/template/img/news/2.jpg" alt="image">
                                        <div class="overlay">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="item education gradution event">
                                <div class="gallery-img">
                                    <a href="#">
                                        <img src="/template/img/news/1.jpg" alt="image">
                                        <div class="overlay">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="item education teacher gradution event">
                                <div class="gallery-img">
                                    <a href="#">
                                        <img src="/template/img/news/1.jpg" alt="image">
                                        <div class="overlay">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="item education campus teacher event">
                                <div class="gallery-img">
                                    <a href="#">
                                        <img src="/template/img/news/1.jpg" alt="image">
                                        <div class="overlay">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="item education teacher gradution">
                                <div class="gallery-img">
                                    <a href="#">
                                        <img src="/template/img/news/1.jpg" alt="image">
                                        <div class="overlay">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="item teacher campus gradution">
                                <div class="gallery-img">
                                    <a href="#">
                                        <img src="/template/img/news/1.jpg" alt="image">
                                        <div class="overlay">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="item education gradution event">
                                <div class="gallery-img">
                                    <a href="#">
                                        <img src="/template/img/news/1.jpg" alt="image">
                                        <div class="overlay">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="item education campus teacher gradution">
                                <div class="gallery-img">
                                    <a href="#">
                                        <img src="/template/img/news/1.jpg" alt="image">
                                        <div class="overlay">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="item education teacher gradution event">
                                <div class="gallery-img">
                                    <a href="#">
                                        <img src="/template/img/news/1.jpg" alt="image">
                                        <div class="overlay">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div><!-- wrap-gallery -->
                    </div>
                </div>
            </div>        
            </section>

            <div class="blog-pagination">
                   <?php //echo $pagination->get(); ?>
                       
                </div>




<?php
include ROOT.'/views/layout/footer.php';
?>
</body>
</html>
