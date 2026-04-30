import { FaCheckCircle } from 'react-icons/fa'
import './About.css'

const About = () => {
  const features = [
    'Expert team with 10+ years experience',
    'Quality-driven approach to every project',
    'On-time delivery guaranteed',
    'Dedicated support team available 24/7',
    'Cost-effective solutions',
    'Cutting-edge technology stack'
  ]

  return (
    <section id="about" className="about section">
      <div className="container about-container">
        <div className="about-image">
          <div className="about-image-wrapper">
            <div className="about-visual">
              <div className="visual-grid">
                <div className="grid-item item-1">
                  <span className="grid-icon">🎯</span>
                  <span className="grid-label">Mission Driven</span>
                </div>
                <div className="grid-item item-2">
                  <span className="grid-icon">💼</span>
                  <span className="grid-label">Professional</span>
                </div>
                <div className="grid-item item-3">
                  <span className="grid-icon">🌟</span>
                  <span className="grid-label">Excellence</span>
                </div>
                <div className="grid-item item-4">
                  <span className="grid-icon">🤝</span>
                  <span className="grid-label">Partnership</span>
                </div>
              </div>
            </div>
            <div className="experience-badge">
              <span className="exp-number">10+</span>
              <span className="exp-text">Years of Experience</span>
            </div>
          </div>
        </div>

        <div className="about-content">
          <span className="section-label">About Us</span>
          <h2 className="about-title">We Are Your One-Stop Solution for All Digital Services</h2>
          <p className="about-description">
            RIE - Rithie Innovative E-Services is a leading technology company providing comprehensive digital solutions, 
            professional services, and expert consulting to businesses worldwide. Using our 
            state-of-the-art infrastructure combined with global experience and technology 
            expertise, we define, plan, and deliver a complete range of services.
          </p>
          <p className="about-description">
            Our expansion has been both organic and rapid, in terms of scale and the services 
            we offer to our customers. We have increased our team size and production capacity 
            in response to the growing demand for our services.
          </p>
          
          <div className="about-features">
            {features.map((feature, index) => (
              <div key={index} className="feature-item">
                <FaCheckCircle className="feature-icon" />
                <span>{feature}</span>
              </div>
            ))}
          </div>

          <a href="#contact" className="btn btn-primary">Get in Touch</a>
        </div>
      </div>
    </section>
  )
}

export default About
