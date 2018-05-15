      <div class="social_vertical">
    <ul>
      <li><a title="ВКонтакте" class="ang_vk" href="#" target="_blank" rel="nofollow">ВКонтакте</a></li>
      <li><a title="Facebook" class="ang_fb" href="#" target="_blank" rel="nofollow">Facebook</a></li>
      <li><a title="Одноклассники" class="ang_ok" href="#" target="_blank" rel="nofollow">Одноклассники</a></li>
      <li><a title="Instagram" class="ang_mm" href="#" target="_blank" rel="nofollow">Instagram</a></li>
    </ul>
  </div>


    <div class="boxed position_form">
        <div class="wrap-header clearfix">
            <div class="top top-style3">
                <div class="container">
                    
                    <div class="row">
                        <div class="col-md-7">
                            <ul class="flat-information">
                                <li>ПН-ПТ с 10:00 до 19:00</li>
                                <li><a href="">ул.Пушкина 111, 302 офис</a></li>
                                <li><a href=""> +7 (3902) 22‒52‒44</a></li>
                            </ul>
                        </div><!-- col-md-8 -->
                        <div class="col-md-5">
                            <div class="wrap-flat topinf">
                                <ul class="flat-login-register">

                                <?php if(User::isGuest()):?>

                                          <li <?php if ($_SERVER['REQUEST_URI'] == "/user/login"){?>class="active"<?php } ?>><a href="/user/login" title="">ВХОД</a></li>
                                          <li <?php if ($_SERVER['REQUEST_URI'] == "/user/register"){?>class="active"<?php } ?>><a href="/user/register" title="">РЕГИСТРАЦИЯ</a></li>

                                <?php else: ?>
                                          <li <?php if ($_SERVER['REQUEST_URI'] == "/cabinet"){?>class="active"<?php } ?>><a href="/cabinet" title="">КАБИНЕТ</a></li>
                                          <li><a href="/user/logout" title="">ВЫЙТИ</a></li>
                                <?php endif;?>
                                </ul>
                                <ul class="flat-socials">
                                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa fa-vk"></i></a></li>
                                    <li><a href=""><i class="fa fa-odnoklassniki"></i></a></li>
                                    <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div><!-- wrap-flat -->
                        </div><!-- col-md-4 -->
                    </div><!-- row -->

                </div><!-- container -->
            </div><!-- top -->



  <header id="header" class="header header-style3 styleheader">
      <div class="container">
          <div class="row" style="margin-right: -100px">
              <div class="col-md-12" >
                <div class="logo" style="margin: 25px 0px 1px -66px">
                    <a href="index.html"><img src="/template/img/logo.png" alt="image" ></a>
                </div><!-- /logo -->

                  <div class="wrap-nav">
                      <nav id="mainnav" class="mainnav">
                          <ul class="menu">
                              <li <?php if ($_SERVER['REQUEST_URI'] == "/"){?>class="active"<?php } ?>><a href="/" title="">ГЛАВНАЯ</a>

                              </li>

                  


            <li <?php if ($_SERVER['REQUEST_URI'] == "/news/"){?>class="active"<?php } ?>><a href="/news/" title="">НОВОСТИ</a>

                              <li class="has-mega-menu <?php if ($_SERVER['REQUEST_URI'] == "/courses/"){?>active<?php } ?>"><a href="/courses/" title="" class="has-mega slidedown">КУРСЫ ОБУЧЕНИЯ</a>
                              <ul class="submenu">
                                      <li><a href="#">ВСЕ КУРСЫ</a></li>
                                      <li><a href="#">КАТЕГОРИЯ 1</a></li>
                                      <li><a href="#">КАТЕГОРИЯ 2</a></li>
                                      <li><a href="#">КАТЕГОРИЯ 3</a></li>
                                      <li><a href="#">КАТЕГОРИЯ 4</a></li>
                                  </ul>
                                  <!-- 
                                  <ul class="submenu submenu-style2 mega-menu three-columns">

                                      <li class="submenu-level">

                                         <ul class="submenu2">
                                              <li class="sub-title">
                                                  <a href="#">КУРСЫ ДЛЯ ПОЛЬЗОВАТЕЛЕЙ</a>
                                                  <span  class="btn-mega"></span>
                                              </li>
                                              <li  class="mega-menu-sub">
                                                  <ul>
                                                      <li><a href="#">ОПЕРАТОР ЭВМ</a></li>
                                                      <li><a href="#" title="">ОПЕРАТОР 1С:УПРАВЛЕНИЕ ТОРГОВЛЕЙ</a></li>
                                                      <li><a href="#" title="">АРХИТЕКТУРА И НАСТРОЙКА ПК</a></li>
                                                      <li><a href="#">ОПЕРАТОР СИСТЕМ ПРОЕКТИРОВАНИЯ</a></li>
                                                  </ul>
                                              </li>

                                          </ul>

                                      </li>

                                      <li class="submenu-level">

                                         <ul class="submenu2">
                                              <li class="sub-title">
                                                  <a href="#">КОМПЬЮТЕРНАЯ ГРАФИКА</a>
                                                  <span  class="btn-mega"></span>
                                              </li>
                                              <li  class="mega-menu-sub">
                                                  <ul>
                                                      <li><a href="#">ОСНОВЫ АНИМАЦИИ</a></li>
                                                      <li><a href="#" title="">ГРАФИКА И ДИЗАЙН</a></li>
                                                      <li><a href="#" title="">ВЕБ-ДИЗАЙН</a></li>
                                                  </ul>
                                              </li>

                                          </ul>

                                      </li>

                                      <li class="submenu-level">

                                         <ul class="submenu2">
                                              <li class="sub-title">
                                                  <a href="#">БИЗНЕС КУРСЫ</a>
                                                  <span  class="btn-mega"></span>
                                              </li>
                                              <li  class="mega-menu-sub">
                                                  <ul>
                                                      <li><a href="#">МЕНЕДЖЕР ПО ПЕРСОНАЛУ</a></li>
                                                      <li><a href="#" title="">ОФИС-МЕНЕДЖЕР</a></li>
                                                      <li><a href="#">БУХГАЛТЕР МАЛОГО ПРЕДПРИЯТИЯ</a></li>
                                                  </ul>
                                              </li>

                                          </ul>

                                      </li>

                                  </ul> -->
                              </li>
                              <li <?php if ($_SERVER['REQUEST_URI'] == "/about"){?>class="active"<?php } ?>><a class="slidedown" href="/about" title="">О КОМПАНИИ</a>
                                  <ul class="submenu">
                                      <li><a href="#">ПЕДАГОГИЧЕСКИЙ СОСТАВ</a></li>
                                      <li><a href="#">ВАКАНСИИ</a></li>
                                      <li><a href="#">ПРАВИЛА ПРИЁМА И ОТЧИСЛЕНИЯ УЧАСТНИКОВ</a></li>
                                      <li><a href="#">ЛИЦЕНЗИЯ И РАЗРЕШЕНИЯ</a></li>
                                  </ul>
                              </li>

                              <li <?php if ($_SERVER['REQUEST_URI'] == "/contact/"){?>class="active"<?php } ?>><a href="/contact/" title="">ОБРАТНАЯ СВЯЗЬ</a>
                              </li>

                              <!-- <li <?php if ($_SERVER['REQUEST_URI'] == "/promo/"){?>class="active"<?php } ?>><a href="/promo/" title="">АКЦИИ</a> -->
                              </li>                             
                              <li <?php if ($_SERVER['REQUEST_URI'] == "/gallery/"){?>class="active"<?php } ?>><a href="/gallery/" title="">ФОТОГАЛЕРЕЯ</a>
                              </li>






                              

                          </li>
                          </ul>
                      </nav>


                  </div><!-- /wrap-nav -->
              </div><!-- /col-md-12 -->
          </div><!-- /row -->
      </div><!-- /container -->
  </header><!-- /header -->
</div><!-- /header3 -->