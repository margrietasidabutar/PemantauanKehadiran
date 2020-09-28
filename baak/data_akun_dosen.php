<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/logo.png">
    <title>Pemantauan Kehadiran Dosen</title>
    <link href="../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/colors/blue-dark.css" id="theme" rel="stylesheet">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>

<body class="fix-sidebar">
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
    </svg>
</div>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header">
            <div class="top-left-part">
                <a class="logo" href="home.php">
                    <img src="../plugins/images/logo.png" width="47.7" alt="home" class="dark-logo" />
                    <img src="../plugins/images/logo.png" width="47.7" alt="home" class="light-logo"/>
                </a>
            </div>
            <ul class="nav navbar-top-links navbar-right pull-right">
                <li>
                    <a href="javascript:void(0)" class="open-close waves-effect waves-light visible-xs">
                        <i class="ti-close ti-menu"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Top Navigation -->
    <!-- Left navbar-header -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav slimscrollsidebar">
            <div class="sidebar-head">
                <h3>
                    <span class="fa-fw open-close">
                        <i class="ti-menu hidden-xs"></i>
                        <i class="ti-close visible-xs"></i>
                    </span>
                    <span class="hide-menu">Menu</span>
                </h3>
            </div>
            <ul class="nav" id="side-menu">
                <li>
                    <a href="home.php" class="waves-effect">
                        <i class="ti-home fa-fw"></i>
                        <span class="hide-menu">Beranda </span>
                    </a>
                </li>
                <li>
                    <a href="laporan_kehadiran_dosen.php" class="waves-effect">
                        <i class="ti-clipboard fa-fw"></i>
                        <span class="hide-menu">Laporan Kehadiran Dosen </span>
                    </a>
                </li>
                <li>
                    <a href="jadwal_perkuliahan.php" class="waves-effect">
                        <i class="ti-list fa-fw"></i>
                        <span class="hide-menu">Jadwal Perkuliahan </span>
                    </a>
                </li>
                <li>
                    <a href="data_akun_dosen.php" class="waves-effect active">
                        <i class="ti-user fa-fw"></i>
                        <span class="hide-menu">Data Akun Dosen </span>
                    </a>
                </li>
                <li>
                    <a href="data_akun_ketua_kelas.php" class="waves-effect">
                        <i class="ti-user fa-fw"></i>
                        <span class="hide-menu">Data Akun Ketua Kelas </span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="waves-effect">
                        <i class="ti-power-off fa-fw"></i>
                        <span class="hide-menu">Keluar </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Data Akun Dosen</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="home.php"><i class="ti-home fa-fw"></i>Beranda</a></li>
                        <li class="active">Data Akun Dosen</li>
                    </ol>
                </div>
            </div>
            <!-- Main -->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <div class="button-box" style="display: flex; justify-content: flex-end">
                            <a href="tambah_data_akun_dosen.php"><button class="btn btn-success waves-effect waves-light" type="button"><span class="btn-label"><i class="fa fa-plus"></i></span>Tambah Akun</button></a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Password</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Rumondang</td>
                                    <td>rumondang</td>
                                    <td class="text-nowrap">
                                        <a href="ubah_data_akun_dosen.php" data-toggle="tooltip" data-original-title="Ubah"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                        <a href="#" data-toggle="tooltip" data-original-title="Hapus"> <i class="fa fa-trash text-danger"></i> </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer text-center"></footer>
    </div>
</div>

<script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
<script src="../bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<script src="../js/jquery.slimscroll.js"></script>
<script src="../js/waves.js"></script>
<script src="../js/custom.js"></script>
</body>

</html>
