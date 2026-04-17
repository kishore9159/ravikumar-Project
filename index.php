<?php
/**
 * Main index template.
 *
 * @package StartupWebsite
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php the_content(); ?>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <?php get_template_part('template-parts/sections/hero'); ?>
        <?php get_template_part('template-parts/sections/about'); ?>
        <?php get_template_part('template-parts/sections/services'); ?>
        <?php get_template_part('template-parts/sections/why-choose-us'); ?>
        <?php get_template_part('template-parts/sections/contact'); ?>
    <?php endif; ?>
</main>

<?php
get_footer();
