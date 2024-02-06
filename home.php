<?php
// Start the loop
if (have_posts()) :
    while (have_posts()) : the_post();
?>

    <!-- Your HTML structure for each post -->
    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="post-content">
            <?php the_excerpt(); // or use the_content() for full content ?>
        </div>

    </article>

<?php
    endwhile;
else :
    // If no posts are found
    echo 'No posts found';
endif;
?>