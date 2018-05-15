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


        <div id="page-wrapper" style="padding-bottom: 500px">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
         
                        <h1 class="page-header">
                            <small>Просмотр всех заявок</small>
                        </h1>

                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Email</th>
                                        <th>ФИО пользователя</th>
                                        <th>Телефон</th>
                                        <th>Курс</th>
                                        <th>Платеж</th>
                                        <th>Дата</th>
                                        <th>Статус</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($ordersList as $order): ?>
                    <tr>
                        <td><?php echo $order['id']; ?></td>
                        <td><?php echo $order['email']; ?></td>
                        <td><?php echo $order['fio']; ?></td>
                        <td><?php echo $order['phone']; ?></td>
                        <td><?php echo $order['course_name']; ?></td>
                        <td><?php echo $order['pay_status']; ?></td>  
                        <td><?php echo $order['date']; ?></td>  
                        <td><?php echo $order['status']; ?></td>  

 <td><a href="/admin/order/view/<?php echo $order['id']; ?>" title="Смотреть"><i class="fa fa-eye"></i></a></td>
                        <td><a href="/admin/order/update/<?php echo $order['id']; ?>" title="Редактировать"><i class="fa fa-pencil-square-o"></i></a></td>
                        <td><a href="/admin/order/delete/<?php echo $order['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

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
