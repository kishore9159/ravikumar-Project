<?php
/**
 * Footer section.
 *
 * @package StartupWebsite
 */

if (! defined('ABSPATH')) {
    exit;
}

$logo_url = get_template_directory_uri() . '/logo.png';
?>
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-brand">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="footer-logo" aria-label="<?php esc_attr_e('Home', 'startup-website'); ?>">
                    <img src="<?php echo esc_url($logo_url); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="footer-logo-img" />
                </a>
                <p class="footer-description">
                    RIE - The Digital Technocrats provides cutting-edge digital solutions and professional services to help
                    businesses thrive in the modern digital landscape.
                </p>
                <div class="social-links">
                    <a href="#" class="social-link" aria-label="Facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                    <a href="#" class="social-link" aria-label="Twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                    <a href="#" class="social-link" aria-label="LinkedIn"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                    <a href="#" class="social-link" aria-label="Instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                    <a href="#" class="social-link" aria-label="WhatsApp"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                </div>
            </div>

            <div class="footer-links">
                <h4 class="footer-title">Quick Links</h4>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/#home')); ?>">Home</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#about')); ?>">About Us</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#services')); ?>">Services</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#testimonials')); ?>">Testimonials</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#contact')); ?>">Contact</a></li>
                </ul>
            </div>

            <div class="footer-links">
                <h4 class="footer-title">Our Services</h4>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/#services')); ?>">eBook Publishing Services</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#services')); ?>">Typesetting Services</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#services')); ?>">ePub3 Services</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#services')); ?>">Accessibility Services</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#services')); ?>">Editorial and Pre-press</a></li>
                </ul>
            </div>

            <div class="footer-newsletter">
                <h4 class="footer-title">Newsletter</h4>
                <p>Subscribe to our newsletter for updates and insights.</p>
                <form class="newsletter-form" method="POST" action="#">
                    <input type="email" name="newsletter_email" placeholder="Enter your email" />
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo esc_html(wp_date('Y')); ?> RIE - The Digital Technocrats. All Rights Reserved.</p>
            <div class="footer-bottom-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Sitemap</a>
            </div>
        </div>
    </div>

    <button class="scroll-top" type="button" onclick="window.scrollTo({top: 0, behavior: 'smooth'})" aria-label="Scroll to top">
        <i class="fas fa-arrow-up" aria-hidden="true"></i>
    </button>
</footer>
