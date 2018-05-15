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
                            <small>Просмотр заявки №<?php echo $id;?></small>
<small style="padding-left:50px">
                        <a href="/admin/order/update/<?php echo $ordersList['id']; ?>" title="Редактировать"><i class="fa fa-pencil-square-o"></i></a>
                        <a href="/admin/order/delete/<?php echo $ordersList['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a>
                        </small>
                        </h1>

                    <div class="col-lg-6">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID заявки</th>
                                        <td><?php echo $ordersList['id']; ?></td>

                                    </tr>
                                    <tr>
                                         <th>ФИО пользователя</th>
                                             <td><?php echo $ordersList['username']; ?> <?php echo $ordersList['lastname']; ?></td>

                                    </tr>
                                    <tr>
                                        <th>Email пользователя</th>

                                        <td><?php echo $ordersList['email']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Телефон</th>
                                        <td><?php echo $ordersList['phone']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Платёж:</th>
                                        <td><?php echo $ordersList['pay_status']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Дата:</th>
                                        <td><?php echo $ordersList['date']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Статус:</th>
                                        <td><?php echo $ordersList['status']; ?></td>
                                    </tr>

                                      
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
</div></div>

                    <div class="col-lg-12">

                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>

                                  <th>ID курса</th>
                                        <th>Название курса</th>
                                        <th>Категория курса</th>
                                        <th>Длительность</th>
                                        <th>Цена</th>

                                </thead>
                                <tbody>

                    <tr>
                        <td><?php echo $ordersCoursesList['id']; ?></td>
                        <td><?php echo $ordersCoursesList['name']; ?></td>
                        <td><?php echo $ordersCoursesList['category_name']; ?></td>
                        <td><?php echo $ordersCoursesList['timeline']; ?></td>
                        <td><?php echo $ordersCoursesList['price']; ?></td>

                    </tr>
                                </tbody>
                            </table>


                                    
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
