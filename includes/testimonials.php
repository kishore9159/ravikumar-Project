<?php
$testimonials = [
    [
        'name' => 'Sarah Johnson',
        'position' => 'CEO, TechCorp Inc.',
        'image' => '👩‍💼',
        'rating' => 5,
        'text' => 'Working with RIE has been an absolute pleasure. Their team delivered our project ahead of schedule with exceptional quality. The attention to detail and professionalism exceeded our expectations.'
    ],
    [
        'name' => 'Michael Chen',
        'position' => 'Founder, StartupX',
        'image' => '👨‍💼',
        'rating' => 5,
        'text' => 'The team at RIE transformed our vision into reality. Their expertise in modern technologies and commitment to excellence made them the perfect partner for our digital transformation journey.'
    ],
    [
        'name' => 'Emily Rodriguez',
        'position' => 'CTO, InnovateTech',
        'image' => '👩‍💻',
        'rating' => 5,
        'text' => 'Outstanding service! The team went above and beyond to ensure our project was a success. Their technical expertise and responsive communication made the entire process seamless.'
    ],
    [
        'name' => 'David Kim',
        'position' => 'Product Manager, GlobalSoft',
        'image' => '👨‍🔬',
        'rating' => 5,
        'text' => 'I highly recommend TechStartup for anyone looking for reliable and innovative technology solutions. They delivered exactly what we needed and provided excellent post-launch support.'
    ]
];
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
            <button class="nav-btn prev-btn" onclick="changeTestimonial(-1)">
                <i class="fas fa-chevron-left"></i>
            </button>

            <div class="testimonial-card" id="testimonial-card">
                <i class="fas fa-quote-left quote-icon"></i>
                <p class="testimonial-text" id="testimonial-text"><?php echo htmlspecialchars($testimonials[0]['text']); ?></p>
                <div class="rating" id="testimonial-rating">
                    <?php for ($i = 0; $i < $testimonials[0]['rating']; $i++): ?>
                        <i class="fas fa-star star"></i>
                    <?php endfor; ?>
                </div>
                <div class="testimonial-author">
                    <span class="author-image" id="testimonial-image"><?php echo $testimonials[0]['image']; ?></span>
                    <div class="author-info">
                        <h4 class="author-name" id="testimonial-name"><?php echo htmlspecialchars($testimonials[0]['name']); ?></h4>
                        <p class="author-position" id="testimonial-position"><?php echo htmlspecialchars($testimonials[0]['position']); ?></p>
                    </div>
                </div>
            </div>

            <button class="nav-btn next-btn" onclick="changeTestimonial(1)">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>

        <div class="testimonial-dots" id="testimonial-dots">
            <?php foreach ($testimonials as $index => $testimonial): ?>
                <button class="dot <?php echo $index === 0 ? 'active' : ''; ?>" onclick="goToTestimonial(<?php echo $index; ?>)"></button>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
    const testimonials = <?php echo json_encode($testimonials); ?>;
    let currentIndex = 0;

    function changeTestimonial(direction) {
        currentIndex = (currentIndex + direction + testimonials.length) % testimonials.length;
        updateTestimonial();
    }

    function goToTestimonial(index) {
        currentIndex = index;
        updateTestimonial();
    }

    function updateTestimonial() {
        const t = testimonials[currentIndex];
        document.getElementById('testimonial-text').textContent = t.text;
        document.getElementById('testimonial-name').textContent = t.name;
        document.getElementById('testimonial-position').textContent = t.position;
        document.getElementById('testimonial-image').textContent = t.image;

        // Update rating stars
        const ratingEl = document.getElementById('testimonial-rating');
        ratingEl.innerHTML = '';
        for (let i = 0; i < t.rating; i++) {
            const star = document.createElement('i');
            star.className = 'fas fa-star star';
            ratingEl.appendChild(star);
        }

        // Update dots
        const dots = document.querySelectorAll('.testimonial-dots .dot');
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex);
        });
    }
</script>
