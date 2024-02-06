<?php get_header(); ?>

<section id="primary" class="content-area">
    <main id="main" class="site-main">

        <header class="page-header">
            <h1 class="page-title"><?php printf(__('Search Results for: %s', 'your-theme-textdomain'), '<span>' . get_search_query() . '</span>'); ?></h1>
        </header>

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('template-parts/content', 'search'); ?>
            <?php endwhile; ?>

            <?php the_posts_pagination(); ?>

        <?php else : ?>
            <p><?php esc_html_e('No results found.', 'your-theme-textdomain'); ?></p>
        <?php endif; ?>

    </main>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
