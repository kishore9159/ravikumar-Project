<?php
/**
 * Contact section.
 *
 * @package StartupWebsite
 */

if (! defined('ABSPATH')) {
    exit;
}

$contact_info = array(
    array(
        'icon' => 'fas fa-map-marker-alt',
        'title' => 'Our Location',
        'details' => array('Erode, Tamil Nadu', 'India'),
    ),
    array(
        'icon' => 'fas fa-phone',
        'title' => 'Phone Number',
        'details' => array('+91 9787827527', '+91 9159379192'),
    ),
    array(
        'icon' => 'fas fa-envelope',
        'title' => 'Email Address',
        'details' => array('kishorekeerthana0742@gmail.com', 'support@rie.com'),
    ),
    array(
        'icon' => 'fas fa-clock',
        'title' => 'Working Hours',
        'details' => array('Mon - Fri: 9:00 AM - 6:00 PM', 'Sat: 10:00 AM - 4:00 PM'),
    ),
);
?>
<section id="contact" class="contact section">
    <div class="container">
        <span class="section-label center">Contact Us</span>
        <h2 class="section-title">Get In Touch</h2>
        <p class="section-subtitle">
            Have a project in mind? Let's discuss how we can help bring your ideas to life.
        </p>

        <div class="contact-container">
            <div class="contact-info">
                <h3 class="info-title">Contact Information</h3>
                <p class="info-description">
                    Fill out the form and our team will get back to you within 24 hours.
                </p>

                <div class="info-items">
                    <?php foreach ($contact_info as $item) : ?>
                        <div class="info-item">
                            <div class="info-icon"><i class="<?php echo esc_attr($item['icon']); ?>" aria-hidden="true"></i></div>
                            <div class="info-content">
                                <h4><?php echo esc_html($item['title']); ?></h4>
                                <?php foreach ($item['details'] as $detail) : ?>
                                    <p><?php echo esc_html($detail); ?></p>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <form class="contact-form" id="contact-form" method="post" action="#contact">
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" placeholder="John Doe" required />
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="john@example.com" required />
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" placeholder="+91 98765 43210" />
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" placeholder="How can we help?" required />
                    </div>
                </div>

                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" placeholder="Tell us about your project..." rows="5" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary submit-btn">
                    <i class="fas fa-paper-plane btn-icon" aria-hidden="true"></i> Send Message
                </button>
            </form>
        </div>
    </div>
</section>
