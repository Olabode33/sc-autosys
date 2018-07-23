<!--==============================footer=================================-->
        </div>
        <footer>
            <div class="container_12">
                <div class="grid_12">
                    <div class="f_logo">
                        <a href="index.html">Habtob Football Academy</a>
                    </div>
                    <div class="f_contacts">
                        <a href="#" class="mail_link"><span class="fa fa-envelope"></span> MAIL@DEMOLINK.ORG</a>
                        <div class="f_phone"><span class="fa fa-phone"></span>+1 800 559 6580</div>
                    </div>
                    <div class="copy">
                        <span>Marathon &copy; 2018 | <a href="#">Privacy Policy</a></span>
                        Web site designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </footer>
        <script src="<?php echo base_url(); ?>assets/js/jquery.countdown.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/cd_config.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/modernizr.custom.69142.js"></script>
        <script type="text/javascript">
            Modernizr.load({
                test: Modernizr.csstransforms3d && Modernizr.csstransitions,
                yep : ['http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js','<?php echo base_url(); ?>assets/js/jquery.hoverfold.js'],
                nope: '<?php echo base_url(); ?>assets/css/fallback.css',
                callback : function( url, result, key ) {
                    if( url === '<?php echo base_url(); ?>assets/js/jquery.hoverfold.js' ) {
                        $( '#grid' ).hoverfold();
                    }
                }
            });
        </script>
    </body>
</html>