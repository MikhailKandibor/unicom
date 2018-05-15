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
  <div class="container w ">
      <div class="row centered">

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



                        </div>
                        </div>





<div class="container " >
<div class="row">



<div class="col-md-3 col-sm-4 sidebar-reponsive">
                        <div class="sidebar animated bounceInDown">
                            <div class="widget widget-categories">
                                <h3 class="widget-title">КАТЕГОРИИ КУРСОВ</h3>
                                <ul>
                                    <li <?php if ($_SERVER['REQUEST_URI'] == "/courses/"){?>class="active"<?php } ?>><a href="/courses/">ВСЕ</a></li>
                                      <?php foreach ($categories as $categoryItem) : ?>
<li <?php if($categoryId == $categoryItem['id']) echo 'class="active" '; ?>><a class="" href="/courses/category/<?php echo $categoryItem['id'] ?>"><?php echo mb_strtoupper($categoryItem['name']) ?></a></li>
                                      <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>


<br>
</div>

<div class="col-md-9 col-sm-8 portfolio-reponsive">

<div class="portfolio style3">
                                <div class="portfolio-wrap clearfix animated bounceInDown">


<?php if($categoryCourses): ?>
<?php foreach ($categoryCourses as $coursesItem) :?>

                                    <div class="item">
                                        <article class="entry">
                                            <div class="featured-post">
                                                <a href="#"><img src="/upload/images/courses/<?php echo $coursesItem['id'] ?>.jpg" style="max-height: 150px" alt="image"></a>
                                            </div>
                                            <div class="entry-post">
                                                <div class="entry-categories">
                                                    <span><a href="#"><?php echo $coursesItem['category_id'] ?></a></span>
                                                </div>
                                                <h3 class="entry-title"><a href="/courses/<?php echo $coursesItem['id'] ?>"><?php echo $coursesItem['name'] ?></a></h3>
                                                <div class="entry-author">
                                                </div>
                                                <div class="entry-number">
                                                    <div class="entry-count">
                                                        ДЛИТЕЛЬНОСТЬ:<span class="count"> 100</span>
                                                    </div>
                                                    <div class="entry-price">
                                                        ЦЕНА:<span class="price"> $200</span>
                                                    </div>
                                                </div>
                                            </div><!-- entry-post -->
                                        </article>
                                    </div><!-- item -->
                    
<?php endforeach;?></div>
    <?php else: ?>
      <p>В данной категории нет доступных курсов!</p>
    <?php endif; ?>


<div class="blog-pagination animated bounceInUp">
                    <?php echo $pagination->get(); ?>
                       
                </div>
           <br>

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
