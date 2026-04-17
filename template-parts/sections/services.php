<?php
/**
 * Services section.
 *
 * @package StartupWebsite
 */

if (! defined('ABSPATH')) {
    exit;
}

$services = array(
    array(
        'icon' => 'fas fa-code',
        'title' => 'eBook Publishing Services',
        'description' => 'End-to-end eBook publishing solutions including formatting, conversion, and distribution across major digital platforms.',
    ),
    array(
        'icon' => 'fas fa-cloud',
        'title' => 'Typesetting Services',
        'description' => 'High-quality typesetting services ensuring clean layouts, proper formatting, and visually appealing book designs.',
    ),
    array(
        'icon' => 'fas fa-palette',
        'title' => 'ePub3 Services',
        'description' => 'Advanced ePub3 conversion services with interactive elements, multimedia support, and accessibility compliance.',
    ),
    array(
        'icon' => 'fas fa-database',
        'title' => 'Accessibility Services',
        'description' => 'Comprehensive accessibility solutions to make your digital content compliant with global standards and usable for all readers.',
    ),
    array(
        'icon' => 'fas fa-chart-line',
        'title' => 'Editorial and Pre-press',
        'description' => 'Professional editing, proofreading, and pre-press services to ensure your content is polished and publication-ready.',
    ),
    array(
        'icon' => 'fas fa-laptop-code',
        'title' => 'Web Design',
        'description' => 'Custom web design services focused on modern layouts, responsive user experiences, and conversion-driven interfaces.',
    ),
);
?>
<section id="services" class="services section">
    <div class="container">
        <span class="section-label center">Our Services</span>
        <h2 class="section-title">What We Offer</h2>
        <p class="section-subtitle">
            Comprehensive technology solutions tailored to meet your unique business needs
            and drive digital transformation.
        </p>

        <div class="services-grid">
            <?php foreach ($services as $service) : ?>
                <div class="service-card">
                    <div class="service-icon"><i class="<?php echo esc_attr($service['icon']); ?>" aria-hidden="true"></i></div>
                    <h3 class="service-title"><?php echo esc_html($service['title']); ?></h3>
                    <p class="service-description"><?php echo esc_html($service['description']); ?></p>
                    <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="service-link">Learn More -&gt;</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
