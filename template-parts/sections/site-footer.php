<?php
/**
 * Footer section.
 *
 * @package StartupWebsite
 */

if (! defined('ABSPATH')) {
    exit;
}

$logo_url = get_template_directory_uri() . '/public/logoo.png';
?>
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-brand">
                <a href="<?php echo esc_url(home_url('/#home')); ?>" class="footer-logo" aria-label="<?php esc_attr_e('Home', 'startup-website'); ?>">
                    <img src="<?php echo esc_url($logo_url); ?>" alt="RIE - Rithie Innovative E-Services" class="footer-logo-img" />
                </a>
                <p class="footer-description">
                    RIE - Rithie Innovative E-Services provides cutting-edge digital solutions and professional services to help
                    businesses thrive in the modern digital landscape.
                </p>
                <div class="social-links">
                    <a href="https://www.facebook.com/share/1DrbXZtHBL/" class="social-link" aria-label="Facebook" target="_blank" rel="noreferrer"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                    <a href="https://www.linkedin.com/in/ravi-k-a6567a38a?utm_source=share_via&utm_content=profile&utm_medium=member_android" class="social-link" aria-label="LinkedIn" target="_blank" rel="noreferrer"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/rithie_rie?igsh=Z2FsMzN6Nm93a2dw" class="social-link" aria-label="Instagram" target="_blank" rel="noreferrer"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                    <a href="https://wa.me/message/JBCG2OJA4PMVB1" class="social-link" aria-label="WhatsApp" target="_blank" rel="noreferrer"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                </div>
            </div>

            <div class="footer-links">
                <h4 class="footer-title">Quick Links</h4>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/#home')); ?>">Home</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#about')); ?>">About Us</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#services')); ?>">Services</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#team')); ?>">Team</a></li>
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
                <form class="newsletter-form" method="post" action="#">
                    <input type="email" name="newsletter_email" placeholder="Enter your email" />
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2026 RIE - Rithie Innovative E-Services. All Rights Reserved.</p>
            <div class="footer-bottom-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Sitemap</a>
            </div>
        </div>
    </div>

    <button class="scroll-top" type="button" onclick="window.scrollTo({top: 0, behavior: 'auto'})" aria-label="Scroll to top">
        <i class="fas fa-arrow-up" aria-hidden="true"></i>
    </button>
</footer>
