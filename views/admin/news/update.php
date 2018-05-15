<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  <link rel="icon" type="image/icon" href="/template/admin/favicon.ico">

    <title>Панель администратора - Учебный центр Юником Плюс</title>

    <!-- Bootstrap Core CSS -->
    <link href="/template/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/template/admin/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/template/admin/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/template/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
<?php
include ROOT.'/views/admin/layout/header.php';
?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Редактирование новости #<?php echo $id;?> - <?php echo $newsItem['title'] ?></small>
                        </h1>

<?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

                    <form action="#" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label>Название новости</label>
                                <input name="title" class="form-control" placeholder="Введите название новости" value="<?php echo $newsItem['title'] ?>">
                            </div>


                         <div class="form-group">
                                <label>Выберите категорию</label>
                                <select class="form-control" name="category_id">
                                <?php foreach ($categories as $categoryItem) : ?>
                                    <option value="<?php echo $categoryItem['id']; ?>"><?php echo $categoryItem['name']; ?></option>

                                      <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Краткое описание</label>
                                <textarea name="description" class="form-control" rows="3" placeholder="Введите краткое описание "><?php echo $newsItem['description'] ?></textarea>
                            </div>



                            <div class="form-group">
                                <label>Описание полное</label>
                                <textarea name="texts" class="form-control" rows="3" placeholder="Введите полное описание"><?php echo $newsItem['description'] ?></textarea>
                            </div>

                            <div class="form-group">
                            <img src="<?php echo News::getImage($newsItem['id']);?>" width="200"><br>
                                <label>Прикрепить файл</label>
                                <input type="file" name="image" value="<?php echo $newsItem['image']?>">
                            </div>

                            <div class="form-group">
                                <label>Автор новости</label>
                                <input name="author" class="form-control" placeholder="Введите автора новости" value="<?php echo $newsItem['users'] ?>" disabled>
                            </div>                            
                            <div class="form-group">
                                <label>Дата публикации новости</label>
                                <input name="date" class="form-control" placeholder="Введите автора новости" value="<?php echo $newsItem['date'] ?>" disabled>
                            </div>
                        <div class="form-group">
                                <label>Статус</label>
                                <select class="form-control" name="status">
                                <option value="1" selected="selected">Отображается</option>
                            <option value="0">Скрыт</option>
                                </select>
                            </div>

                        <input type="submit" name="submit" class="btn btn-default" value="Обновить">
                    </form>

                    </div>
                </div>
                <!-- /.row -->

                

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/template/admin/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/template/admin/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="/template/admin/js/plugins/morris/raphael.min.js"></script>
    <script src="/template/admin/js/plugins/morris/morris.min.js"></script>
    <script src="/template/admin/js/plugins/morris/morris-data.js"></script>

</body>

</html>
