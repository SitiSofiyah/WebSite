<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Admin - PT. BriliantMax</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url ('assets/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo base_url ('assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet') ?>">
    <!-- toast CSS -->
    <link href="<?php echo base_url ('assets/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet')?>">
    <!-- morris CSS -->
    <link href="<?php echo base_url ('assets/plugins/bower_components/morrisjs/morris.css')?>" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?php echo base_url ('assets/css/animatee.css')?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url ('assets/css/stylee.css')?>" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo base_url ('assets/css/colors/blue-dark.css')?>" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></a>
                <div class="top-left-part"><a class="logo" href="#"><b><img src="../plugins/images/pixeladmin-logo.png" alt="home" /></b><span class="hidden-xs"><img src="<?php echo base_url ('assets/plugins/images/pixeladmin-text.png')?>"  /></span></a></div>
                <ul class="nav navbar-top-links navbar-left m-l-20 hidden-xs">
                   
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="profile-pic" href="#"> <img src="<?php echo base_url ('assets/plugins/images/users/varun.jpg')?>" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Steave</b> </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li style="padding: 10px 0 0;">
                        <a href="<?php echo base_url ('index.php/admin')?>" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
                    </li>
                     <li>
                        <a href="map-google.html" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Admin Profile</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url ('index.php/about')?>" class="waves-effect"><i class="fa fa-institution fa-fw" aria-hidden="true"></i><span class="hide-menu">Company Profile</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url ('index.php/news')?>" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i><span class="hide-menu">News</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url ('index.php/carousel')?>" class="waves-effect active"><i class="fa fa-photo fa-fw" aria-hidden="true"></i><span class="hide-menu">Carousel</span></a>
                    </li>
                   
                    
                </ul>
               
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
         <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4> </div>
                   
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="white-box">
                                <form class="form-horizontal form-material" <?php echo form_open_multipart('carousel/add'); ?>
                                  <?php echo validation_errors(); ?>
                                <div class="form-group">
                                    <label class="col-md-12">Title</label>
                                    <div class="col-md-12">
                                        <input type="text" name="title" class="form-control form-control-line"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Description</label>
                                    <div class="col-md-12">
                                       <textarea name="desc" rows="5" class="form-control form-control-line"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Image</label>
                                    <div class="col-md-12">
                                        <input type="file" id="userfile" name="userfile" class="form-control form-control-line"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Select Status</label>
                                    <div class="col-sm-12">
                                        <input type="radio" name="status" value="1"> Tampilkan
                                        <input type="radio" name="status" value="0"> Sembunyikan
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-success" value=<?php echo form_submit('submit','Submit'); ?> Submit</button>
                                    </div>
                                </div>
                            <?php form_close(); ?>

                        </div>
                    </div>
                </div>
                <!--row -->
                
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2018 &copy; PT. BriliantMax</footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="<?php echo base_url ('assets/plugins/bower_components/jquery/dist/jquery.min.js')?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url ('assets/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url ('assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')?>"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo base_url ('assets/js/jquery.slimscroll.js')?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url ('assets/js/waves.js')?>"></script>
    <!--Counter js -->
    <script src="<?php echo base_url ('assets/plugins/bower_components/waypoints/lib/jquery.waypoints.js')?>"></script>
    <script src="<?php echo base_url ('assets/plugins/bower_components/counterup/jquery.counterup.min.js')?>"></script>
    <!--Morris JavaScript -->
    <script src="<?php echo base_url ('assets/plugins/bower_components/raphael/raphael-min.js')?>"></script>
    <script src="<?php echo base_url ('assets/plugins/bower_components/morrisjs/morris.js')?>"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url ('assets/js/custom.min.js')?>"></script>
    <script src="<?php echo base_url ('assets/js/dashboard1.js')?>"></script>
    <script src="<?php echo base_url ('assets/plugins/bower_components/toast-master/js/jquery.toast.js')?>"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $.toast({
            heading: 'Welcome to PT. BriliantMax',
            text: '',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'info',
            hideAfter: 3500,
            stack: 6
        })
    });
    </script>
</body>

</html>
