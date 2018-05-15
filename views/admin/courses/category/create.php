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
                            <small>Добавление новой новости</small>
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
                                <label>Название категории</label>
                                <input name="name" class="form-control" placeholder="Введите название категории" value="">
                            </div>

                            <div class="form-group">
                                <label>Отображать №</label>
                                <input name="sort_order" class="form-control" placeholder="Введите № отображения категории" value="">
                            </div>

                        <div class="form-group">
                                <label>Статус</label>
                                <select class="form-control" name="status">
                                <option value="1" selected="selected">Отображается</option>
                            <option value="0">Скрыт</option>
                                </select>
                            </div>

                        <input type="submit" name="submit" class="btn btn-default" value="Добавить">
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
