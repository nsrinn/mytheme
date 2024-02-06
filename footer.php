<?php

/**
 * footer template
 * 
 * 
 * @package mytheme
 */

?>

<footer>
    <footer class="bg-body-tertiary text-center text-lg-start">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row py-5">
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <?php dynamic_sidebar('footer-col-1'); ?>
                </div>
                <!--Grid column-->

                <!-- Repeat the above structure for the remaining columns (2, 3, and 4) -->
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <?php dynamic_sidebar('footer-col-2'); ?>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <?php dynamic_sidebar('footer-col-3'); ?>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6  mb-md-0">
                    <?php dynamic_sidebar('footer-col-4'); ?>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->
        <hr>
        <!-- <div class="row"> -->
        <!-- Copyright -->
        <div class="container px-2">
            <div class="col-md-6 col float-left footer-text">
                <div class=" text-left foot" style="">
                    ©2022 DugiLanding All right reserved.
                    <!-- <a class="text-body" href="https://mdbootstrap.com/">MDBootstrap.com</a> -->
                </div>
            </div>

            <!-- Copyright -->

            <!-- social media icons -->
            <div class="col-md-6 col float-left text-right footer-icons ">
                <!-- Add your social media icons or links here -->
                <a href="#"><i class="fa-brands fa-facebook-f mx-2"></i></a>
                <a href=""><i class="fa-solid fa-globe mx-2"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin mx-2"></i></a>
                <a href="#"><i class="fa-brands fa-instagram mx-2" ></i></a>
                <a href="#"><i class="fa-brands fa-twitter mx-2"></i></a>
            </div>
        </div>
        </div>
    </footer>
</footer>

<?php wp_footer() ?>
</div>
</div>

</body>

</html>