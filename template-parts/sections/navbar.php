<?php
/**
 * Navbar section.
 *
 * @package StartupWebsite
 */

if (! defined('ABSPATH')) {
    exit;
}

$logo_url = get_template_directory_uri() . '/public/logoo.png';
?>
<nav class="navbar" id="navbar">
    <div class="container navbar-container">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo" aria-label="<?php esc_attr_e('Home', 'startup-website'); ?>">
            <img src="<?php echo esc_url($logo_url); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="logo-img" />
        </a>

        <ul class="nav-menu" id="nav-menu">
            <li><a href="<?php echo esc_url(home_url('/#home')); ?>" onclick="closeMenu()">Home</a></li>
            <li><a href="<?php echo esc_url(home_url('/#about')); ?>" onclick="closeMenu()">About</a></li>
            <li class="nav-item-has-submenu">
                <a href="<?php echo esc_url(home_url('/#services')); ?>" onclick="closeMenu()" aria-haspopup="true">Services</a>
                <ul class="nav-submenu" aria-label="Services submenu">
                    <li><a href="<?php echo esc_url(home_url('/#services')); ?>" onclick="closeMenu()">eBook Publishing Services</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#services')); ?>" onclick="closeMenu()">Typesetting Services</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#services')); ?>" onclick="closeMenu()">ePub3 Services</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#services')); ?>" onclick="closeMenu()">Accessibility Services</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#services')); ?>" onclick="closeMenu()">Editorial and Pre-press</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#services')); ?>" onclick="closeMenu()">Web Design</a></li>
                </ul>
            </li>
            <li><a href="<?php echo esc_url(home_url('/#team')); ?>" onclick="closeMenu()">Team</a></li>
            <li><a href="<?php echo esc_url(home_url('/#contact')); ?>" onclick="closeMenu()">Contact</a></li>
        </ul>

        <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="nav-cta btn btn-primary">Get Started</a>

        <div class="hamburger" id="hamburger" onclick="toggleMenu()" role="button" tabindex="0" aria-label="<?php esc_attr_e('Toggle menu', 'startup-website'); ?>">
            <span class="bar-line"></span>
            <span class="bar-line"></span>
            <span class="bar-line"></span>
        </div>
    </div>
</nav>
