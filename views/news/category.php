

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














<div class="container" style="padding-top: 30px">
                <div class="row animated fadeIn">



<div class="col-md-8 col-sm-7 portfolio-reponsive">
<section class="flat-row pd-blog bg-theme blog-list1">


                <div class="wrap-post">



<?php if($categoryNews): ?>
        <?php foreach ($categoryNews as $newsItem) :?>
    



                    <article class="entry">
                        <div class="row">
                            <div class="col-md-5 col-sm-5 left">
                                    <div class="entry-post">
                                        <div class="entry-meta">
                                            <span><?php echo $newsItem['date'] ?></span>
                                        </div>
                                        <h3 class="entry-title"><a href="/news/<?php echo $newsItem['id'] ?>"><?php echo $newsItem['title'] ?></a></h3>
                                        <div class="entry-author">
                                          <span>автор: <a href="#"><?php echo $newsItem['users'] ?></a></span>
                                        </div>
                                        <div class="entry-content-full">
                                            <p style="margin-bottom: 0px;"><?php echo $newsItem['description'] ?></p>
                                        </div>
                                        
                                    </div>
                            </div>
                           <div class="col-md-7 col-sm-7 right">
                                  <div class="feature-post">
                                    <a href="<?php echo News::getImage($newsItem['id']);?>">
                                      <div style="background: url(<?php echo News::getImage($newsItem['id']);?>); height:335px; weight: 270px; background-size: 600px; background-position: left top; background-repeat: no-repeat;">
                                    </div>
                                    </a>

                                  </div>
                              </div>
                        </div>
                    </article>
 <?php endforeach; ?>
    <?php else: ?>
      <p>Статей в этом разделе пока нет!</p>
    <?php endif; ?>
                    
                </div><!-- wrap-post -->


                <div class="blog-pagination">
                    <?php echo $pagination->get(); ?>
                       
                </div><!-- /.blog-pagination -->

            <!-- container -->
      
        </section>


</div>
                        



<div class="col-md-4 col-sm-5 sidebar-reponsive">
                        <div class="sidebar">
                            <div class="widget widget-categories">
                                <h3 class="widget-title">КАТЕГОРИИ НОВОСТЕЙ</h3>
                                <ul>


                                    <li <?php if ($_SERVER['REQUEST_URI'] == "/news/"){?>class="active"<?php } ?>><a href="/news/">ВСЕ</a></li>
<?php foreach ($categories as $categoryItem) : ?>
<li <?php if($categoryId == $categoryItem['id']) echo 'class="active" '; ?>><a class="" href="/news/category/<?php echo $categoryItem['id'] ?>"><?php echo mb_strtoupper($categoryItem['name']) ?></a></li>
<?php endforeach; ?>


                                </ul>
                            </div>
                            
                        </div>
                    </div>
</div>
</div>
                    </div>















<?php
include ROOT.'/views/layout/footer.php';
?>

</body>
</html>
