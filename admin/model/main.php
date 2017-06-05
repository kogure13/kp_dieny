<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Bootstrap Core CSS -->
        <link href="../theme/asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="../theme/asset/flexigrid/css/flexigrid.pack.css" rel="stylesheet">
        <link href="../theme/asset/bootstrap/css/sb-admin.css" rel="stylesheet">        
        <link href="../theme/asset/css/style.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="../theme/asset/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Bootstrap Core JavaScript -->
        <script src="../theme/asset/js/jquery-2.1.0.min.js"></script>        
        <script src="../theme/asset/bootstrap/js/bootstrap.min.js"></script>        
        <script src="../theme/asset/js/jquery.validate.min.js"></script>
        <script src="../theme/asset/flexigrid/js/flexigrid.pack.js"></script>        
    </head>

    <body>
        <div id="wrapper">
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
                    <a class="navbar-brand" href="index.html"></a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">                
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="?page=profile"><i class="fa fa-fw fa-user"></i> Profile</a>
                            </li>                            
                            <li class="divider"></li>
                            <li>
                                <a href="?page=logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#master">
                                <i class="fa fa-fw fa-arrows-v"></i> 
                                Master
                            </a>
                            <ul id="master" class="collapse">
                                <li>
                                    <a href="?page=universitas">Universitas</a>
                                </li>
                                <li>
                                    <a href="?page=fakultas">Fakultas</a>
                                </li>
                                <li>
                                    <a href="?page=jurusan">Jurusan</a>
                                </li>
                            </ul>
                        </li>                        
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#dtamahasiswa">
                                <i class="fa fa-fw fa-users"></i>
                                Data Mahasiswa
                            </a>
                            <ul id="dtamahasiswa" class="collapse">
                                <li>
                                    <a href="?page=sidang">Data Sidang</a>
                                </li>
                                <li>
                                    <a href="?page=wisuda">Data Wisuda</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <?php
                    $main = new Main();
                    $main->getPage();
                    ?>
                </div><!-- /.container-fluid -->                                
            </div><!-- /#page-wrapper -->
        </div><!-- /#wrapper -->   
    </body>
</html>
