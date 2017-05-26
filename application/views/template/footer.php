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
        <script src="<?=base_url ('public/js/jquery.ba-hashchange.min.js');?>"></script>
        <script src="<?=base_url ('public/js/dynamicpage.js');?>"></script>

        
        

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