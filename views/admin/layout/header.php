<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Панель администратора - Учебный Центр «Юником»</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                
                <li>
                    <a href="/cabinet/"><i class="fa fa-user"></i> Вы вошли как - <?php if(isset($_SESSION['user'])) { 
                                  $userId = User::checkLogged();
                                  // Получаем информацию о пользователе из БД
                                  $user = User::getUserById($userId);
                                  echo $user['username'];echo ' '.$user['lastname']; 
                                }?></a></li>
                    <li>
                            <a href="/"><i class="fa fa-fw fa-power-off"></i> Вернуться на сайт</a>
                        </li>
                    
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li <?php if ($_SERVER['REQUEST_URI'] == "/admin/"){?>class="active"<?php } ?>>
                        <a href="/admin/"><i class="fa fa-fw fa-desktop"></i> &nbsp;Рабочий стол</a>
                    </li>
                    <li <?php if (strpos($_SERVER['REQUEST_URI'],"/admin/news") !== false){?>class="active"<?php } ?> >

                        <a href="javascript:;" data-toggle="collapse" data-target="#news"><i class="fa fa-fw fa-newspaper-o"></i>  &nbsp;Новости <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="news" class="collapse">
                            <li>
                                <a href="/admin/news/category">Управление категориями</a>
                            </li>
                            <li>
                                <a href="/admin/news">Управление новостями</a>
                            </li>
                        </ul>
                    </li>
                    <li 
                    <li <?php if (strpos($_SERVER['REQUEST_URI'],"/admin/courses") !== false){?>class="active"<?php } ?> <?php if (strpos($_SERVER['REQUEST_URI'],"/admin/order") !== false){?>class="active"<?php } ?>>
                        <a href="javascript:;" data-toggle="collapse" data-target="#courses"><i class="fa fa-fw fa-table"></i> &nbsp;Курсы <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="courses" class="collapse">
                            <li>
                                <a href="/admin/courses/category">Управление категориями</a>
                            </li>
                            <li>
                                <a href="/admin/courses">Управление курсами</a>
                            </li>
                            <li>
                                <a href="/admin/order">Заявки от пользователей</a>
                            </li>
                        </ul>
                    </li>
                    <li <?php if ($_SERVER['REQUEST_URI'] == "/admin/contact"){?>class="active"<?php } ?>>
                        <a href="/admin/contact"><i class="fa fa-fw fa-question-circle"></i> &nbsp;Обратная связь</a>
                    </li>
                    <li <?php if ($_SERVER['REQUEST_URI'] == "/admin/users"){?>class="active"<?php } ?>>
                        <a href="/admin/users"><i class="fa fa-fw fa-user"></i> &nbsp;Пользователи</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>