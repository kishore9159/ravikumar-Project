<?php
/**
 * Testimonials section.
 *
 * @package StartupWebsite
 */

if (! defined('ABSPATH')) {
    exit;
}

$testimonials = array(
    array(
        'name' => 'Sarah Johnson',
        'position' => 'CEO, TechCorp Inc.',
        'image' => 'Client 1',
        'rating' => 5,
        'text' => 'Working with RIE has been an absolute pleasure. Their team delivered our project ahead of schedule with exceptional quality. The attention to detail and professionalism exceeded our expectations.',
    ),
    array(
        'name' => 'Michael Chen',
        'position' => 'Founder, StartupX',
        'image' => 'Client 2',
        'rating' => 5,
        'text' => 'The team at RIE transformed our vision into reality. Their expertise in modern technologies and commitment to excellence made them the perfect partner for our digital transformation journey.',
    ),
    array(
        'name' => 'Emily Rodriguez',
        'position' => 'CTO, InnovateTech',
        'image' => 'Client 3',
        'rating' => 5,
        'text' => 'Outstanding service! The team went above and beyond to ensure our project was a success. Their technical expertise and responsive communication made the entire process seamless.',
    ),
    array(
        'name' => 'David Kim',
        'position' => 'Product Manager, GlobalSoft',
        'image' => 'Client 4',
        'rating' => 5,
        'text' => 'I highly recommend TechStartup for anyone looking for reliable and innovative technology solutions. They delivered exactly what we needed and provided excellent post-launch support.',
    ),
);
?>
<section id="testimonials" class="testimonials section">
    <div class="container">
        <span class="section-label center">Testimonials</span>
        <h2 class="section-title">What Our Clients Say</h2>
        <p class="section-subtitle">
            Don't just take our word for it. Here's what our valued clients have to say about
            their experience working with us.
        </p>

        <div class="testimonials-wrapper">
            <button class="nav-btn prev-btn" onclick="changeTestimonial(-1)" type="button" aria-label="Previous testimonial">
                <i class="fas fa-chevron-left" aria-hidden="true"></i>
            </button>

            <div class="testimonial-card" id="testimonial-card">
                <i class="fas fa-quote-left quote-icon" aria-hidden="true"></i>
                <p class="testimonial-text" id="testimonial-text"><?php echo esc_html($testimonials[0]['text']); ?></p>
                <div class="rating" id="testimonial-rating">
                    <?php for ($i = 0; $i < $testimonials[0]['rating']; $i++) : ?>
                        <i class="fas fa-star star" aria-hidden="true"></i>
                    <?php endfor; ?>
                </div>
                <div class="testimonial-author">
                    <span class="author-image" id="testimonial-image"><?php echo esc_html($testimonials[0]['image']); ?></span>
                    <div class="author-info">
                        <h4 class="author-name" id="testimonial-name"><?php echo esc_html($testimonials[0]['name']); ?></h4>
                        <p class="author-position" id="testimonial-position"><?php echo esc_html($testimonials[0]['position']); ?></p>
                    </div>
                </div>
            </div>

            <button class="nav-btn next-btn" onclick="changeTestimonial(1)" type="button" aria-label="Next testimonial">
                <i class="fas fa-chevron-right" aria-hidden="true"></i>
            </button>
        </div>

        <div class="testimonial-dots" id="testimonial-dots">
            <?php foreach ($testimonials as $index => $testimonial) : ?>
                <button class="dot <?php echo 0 === $index ? 'active' : ''; ?>" onclick="goToTestimonial(<?php echo esc_attr($index); ?>)" type="button" aria-label="Go to testimonial <?php echo esc_attr($index + 1); ?>"></button>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<script>
    window.rieTestimonials = <?php echo wp_json_encode($testimonials); ?>;
</script>
