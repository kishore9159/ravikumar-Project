<?php
/**
 * Hero section.
 *
 * @package StartupWebsite
 */

if (! defined('ABSPATH')) {
    exit;
}
?>
<section id="home" class="hero">
    <div class="hero-bg">
        <div class="hero-shape hero-shape-1"></div>
        <div class="hero-shape hero-shape-2"></div>
    </div>

    <div class="container hero-container">
        <div class="hero-content">
            <span class="hero-badge">&#x1F680; Welcome to the Future</span>
            <h1 class="hero-title">
                Innovative <span class="highlight">Digital</span> Solutions for Your Business
            </h1>
            <p class="hero-description">
                RIE - The Digital Technocrats provides cutting-edge digital solutions, professional services, and expert consulting
                to help your business grow and succeed in the modern digital landscape.
            </p>
            <div class="hero-buttons">
                <a href="<?php echo esc_url(home_url('/#services')); ?>" class="btn btn-primary">
                    Our Services <i class="fas fa-arrow-right btn-icon" aria-hidden="true"></i>
                </a>
                <a href="<?php echo esc_url(home_url('/#about')); ?>" class="btn btn-secondary">
                    <i class="fas fa-play play-icon" aria-hidden="true"></i> Learn More
                </a>
            </div>
            <div class="hero-stats">
                <div class="stat">
                    <span class="stat-number">10+</span>
                    <span class="stat-label">Years Experience</span>
                </div>
                <div class="stat">
                    <span class="stat-number">500+</span>
                    <span class="stat-label">Projects Completed</span>
                </div>
                <div class="stat">
                    <span class="stat-number">200+</span>
                    <span class="stat-label">Happy Clients</span>
                </div>
            </div>
        </div>

        <div class="hero-image">
            <div class="hero-image-wrapper">
                <div class="hero-main-visual">
                    <div class="visual-circle"></div>
                    <div class="visual-bars">
                        <div class="bar bar-1"></div>
                        <div class="bar bar-2"></div>
                        <div class="bar bar-3"></div>
                        <div class="bar bar-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
