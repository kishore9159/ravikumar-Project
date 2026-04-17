<?php
/**
 * Front page template.
 *
 * @package StartupWebsite
 */

if (! defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main">
    <?php get_template_part('template-parts/sections/hero'); ?>
    <?php get_template_part('template-parts/sections/about'); ?>
    <?php get_template_part('template-parts/sections/services'); ?>
    <?php get_template_part('template-parts/sections/why-choose-us'); ?>
    <?php get_template_part('template-parts/sections/contact'); ?>
</main>

<?php
get_footer();
