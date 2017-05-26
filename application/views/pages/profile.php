<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $title; ?></title>

        
        <link rel="stylesheet" type="text/css" href="<?= site_url('public/css/rissa1.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?= site_url('public/plugin/bootstrap-3.3.7/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?= site_url('public/css/style.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?= site_url('public/css/bootstrap-select.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?= site_url('public/css/jquery.mCustomScrollbar.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?= site_url('public/css/core.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?= site_url('public/css/font-awesome.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?= site_url('public/summernote/summernote.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?= site_url('public/src/bootstrap-tagsinput.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?= site_url('public/owl.carousel/owl-carousel/owl.carousel.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?= site_url('public/owl.carousel/owl-carousel/owl.carousel.css'); ?>">
       
        <script type="text/javascript" src="<?= site_url('public/js/jquery-2.1.0.min.js'); ?>"></script>
        <script src="<?=base_url ('public/js/jquery-migrate-1.4.1.js');?>"></script>
        <script type="text/javascript" src="<?= site_url('public/plugin/bootstrap-3.3.7/js/bootstrap.min.js'); ?>"></script> 
        <script type="text/javascript" src="<?= site_url('public/js/bootstrap-select.min.js'); ?>"></script>
        <script type="text/javascript" src="<?= site_url('public/js/city_state.js'); ?>"></script>
        <script src="<?=base_url ('public/js/jquery.mCustomScrollbar.concat.js');?>"></script>
        <script src="<?=base_url ('public/js/smoothscroll.js');?>"></script>
        <script src="<?=base_url ('public/owl.carousel/owl-carousel/owl.carousel.min.js');?>"></script>
    
        <!--
        <?php echo $map['js']; ?>
        -->
        <!--
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqFhoxWVVXuZQ8z3sA8hL1OXfW4DXO57A&callback=initMap"
            async defer>
        </script>
        
        
        <script>
            var map;
            var marker;
            var coords;
            

            function initMap() {
                var latlng = {lat: 6.5244, lng: 3.3792};
                map = new google.maps.Map(document.getElementById('map'), {
                    center: latlng,
                    zoom: 13
                });
                /*
                infowindow = new google.maps.InfoWindow({
                    content: document.getElementById('form')
                })

                messagewindow = new google.maps.InfoWindow({
                    content: document.getElementById('message')
                });
                */
                google.maps.event.addListener(map, 'click', function(event) {
                    placeMarker(event.latLng);
                    /*
                    google.maps.event.addListener(marker, 'click', function() {
                        infowindow.open(map, marker);
                    });
                    */
                });
                placeMarker(latlng);
            };
            function placeMarker(location) {
                if (marker) {
                    marker.setMap(null);
                    marker = null;
                    placeMarker(location);
                }
                else {
                    marker = new google.maps.Marker({
                        position: location,
                        map: map,
                        draggable: true
                        });
                    google.maps.event.addListener(marker, 'dragend', function (event) {
                        document.getElementById("lat").value = event.latLng.lat();
                        document.getElementById("lng").value = event.latLng.lng();
                    });
                }
            };
            /*
            function saveData() {
                var name = escape(document.getElementById('name').value);
                var address = escape(document.getElementById('address').value);
                var type = document.getElementById('type').value;
                var latlng = marker.getPosition();
                var url = 'phpsqlinfo_addrow.php?name=' + name + '&address=' + address +
                          '&type=' + type + '&lat=' + latlng.lat() + '&lng=' + latlng.lng();

                downloadUrl(url, function(data, responseCode) {

                    if (responseCode == 200 && data.length <= 1) {
                        infowindow.close();
                        messagewindow.open(map, marker);
                    }
                });
            }
            
            function downloadUrl(url, callback) {
                var request = window.ActiveXObject ?
                    new ActiveXObject('Microsoft.XMLHTTP') :
                    new XMLHttpRequest;

                request.onreadystatechange = function() {
                    if (request.readyState == 4) {
                    request.onreadystatechange = doNothing;
                    callback(request.responseText, request.status);
                    }
                };

                request.open('GET', url, true);
                request.send(null);
            }
            */

            function doNothing () {
            }
        </script>
        -->

        <script>
            $('select').selectpicker('render');
        </script>

        <style type="">
            footer {
                height: 82px;
            }

            .droppable.dragover {background: #00CC71; }

            select {
                width: 190px;
                font-family: inherit;
                color: #fff;
                border: none !important;
                -webkit-appearance: none;
                background-color: #fff !important;
                font-size: 14px;
                font-weight: 100;
                outline: none !important;
                    transition: 0.3s !important;
            }
            select:hover {
                background-color: #ffffff;
            }
            #txtcountry {
                width: 98%;
                height: 16px;
                font-family: inherit;
                letter-spacing: .4em;
                margin: auto;
                border-top: 1px black solid;
            }
            #txtplacename {
                width: 98%;
                height: 16px;
                font-family: inherit;
                margin: auto;
            }
        </style>
    </head>
    <body>
        <div id="outer-wrapper">
            <div id="inner-wrapper">
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

                <div id="page-canvas">
                    <div id="page-content" style="height: 568px;" >
                        <section class="sub-header">
                            <div class="search-bar horizontal collapse" id="searchlink" style="height: 0px;">
                                <div class="content">
                                    <div class="container">
                                        <form class="main-search border-less-inputs inputs-3" role="form" method="post">
                                            <div class="input-row">
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
                                    </div>   
                                </div>
                                <!-- /.main-search -->
                            </div>

                            <div class="breadcrumb-wrapper">
                                <div class="container">
                                    <div id="searchbar" class="searchlink">
                                        <a href="#" class="inner" data-toggle="collapse" data-target="#searchlink" aria-controls="searchlink">
                                            <span class="icon"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="items-list mCustomScrollbar _mCS_1" style="position: relative; top: 45px;">
                            <div class="inner">
                                <header>
                                    <h3>Search Results</h3>
                                </header>
                                <ul class="results list">
                                    <?php foreach ($info as $key => $value): ?>
                                    <li>
                                        <div class="item" data-id="<?= $value['info_id']; ?>" id="getUser">
                                            <a href="<?= base_url("pages/profile/{$value['info_id']}"); ?>" class="image loaded">
                                                <div class="inner">
                                                    <img src="<?= base_url().'uploads/'.$value['pictures']; ?>" alt="" class="mCS_img_loaded">
                                                </div>
                                            </a>
                                            <div class="wrapper">
                                                <a href="<?= base_url("pages/profile/{$value['info_id']}"); ?>">
                                                    <h3><?= $value['name']; ?></h3>
                                                </a>
                                                <figure><?= $value['address']; ?></figure>
                                                <div class="info">
                                                    <div class="type">
                                                        <span><?= $value['tags']; ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        
                        <section class="col-sm-8">
                            
                        </section>
                        
                    </div>               
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
            </div> 
        </div>

        
        <script src="<?=base_url ('public/summernote/summernote.min.js');?>"></script>
        <script src="<?=base_url ('public/src/bootstrap-tagsinput.js');?>"></script>
        <!--<script src="<?=base_url ('public/js/jquery.ba-hashchange.min.js');?>"></script>
        <script src="<?=base_url ('public/js/dynamicpage.js');?>"></script>-->


        <script type="text/javascript">
            $(document).ready(function() {
                $('.summernote').summernote();
            });
        </script>

        <script>(function($){
            $(document).ready(function() {

                var owlpostslider = $("#armonioso-post-list .owl-carousel").owlCarousel({
                    loop: true,
                    items:1,
                    center:false,
                    merge:false,
                    autoplay:true,
                    autowidth: false,
                    autoplayTimeout:10000,
                    autoplaySpeed: 1000,
                    navSpeed: 1000,
                    nav: true,
                    dots: false,
                    navText: false,
                    responsive: {
                        1199:{
                            items:1
                        },
                        979:{
                            items:1
                        },
                        768:{
                            items:1
                        },
                        479:{
                            items:1
                        },
                        0:{
                            items:1
                        }
                    }
                })
            });})(jQuery);
        </script>
    </body>
</html> 