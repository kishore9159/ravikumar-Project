<?php
/**
 * About section.
 *
 * @package StartupWebsite
 */

if (! defined('ABSPATH')) {
    exit;
}

$features = array(
    'Expert team with 10+ years experience',
    'Quality-driven approach to every project',
    'On-time delivery guaranteed',
    'Dedicated support team available 24/7',
    'Cost-effective solutions',
    'Cutting-edge technology stack',
);
?>
<section id="about" class="about section">
    <div class="container about-container">
        <div class="about-image">
            <div class="about-image-wrapper">
                <div class="about-visual">
                    <div class="visual-grid">
                        <div class="grid-item item-1">
                            <span class="grid-icon">&#x1F3AF;</span>
                            <span class="grid-label">Mission Driven</span>
                        </div>
                        <div class="grid-item item-2">
                            <span class="grid-icon">&#x1F4BC;</span>
                            <span class="grid-label">Professional</span>
                        </div>
                        <div class="grid-item item-3">
                            <span class="grid-icon">&#x1F31F;</span>
                            <span class="grid-label">Excellence</span>
                        </div>
                        <div class="grid-item item-4">
                            <span class="grid-icon">&#x1F91D;</span>
                            <span class="grid-label">Partnership</span>
                        </div>
                    </div>
                </div>
                <div class="experience-badge">
                    <span class="exp-number">10+</span>
                    <span class="exp-text">Years of Experience</span>
                </div>
            </div>
        </div>

        <div class="about-content">
            <span class="section-label">About Us</span>
            <h2 class="about-title">We Are Your One-Stop Solution for All Digital Services</h2>
            <p class="about-description">
                RIE - The Digital Technocrats is a leading technology company providing comprehensive digital solutions,
                professional services, and expert consulting to businesses worldwide. Using our
                state-of-the-art infrastructure combined with global experience and technology
                expertise, we define, plan, and deliver a complete range of services.
            </p>
            <p class="about-description">
                Our expansion has been both organic and rapid, in terms of scale and the services
                we offer to our customers. We have increased our team size and production capacity
                in response to the growing demand for our services.
            </p>

            <div class="about-features">
                <?php foreach ($features as $feature) : ?>
                    <div class="feature-item">
                        <i class="fas fa-check-circle feature-icon" aria-hidden="true"></i>
                        <span><?php echo esc_html($feature); ?></span>
                    </div>
                <?php endforeach; ?>
            </div>

            <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="btn btn-primary">Get in Touch</a>
        </div>
    </div>
</section>
