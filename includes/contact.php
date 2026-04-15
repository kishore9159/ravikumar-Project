<?php
$contactInfo = [
    [
        'icon' => 'fas fa-map-marker-alt',
        'title' => 'Our Location',
        'details' => ['Erode, Tamil Nadu', 'India']
    ],
    [
        'icon' => 'fas fa-phone',
        'title' => 'Phone Number',
        'details' => ['+91 9787827527', '+91 9159379192']
    ],
    [
        'icon' => 'fas fa-envelope',
        'title' => 'Email Address',
        'details' => ['kishorekeerthana0742@gmail.com', 'support@rie.com']
    ],
    [
        'icon' => 'fas fa-clock',
        'title' => 'Working Hours',
        'details' => ['Mon - Fri: 9:00 AM - 6:00 PM', 'Sat: 10:00 AM - 4:00 PM']
    ]
];

// Handle form submission
$formSubmitted = false;
$formError = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name && $email && $subject && $message) {
        // Format message for WhatsApp
        $whatsappMessage = "*New Contact Form Submission*\n\n"
            . "*Name:* $name\n"
            . "*Email:* $email\n"
            . "*Phone:* $phone\n"
            . "*Subject:* $subject\n"
            . "*Message:* $message";

        $whatsappUrl = "https://wa.me/919698536038?text=" . urlencode($whatsappMessage);
        $formSubmitted = true;

        // You can also send email here
        // mail('kishorekeerthana0742@gmail.com', "Contact: $subject", $message, "From: $email");
    } else {
        $formError = 'Please fill in all required fields.';
    }
}
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
                    <?php foreach ($contactInfo as $item): ?>
                        <div class="info-item">
                            <div class="info-icon"><i class="<?php echo $item['icon']; ?>"></i></div>
                            <div class="info-content">
                                <h4><?php echo htmlspecialchars($item['title']); ?></h4>
                                <?php foreach ($item['details'] as $detail): ?>
                                    <p><?php echo htmlspecialchars($detail); ?></p>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <form class="contact-form" method="POST" action="#contact" id="contactForm">
                <?php if ($formSubmitted): ?>
                    <div class="form-success">
                        <p>✅ Thank you for your message! We will get back to you soon.</p>
                    </div>
                    <script>window.open('<?php echo $whatsappUrl; ?>', '_blank');</script>
                <?php endif; ?>

                <?php if ($formError): ?>
                    <div class="form-error">
                        <p>❌ <?php echo htmlspecialchars($formError); ?></p>
                    </div>
                <?php endif; ?>

                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" placeholder="John Doe" required
                            value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="john@example.com" required
                            value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" />
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" placeholder="+91 98765 43210"
                            value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>" />
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" placeholder="How can we help?" required
                            value="<?php echo htmlspecialchars($_POST['subject'] ?? ''); ?>" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" placeholder="Tell us about your project..." rows="5" required><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
                </div>

                <button type="submit" name="contact_submit" class="btn btn-primary submit-btn">
                    <i class="fas fa-paper-plane btn-icon"></i> Send Message
                </button>
            </form>
        </div>
    </div>
</section>
