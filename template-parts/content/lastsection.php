<section class="lastsection">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 lastseccontent">
                <div class="lastseccontent">
                    <h2 class="lastsechead"><?php echo get_field('last_head'); ?></h2>
                    <p><?php echo get_field('last_para'); ?></p>

                </div>
                <div class="lastsecbtn">
                    <button type="button" class="btn btn-primary btncontact">Contact us</button>
                    <button type="button" class="btn btn-primary btnseemore">or see our portfolio</button>
                </div>
            </div>
            <div class="col-lg-6 ">

                <img src="<?php echo esc_url(get_field('last_banner_image')); ?>" alt="lastsecimg" class="d-inline-block align-top lastsecimg">




            </div>


        </div>

    </div>



</section>