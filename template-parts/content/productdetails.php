<section class="productsection">
    <div class="products">
        <div class="row">
            <div class="col-lg-4 productcol-4">
                <div class="browsecategories col float-left">
                    <table class="table table-bordered browsetable">
                        <thead class="thead theadbrowse">
                            <tr>
                                <th>Browse Categories</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> <a href="#" class="text-dark"><i class="fa-solid fa-house"></i> Home</a></td>
                            </tr>
                            <?php
                            // Get WooCommerce product categories excluding uncategorized
                            $product_categories = get_terms(array(
                                'taxonomy'   => 'product_cat',
                                'hide_empty' => 1,
                                'exclude'    => array(get_option('default_product_cat')), // Exclude uncategorized
                                'orderby'    => 'name',
                                'order'      => 'DESC',
                            ));

                            foreach ($product_categories as $category) {
                                $category_link = get_term_link($category); // Get category link
                                $category_image = get_woocommerce_term_meta($category->term_id, 'thumbnail_id', true); // Get category image ID

                                echo '<tr>';
                                echo '<td><a href="' . esc_url($category_link) . '" class="text-dark text-decoration"><img src="' . wp_get_attachment_url($category_image) . '" alt="' . esc_attr($category->name) . '"/> ' . esc_html($category->name) . '</a></td>';
                                echo '</tr>';
                            }
                            ?>
                            <!-- <tr>
                                <td><i class="fa-brands fa-wordpress"></i> WordPress Themes</td>
                            </tr>
                            <tr>
                                <td><i class="fa-solid fa-cart-shopping"></i> eCommerce Templates</td>
                            </tr>
                            <tr>
                                <td><i class="fa-solid fa-tv"></i> Marketing Templates</td>
                            </tr>
                            <tr>
                                <td><i class="fa-solid fa-border-all"></i> CMS Templates</td>
                            </tr>
                            <tr>
                                <td><i class="fa-solid fa-desktop"></i> Site Templates</td>
                            </tr>
                            <tr>
                                <td> <i class="fa-regular fa-pen-to-square"></i> Blogging</td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
                <div class="subscribe col ">
                    <h6>Subscribe Newsletter</h6>
                    <p>Get all the latest information on Events, Sales and Offers.</p>
                    <?php echo do_shortcode('[contact-form-7 id="b1d730b" title="subscribe form"]'); ?>
                </div>
                <div class="pol col ">


                    <img src="<?php echo get_template_directory_uri(); ?>/images/Circle.png" alt="polimg" class=" polimg">


                    <h5>Monthly users in your site</h5>
                    <h3>1.0286</h3>
                    <small>We accompany you with our versatile expertise in digital marketing</small>



                </div>
                <div class="square col ">


                    <img src="<?php echo get_template_directory_uri(); ?>/images/Image9.png" alt="sqrimg" class=" sqrimg">

                    <p>Create your beautiful portfolio website with Squarespace. Start your free trial.</p>
                    <a href=""><span>ads via Carbon</span></a>

                </div>
                <?php
                dynamic_sidebar('home_page_sidebar');
                ?>

            </div>

            <div class="col-lg-8 ">
                <div class="col">
                    <div class="container ">
                        <div class="head">
                            <h4 class="heading">New Products</h4>
                            <div class="custom-line"></div>
                        </div>
                        <div class="products">

                            <!-- row1 -->
                            <!-- <div class="row">
                                <div class="col-md-4">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/Image.png" alt="productimg" class="d-inline-block align-top productimg">
                                    <div class="row">
                                        <div class="col-lg-8 colcontent float-left">
                                            <p><b class="phead">Abstract Theme</b> <br><span class="spanp">PHP,Wordpress</span></p>
                                        </div>
                                        <div class="col-lg-2 colbtn float-left">
                                            <button type="button" class="btn btn-info price-btn">$29.99</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/Image1.png" alt="productimg" class="d-inline-block align-top productimg">
                                    <div class="row">
                                        <div class="col-lg-8 colcontent float-left">
                                            <p><b class="phead">Abstract Theme</b> <br><span class="spanp">PHP,Wordpress</span></p>
                                        </div>
                                        <div class="col-lg-2 colbtn float-left">
                                            <button type="button" class="btn btn-info price-btn">$29.99</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/Image2.png" alt="productimg" class="d-inline-block align-top productimg">
                                    <div class="row">
                                        <div class="col-lg-8 colcontent float-left">
                                            <p><b class="phead">Abstract Theme</b> <br><span class="spanp">PHP,Wordpress</span></p>
                                        </div>
                                        <div class="col-lg-2 colbtn float-left">
                                            <button type="button" class="btn btn-info price-btn">$29.99</button>
                                        </div>
                                    </div>
                                </div>


                            </div> -->
                            <!-- row2 -->
                            <!-- <div class="row">
                                <div class="col-md-4">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/Image3.png" alt="productimg" class="d-inline-block align-top productimg">
                                    <div class="row">
                                        <div class="col-lg-8 colcontent float-left">
                                            <p><b class="phead">Abstract Theme</b> <br><span class="spanp">PHP,Wordpress</span></p>
                                        </div>
                                        <div class="col-lg-2 colbtn float-left">
                                            <button type="button" class="btn btn-info price-btn">$29.99</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/Image4.png" alt="productimg" class="d-inline-block align-top productimg">
                                    <div class="row">
                                        <div class="col-lg-8 colcontent float-left">
                                            <p><b class="phead">Abstract Theme</b> <br><span class="spanp">PHP,Wordpress</span></p>
                                        </div>
                                        <div class="col-lg-2 colbtn float-left">
                                            <button type="button" class="btn btn-info price-btn">$29.99</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/Image5.png" alt="productimg" class="d-inline-block align-top productimg">
                                    <div class="row">
                                        <div class="col-lg-8 colcontent float-left">
                                            <p><b class="phead">Abstract Theme</b> <br><span class="spanp">PHP,Wordpress</span></p>
                                        </div>
                                        <div class="col-lg-2 colbtn float-left">
                                            <button type="button" class="btn btn-info price-btn">$29.99</button>
                                        </div>
                                    </div>
                                </div>


                            </div> -->
                            <!-- row3 -->
                            <!-- <div class="row">
                                <div class="col-md-4">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/Image6.png" alt="productimg" class="d-inline-block align-top productimg">
                                    <div class="row">
                                        <div class="col-lg-8 colcontent float-left">
                                            <p><b class="phead">Abstract Theme</b> <br><span class="spanp">PHP,Wordpress</span></p>
                                        </div>
                                        <div class="col-lg-2 colbtn float-left">
                                            <button type="button" class="btn btn-info price-btn">$29.99</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/Image7.png" alt="productimg" class="d-inline-block align-top productimg">
                                    <div class="row">
                                        <div class="col-lg-8 colcontent float-left">
                                            <p><b class="phead">Abstract Theme</b> <br><span class="spanp">PHP,Wordpress</span></p>
                                        </div>
                                        <div class="col-lg-2 colbtn float-left">
                                            <button type="button" class="btn btn-info price-btn">$29.99</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/Image8.png" alt="productimg" class="d-inline-block align-top productimg">
                                    <div class="row">
                                        <div class="col-lg-8 colcontent float-left">
                                            <p><b class="phead">Abstract Theme</b> <br><span class="spanp">PHP,Wordpress</span></p>
                                        </div>
                                        <div class="col-lg-2 colbtn float-left">
                                            <button type="button" class="btn btn-info price-btn">$29.99</button>
                                        </div>
                                    </div>
                                </div>


                            </div> -->
                            <div class="row">
                                <?php
                                $args = array(
                                    'post_type'      => 'product',
                                    'posts_per_page' => 9,
                                    'order'          => 'asc',
                                );

                                $products = new WP_Query($args);

                                if ($products->have_posts()) :
                                    while ($products->have_posts()) :
                                        $products->the_post();
                                ?>
                                        <div class="col-md-4">
                                            <a href="<?php the_permalink(); ?>"> <!-- Add this line for the product link -->
                                                <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'thumbnail'); ?>" alt="productimg" class="d-inline-block align-top productimg">
                                            </a>
                                            <div class="row">
                                                <div class="col-lg-8 colcontent float-left">
                                                    <p><b class="phead"><?php the_title(); ?></b> <br><span class="spanp"><?php echo get_the_term_list($post->ID, 'product_cat', '', ', ', ''); ?></span></p>
                                                </div>
                                                <div class="col-lg-2 colbtn float-left">
                                                    <button type="button" class="btn btn-info price-btn"><?php echo wc_price(get_post_meta($post->ID, '_price', true)); ?></button>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                else :
                                    echo 'No products found';
                                endif;
                                ?>
                            </div>


                            <?php
                            // echo do_shortcode('[products limit="9" columns="3" orderby="date" order="asc"]');
                            ?>


                        </div>
                        <div class="prlinesec">
                            <div class="col-md-12 prsmallsec text-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/figma.png" alt="figmaimg" class="d-inline-block align-top figmaimg">
                                <p class="d-inline-block align-middle">
                                    More than 200 untouched Vector Flags for Figma <a href="#">Get them Now</a>
                                </p>
                            </div>

                        </div>
                        <div class="links mt-3 ">
                            <ul class="list-unstyled h6">
                                <li>Headers</li>
                                <li>Hero Section</li>
                                <li>Block Page</li>
                                <li>CTA Section</li>
                                <li>Footers</li>
                            </ul>
                        </div>
                        <div class="products">

                            <!-- row1 -->
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/Image.png" alt="productimg" class="d-inline-block align-top productimg">
                                    <div class="row">
                                        <div class="col-lg-8 colcontent float-left">
                                            <p><b class="phead">Abstract Theme</b> <br><span class="spanp">PHP,Wordpress</span></p>
                                        </div>
                                        <div class="col-lg-2 colbtn float-left">
                                            <button type="button" class="btn btn-info price-btn">$29.99</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/Image1.png" alt="productimg" class="d-inline-block align-top productimg">
                                    <div class="row">
                                        <div class="col-lg-8 colcontent float-left">
                                            <p><b class="phead">Abstract Theme</b> <br><span class="spanp">PHP,Wordpress</span></p>
                                        </div>
                                        <div class="col-lg-2 colbtn float-left">
                                            <button type="button" class="btn btn-info price-btn">$29.99</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/Image2.png" alt="productimg" class="d-inline-block align-top productimg">
                                    <div class="row">
                                        <div class="col-lg-8 colcontent float-left">
                                            <p><b class="phead">Abstract Theme</b> <br><span class="spanp">PHP,Wordpress</span></p>
                                        </div>
                                        <div class="col-lg-2 colbtn float-left">
                                            <button type="button" class="btn btn-info price-btn">$29.99</button>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <!-- row2 -->
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/Image3.png" alt="productimg" class="d-inline-block align-top productimg">
                                    <div class="row">
                                        <div class="col-lg-8 colcontent float-left">
                                            <p><b class="phead">Abstract Theme</b> <br><span class="spanp">PHP,Wordpress</span></p>
                                        </div>
                                        <div class="col-lg-2 colbtn float-left">
                                            <button type="button" class="btn btn-info price-btn">$29.99</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/Image4.png" alt="productimg" class="d-inline-block align-top productimg">
                                    <div class="row">
                                        <div class="col-lg-8 colcontent float-left">
                                            <p><b class="phead">Abstract Theme</b> <br><span class="spanp">PHP,Wordpress</span></p>
                                        </div>
                                        <div class="col-lg-2 colbtn float-left">
                                            <button type="button" class="btn btn-info price-btn">$29.99</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/Image5.png" alt="productimg" class="d-inline-block align-top productimg">
                                    <div class="row">
                                        <div class="col-lg-8 colcontent float-left">
                                            <p><b class="phead">Abstract Theme</b> <br><span class="spanp">PHP,Wordpress</span></p>
                                        </div>
                                        <div class="col-lg-2 colbtn float-left">
                                            <button type="button" class="btn btn-info price-btn">$29.99</button>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <!-- row3 -->
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/Image6.png" alt="productimg" class="d-inline-block align-top productimg">
                                    <div class="row">
                                        <div class="col-lg-8 colcontent float-left">
                                            <p><b class="phead">Abstract Theme</b> <br><span class="spanp">PHP,Wordpress</span></p>
                                        </div>
                                        <div class="col-lg-2 colbtn float-left">
                                            <button type="button" class="btn btn-info price-btn">$29.99</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/Image7.png" alt="productimg" class="d-inline-block align-top productimg">
                                    <div class="row">
                                        <div class="col-lg-8 colcontent float-left">
                                            <p><b class="phead">Abstract Theme</b> <br><span class="spanp">PHP,Wordpress</span></p>
                                        </div>
                                        <div class="col-lg-2 colbtn float-left">
                                            <button type="button" class="btn btn-info price-btn">$29.99</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/Image8.png" alt="productimg" class="d-inline-block align-top productimg">
                                    <div class="row">
                                        <div class="col-lg-8 colcontent float-left">
                                            <p><b class="phead">Abstract Theme</b> <br><span class="spanp">PHP,Wordpress</span></p>
                                        </div>
                                        <div class="col-lg-2 colbtn float-left">
                                            <button type="button" class="btn btn-info price-btn">$29.99</button>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>




                        <!-- Your content goes here -->
                    </div>

                </div>
            </div>
        </div>

</section>