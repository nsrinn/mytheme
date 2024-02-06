<?php

/**
 * Header Navigation Template
 * 
 * 
 * @package mytheme
 */
?>
<section class="banner">
    <div class="container">
        <div class="col-lg-5 float-left bannertext">
            <div class="bannersecdiv">
                <button type="button" class="btn btn-info banner-btn">Christmas sale</button>
                <h1 class="bannerhead"><?php echo get_field('main_title'); ?></h1>
            </div>
            <div class="input-group bannersearch">
            <?php
                $search_query = get_field('search');
                ?>

                <!-- <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
                    <input type="search" class="form-control" placeholder="e.g. Responsive header" aria-label="Search" aria-describedby="search-addon" name="s" value="<?php echo esc_attr($search_query); ?>" />
                    <button type="submit" class="btn btn-primary searchsecbanner" data-mdb-ripple-init>search</button>
                </form> -->
                
                <input type="search" class="form-control " placeholder="e.g. Responsive header" aria-label="Search" aria-describedby="search-addon" value="<?php echo esc_attr($search_query); ?>" />
                <button type="button" class="btn btn-primary searchsecbanner" data-mdb-ripple-init>search</button>
            </div>
            <div class="bansecpara">
                <p class="bannerpara"><?php echo get_field('banner_para');?></p>
            </div>

        </div>
        <div class="col-lg-7 float-left bannerimage">
            <div class="bannershadow">
                <img src="<?php echo esc_url(get_field('banner_image')); ?>" alt="bannerimg" class="d-inline-block align-top bannerimg">
            </div>



        </div>
    </div>


</section>