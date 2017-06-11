<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>SimpleAdmin - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico">

    <!-- Plugins css-->
    <link href="<?php echo base_url();?>assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/plugins/switchery/switchery.min.css">
    <link href="<?php echo base_url();?>assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Summernote css -->
    <link href="<?php echo base_url();?>assets/plugins/summernote/summernote.css" rel="stylesheet" />

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icons CSS -->
    <link href="<?php echo base_url();?>assets/css/icons.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

</head>


<body>

<div id="page-wrapper">

    <!-- Top Bar Start -->
    <div class="topbar" id="topnav">

        <!-- Top navbar -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <div class="">
                            <a href="index.html" class="logo">
                                <img src="<?php echo base_url();?>assets/images/logo.png" alt="logo" class="logo-lg" />
                                <img src="<?php echo base_url();?>assets/images/logo_sm.png" alt="logo" class="logo-sm hidden" />
                            </a>
                        </div>
                    </div>

                    <div class="navbar-custom navbar-left">
                        <div id="navigation">
                            <!-- Navigation Menu-->
                            <ul class="navigation-menu">
                                <li>
                                    <a href="<?php echo site_url('admin/index');?>">
                                        <span><i class="ti-home"></i></span><span> Dashboard </span> </a>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"> <span><i class="ti-files"></i></span><span> Pages </span> </a>
                                    <ul class="submenu">
                                        <li><a href="<?php echo site_url('input');?>">Tampilkan Data</a></li>
                                        <li><a href="<?php echo site_url('input/tambah');?>">Tambah Data</a></li>
                                    </ul>
                                </li>


                                    </ul>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"> <span><i class="ti-widget"></i></span><span> Extra Pages </span> </a>
                                    <ul class="submenu">
                                        <li><a href="extras-timeline.html">Timeline</a></li>
                                        <li><a href="extras-invoice.html">Invoice</a></li>
                                        <li><a href="extras-profile.html">Profile</a></li>
                                        <li><a href="extras-calendar.html">Calendar</a></li>
                                        <li><a href="extras-faqs.html">FAQs</a></li>
                                        <li><a href="extras-pricing.html">Pricing</a></li>
                                        <li><a href="extras-contacts.html">Contacts</a></li>
                                    </ul>
                                </li>

                            </ul>
                            <!-- End navigation menu  -->
                        </div>
                    </div>

                    <!-- Top nav Right menu -->
                    <ul class="nav navbar-nav navbar-right top-navbar-items-right pull-right">
                        <li class="top-menu-item-xs">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>
                        <li class="hidden-xs">
                            <form role="search" class="navbar-left app-search pull-left">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                        <li class="dropdown top-menu-item-xs">
                            <a href="#" data-target="#" class="dropdown-toggle menu-right-item" data-toggle="dropdown" aria-expanded="true">
                                <i class="mdi mdi-bell"></i> <span class="label label-danger">3</span>
                            </a>
                            <ul class="dropdown-menu p-0 dropdown-menu-lg">
                                <!--<li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>-->
                                <li class="list-group notification-list" style="height: 267px;">
                                    <div class="slimscroll">
                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <div class="media">
                                                <div class="media-left p-r-10">
                                                    <em class="fa fa-diamond bg-primary"></em>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <div class="media">
                                                <div class="media-left p-r-10">
                                                    <em class="fa fa-cog bg-warning"></em>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="media-heading">New settings</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <div class="media">
                                                <div class="media-left p-r-10">
                                                    <em class="fa fa-bell-o bg-custom"></em>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Updates</h5>
                                                    <p class="m-0">
                                                        <small>There are <span class="text-primary font-600">2</span> new updates available</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <div class="media">
                                                <div class="media-left p-r-10">
                                                    <em class="fa fa-user-plus bg-danger"></em>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="media-heading">New user registered</h5>
                                                    <p class="m-0">
                                                        <small>You have 10 unread messages</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <div class="media">
                                                <div class="media-left p-r-10">
                                                    <em class="fa fa-diamond bg-primary"></em>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <div class="media">
                                                <div class="media-left p-r-10">
                                                    <em class="fa fa-cog bg-warning"></em>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="media-heading">New settings</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <!--<li>-->
                                <!--<a href="javascript:void(0);" class="list-group-item text-right">-->
                                <!--<small class="font-600">See all notifications</small>-->
                                <!--</a>-->
                                <!--</li>-->
                            </ul>
                        </li>

                        <li class="dropdown top-menu-item-xs">
                            <a href="" class="dropdown-toggle menu-right-item profile" data-toggle="dropdown" aria-expanded="true"><img src="<?php echo base_url();?>assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)"><i class="ti-user m-r-10"></i> Profile</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-settings m-r-10"></i> Settings</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-lock m-r-10"></i> Lock screen</a></li>
                                <li class="divider"></li>
                                <li><a href="javascript:void(0)"><i class="ti-power-off m-r-10"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div> <!-- end container -->
        </div> <!-- end navbar -->
    </div>
    <!-- Top Bar End -->


    <!-- Page content start -->
    <div class="page-contentbar">

        <!-- START PAGE CONTENT -->
        <div id="page-right-content">

            <div class="container">







                <div class="row">

                    <div class="col-lg-6">
                        <div class="card-box">

                            <h4 class="header-title m-t-0">Edit Data</h4>

                            <?php foreach ($user as $u) ?>

                            <div class="p-20 m-b-20">
                                <form action="<?php echo site_url('edit/update');?>" class="form-validation" method="post">
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="<?php echo $u->id?>">
                                        <label for="userName">Nama <span class="text-danger">*</span></label>
                                        <input type="text" name="nama" parsley-trigger="change"
                                               value="<?php echo $u->nama?>" class="form-control" id="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="emailAddress">Alamat<span class="text-danger">*</span></label>
                                        <input type="text" name="alamat" parsley-trigger="change"
                                               value="<?php echo $u->alamat?>" class="form-control" id="alamat">
                                    </div>
                                    <div class="form-group">
                                        <label for="nrp">Nrp<span class="text-danger">*</span></label>
                                        <input id="nrp" type="text" value=" <?php echo $u->nrp?>"
                                               name="nrp"
                                               class="form-control">
                                    </div>



                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">
                                            Update Data
                                        </button>
                                        <button type="reset" class="btn btn-default waves-effect m-l-5">
                                            Cancel
                                        </button>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>


                </div>
                <!-- end row -->










            </div>
            <!-- end container -->



            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">

                            <div>
                                <strong>Putra Daroini</strong> - Copyright &copy; 2017
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end footer -->

        </div>
        <!-- End #page-right-content -->

        <div class="clearfix"></div>

    </div>
    <!-- end .page-contentbar -->
</div>
<!-- End #page-wrapper -->



<!-- js placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.slimscroll.min.js"></script>

<script src="<?php echo base_url();?>assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/switchery/switchery.min.js"></script>
<script type="text/javascript" src="assets/plugins/parsleyjs/parsley.min.js"></script>

<script src="<?php echo base_url();?>assets/plugins/moment/moment.js"></script>
<script src="<?php echo base_url();?>assets/plugins/timepicker/bootstrap-timepicker.js"></script>
<script src="<?php echo base_url();?>assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url();?>assets/plugins/summernote/summernote.min.js"></script>

<!-- form advanced init js -->
<script src="<?php echo base_url();?>assets/pages/jquery.form-advanced.init.js"></script>

<!-- App Js -->
<script src="<?php echo base_url();?>assets/js/jquery.app.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.form-validation').parsley();
        $('.summernote').summernote({
            height: 350,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: false                 // set focus to editable area after initializing summernote
        });
    });
</script>

</body>
</html>