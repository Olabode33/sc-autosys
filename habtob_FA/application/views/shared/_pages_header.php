<div id="myCarousel" class="carousel slide hidden-xs" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="<?php echo base_url(); ?>assets/images/banner.jpg" alt="Los Angeles" width="100%">
            <div class="container">
                <div class="carousel-caption">
                    <h1 class='hidden-xs'>Welcome!!!!</h1>
                    <p class='hidden-xs'>This is Habtob Football Academy</p><br>
                    <p><a class="btn btn-lg btn-primary hidden-xs" href="<?php echo site_url('accounts/register'); ?>" role="button">Register with us today!</a></p>
                </div>
            </div>
        </div>

        <div class="item">
            <img src="<?php echo base_url(); ?>assets/images/banner-1.jpg" alt="Chicago" width="100%">
            <div class="container">
                <div class="carousel-caption">
                    <h1 class='hidden-xs'>Join us!</h1>
                    <p class='hidden-xs'>Do you love football?, do you want to learn how to play the game?</p><br>
                    <p><a class="btn btn-lg btn-primary hidden-xs" href="<?php echo site_url('accounts/register'); ?>" role="button">Register with us today!</a></p>
                </div>
            </div>
        </div>

        <div class="item">
            <img src="<?php echo base_url(); ?>assets/images/banner-2.jpg" alt="New York" width="100%">
            <div class="container">
                <div class="carousel-caption">
                    <h1 class='hidden-xs'>Join us!</h1>
                    <p class='hidden-xs'>Do you love football?, do you want to learn how to play the game?</p><br>
                    <p><a class="btn btn-lg btn-primary hidden-xs" href="<?php echo site_url('accounts/register'); ?>" role="button">Register with us today!</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>