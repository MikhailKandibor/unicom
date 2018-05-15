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
                    <div class="col-lg-12"><br>
                        <h1 class="page-header">
                            <small>Просмотр всех пользователей</small>
                        </h1>

                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Email</th>
                                        <th>ФИО</th>
                                        <th>Телефон</th>
                                        <th>Дата регистрации</th>
                                        <th>Роль</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($usersList as $usersItem): ?>
                    <tr>
                        <td><?php echo $usersItem['id']; ?></td>
                        <td><?php echo $usersItem['email']; ?></td>
                        <td><?php echo $usersItem['username']; ?> <?php echo $usersItem['lastname']; ?></td>
                        <td><?php echo $usersItem['phone']; ?></td>   
                        <td><?php echo $usersItem['join_date']; ?></td>  
                        <td><?php echo $usersItem['role']; ?></td>  
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
