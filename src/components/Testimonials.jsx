import { useState } from 'react'
import { FaQuoteLeft, FaChevronLeft, FaChevronRight, FaStar } from 'react-icons/fa'
import './Testimonials.css'

const Testimonials = () => {
  const [currentIndex, setCurrentIndex] = useState(0)

  const testimonials = [
    {
      name: 'Sarah Johnson',
      position: 'CEO, TechCorp Inc.',
      image: '👩‍💼',
      rating: 5,
      text: 'Working with RIE has been an absolute pleasure. Their team delivered our project ahead of schedule with exceptional quality. The attention to detail and professionalism exceeded our expectations.'
    },
    {
      name: 'Michael Chen',
      position: 'Founder, StartupX',
      image: '👨‍💼',
      rating: 5,
      text: 'The team at RIE transformed our vision into reality. Their expertise in modern technologies and commitment to excellence made them the perfect partner for our digital transformation journey.'
    },
    {
      name: 'Emily Rodriguez',
      position: 'CTO, InnovateTech',
      image: '👩‍💻',
      rating: 5,
      text: 'Outstanding service! The team went above and beyond to ensure our project was a success. Their technical expertise and responsive communication made the entire process seamless.'
    },
    {
      name: 'David Kim',
      position: 'Product Manager, GlobalSoft',
      image: '👨‍🔬',
      rating: 5,
      text: 'I highly recommend TechStartup for anyone looking for reliable and innovative technology solutions. They delivered exactly what we needed and provided excellent post-launch support.'
    }
  ]

  const nextTestimonial = () => {
    setCurrentIndex((prev) => (prev + 1) % testimonials.length)
  }

  const prevTestimonial = () => {
    setCurrentIndex((prev) => (prev - 1 + testimonials.length) % testimonials.length)
  }

  return (
    <section id="testimonials" className="testimonials section">
      <div className="container">
        <span className="section-label center">Testimonials</span>
        <h2 className="section-title">What Our Clients Say</h2>
        <p className="section-subtitle">
          Don't just take our word for it. Here's what our valued clients have to say about 
          their experience working with us.
        </p>

        <div className="testimonials-wrapper">
          <button className="nav-btn prev-btn" onClick={prevTestimonial}>
            <FaChevronLeft />
          </button>

          <div className="testimonial-card">
            <FaQuoteLeft className="quote-icon" />
            <p className="testimonial-text">{testimonials[currentIndex].text}</p>
            <div className="rating">
              {[...Array(testimonials[currentIndex].rating)].map((_, i) => (
                <FaStar key={i} className="star" />
              ))}
            </div>
            <div className="testimonial-author">
              <span className="author-image">{testimonials[currentIndex].image}</span>
              <div className="author-info">
                <h4 className="author-name">{testimonials[currentIndex].name}</h4>
                <p className="author-position">{testimonials[currentIndex].position}</p>
              </div>
            </div>
          </div>

          <button className="nav-btn next-btn" onClick={nextTestimonial}>
            <FaChevronRight />
          </button>
        </div>

        <div className="testimonial-dots">
          {testimonials.map((_, index) => (
            <button
              key={index}
              className={`dot ${index === currentIndex ? 'active' : ''}`}
              onClick={() => setCurrentIndex(index)}
            />
          ))}
        </div>
      </div>
    </section>
  )
}

export default Testimonials
