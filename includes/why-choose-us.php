<?php
$reasons = [
    [
        'icon' => 'fas fa-users',
        'title' => 'Expert Team',
        'description' => 'Our skilled professionals bring years of industry experience to every project.'
    ],
    [
        'icon' => 'fas fa-clock',
        'title' => 'On-Time Delivery',
        'description' => 'We understand deadlines and consistently deliver projects on schedule.'
    ],
    [
        'icon' => 'fas fa-award',
        'title' => 'Quality Assurance',
        'description' => 'Rigorous testing and quality checks ensure flawless deliverables.'
    ],
    [
        'icon' => 'fas fa-headset',
        'title' => '24/7 Support',
        'description' => 'Round-the-clock support to address your concerns anytime, anywhere.'
    ],
    [
        'icon' => 'fas fa-rocket',
        'title' => 'Fast Turnaround',
        'description' => 'Quick and efficient processes without compromising on quality.'
    ],
    [
        'icon' => 'fas fa-handshake',
        'title' => 'Client Focused',
        'description' => 'Your success is our priority. We tailor solutions to your specific needs.'
    ]
];
?>
<section class="why-choose-us section">
    <div class="container">
        <span class="section-label center">Why Choose Us</span>
        <h2 class="section-title">What Makes Us Stand Out</h2>
        <p class="section-subtitle">
            We combine expertise, innovation, and dedication to deliver exceptional results
            that exceed expectations.
        </p>

        <div class="reasons-grid">
            <?php foreach ($reasons as $reason): ?>
                <div class="reason-card">
                    <div class="reason-icon"><i class="<?php echo $reason['icon']; ?>"></i></div>
                    <div class="reason-content">
                        <h3 class="reason-title"><?php echo htmlspecialchars($reason['title']); ?></h3>
                        <p class="reason-description"><?php echo htmlspecialchars($reason['description']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="cta-banner">
            <div class="cta-content">
                <h3>Ready to Start Your Project?</h3>
                <p>Let's discuss how we can help transform your business.</p>
            </div>
            <a href="#contact" class="btn btn-primary">Get Free Quote</a>
        </div>
    </div>
</section>
