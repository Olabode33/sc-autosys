<div class="blog">
    <div class="container">
	<div class="blog-main">
            <h3>ACADEMY NEWS</h3>
            <div class="blog-top">
		<div class="col-md-8 blog-left">
                    <div class="blog-top-left">
                        <h4><?php echo $news_item['title']; ?></h4>
                        <img src="<?php echo base_url(); ?>assets/images/htfa_img_0_1.jpg" alt="" class="img-responsive">
                        <p>
                            <?php echo $news_item['text']; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 blog-right">
		<div class="blog-right-top">
                    <h4>Menu</h4>
                    <ul>
                        <li><a href="<?php echo site_url(); ?>">Return Home</a></li>
                        <li><a href="<?php echo site_url('accounts/register'); ?>">Register</a></li>
                    </ul>
                    <div class="archives">
                        <h4>Archives</h4>
                        <ul>
                            <li><a href="<?php echo site_url('news/one'); ?>">Inauguration on 28th July, 2018.</a></li>
                            <li><a href="<?php echo site_url('news/two'); ?>">Player Registration and Trials</a></li>
                        </ul>
                    </div>
            </div>
            </div>
        </div>
    </div>
</div>

