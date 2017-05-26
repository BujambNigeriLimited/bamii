<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $title; ?></title>

        <link rel="stylesheet" type="text/css" href="<?= site_url('public/css/rissa.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?= site_url('public/plugin/bootstrap-new/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?= site_url('public/css/style.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= site_url('public/css/font-awesome.min.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= site_url('public/css/stylesheet1.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= site_url('public/css/myclasses1.css'); ?>">

		<script type="text/javascript" src="<?= site_url('public/js/jquery.min.js'); ?>"></script>
		<script type="text/javascript" src="<?= site_url('public/plugin/bootstrap-new/js/bootstrap.min.js'); ?>"></script>
		<script type="text/javascript" src="<?= site_url('public/js/main.min.js'); ?>"></script>

        <style type="">
            footer {
                height: 82px;
            }
        </style>

	</head>
	<body>
		<div id="wrapper">
            <div class="container">
                <div class="header">
                    <div class="wrapper">
                        <div class="brand">
                            <a href="<?= base_url('pages/index'); ?>"><img src="<?= base_url('public/images/logo1.png'); ?>" alt="logo" style="width: 200px;"></a>
                        </div>
                        <nav class="navigation-items">
                            <div class="wrapper">
                                <ul class="user-area">
                                    <li><a href="<?= base_url('pages/sign_in'); ?>">Sign In</a></li>
                                    <li><a href="<?= base_url('pages/register'); ?>"><strong>Register</strong></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            
            <center>
                <div id="main">
                    <div class="search-bar horizontal">
                        <form class="main-search border-less-inputs inputs-3" role="form" method="post">
                            <div class="input-row" style="line-height: 1.45;">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="keyword" placeholder="Enter Keyword">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <div class="input-group location">
                                        <input type="text" class="form-control" id="location" placeholder="Enter Location" autocomplete="off">
                                        <span class="input-group-addon"><i class="fa fa-map-marker geolocation" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Find my position"></i></span>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group" style="width: initial;">
                                    <button type="submit" class="btn btn"><i class="fa fa-search"></i></button>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.input-row -->
                        </form>
                        <!-- /.main-search -->
                    </div>
                </div>
            </center>
            
            <footer id="page-footer">
                <div class="inner">
                    <div class="footer-bottom">
                        <div class="container">
                            <span id="policy">
                                <a class="gt" href="#">Privacy</a>
                                <a class="gt" href="#">Terms</a>
                            </span>
                            <span id="business">
                                <a class="gt" href="#">Advertising</a>
                                <a class="gt" href="#">Business</a>
                                <a class="gt" href="#">About</a>
                            </span>
                        </div>
                    </div>
                </div>
            </footer>
        </div> 
	</body>
</html>