



<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Учебный Центр «Юником» - компьютерные курсы в городе Абакан</title>
  <link rel="stylesheet" href="/template/css/bootstrap.css">
  <link rel="stylesheet" href="/template/css/font-awesome.min.css">
  <link rel="stylesheet" href="/template/css/main.css">
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="icon" type="image/png" href="/template/favicon.png">
  <script src="https://maps.api.2gis.ru/2.0/loader.js"></script>
  <script type="text/javascript" src="/template/js/jquery.min.js"></script>
  <script type="text/javascript" src="/template/js/bootstrap.min.js"></script>


<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>


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














<div class="container" style="padding-top: 30px">
                <div class="row animated fadeIn">



<section class="flat-row pd-blog bg-theme blog-details">
                <div class="container">
                    <div class="wrap-post">
                        <div class="row">
                            <div class="col-md-12">
                                <article class="entry">
                                    <div class="feature-post" style="padding-top:20px;">
                                    <center><a data-fancybox="gallery" href="<?php echo News::getImage($newsItem['id']);?>" ><img src="<?php echo News::getImage($newsItem['id']);?>" style="height:335px;"></a></center>
   
                                    </div><!-- row -->
                                    <div class="entry-post" style="padding: 20px 90px 3px 60px">
                                        <div class="entry-meta">
                                            <span><?php echo $newsItem['date'] ?></span>
                                        </div>
                                        <h3 class="entry-title"><a href="/news/<?php echo $newsItem['id'] ?>"><?php echo $newsItem['title'] ?></a></h3>
                                        <div class="entry-content">
                                            <p><?php echo $newsItem['texts'] ?></p>
                                        </div>
                                        
                                        <div class="entry-author">
                                            <span>автор: <a href="#"><?php echo $newsItem['users'] ?></a></span>
                                        </div>
                                    </div><!-- entry-post -->
                                </article>
                            </div><!-- col-md-12 -->
                        </div><!-- row -->
                    </div><!-- wrap-post -->
                </div><!-- container -->
            </section>




               



</div>
</div>
                    </div>















<?php
include ROOT.'/views/layout/footer.php';
?>

</body>
</html>
