import { FaArrowRight, FaPlay } from 'react-icons/fa'
import './Hero.css'

const Hero = () => {
  return (
    <section id="home" className="hero">
      <div className="hero-bg">
        <div className="hero-shape hero-shape-1"></div>
        <div className="hero-shape hero-shape-2"></div>
      </div>
      
      <div className="container hero-container">
        <div className="hero-content">
          <span className="hero-badge">🚀 Welcome to the Future</span>
          <h1 className="hero-title">
            Innovative <span className="highlight">Digital</span> Solutions for Your Business
          </h1>
          <p className="hero-description">
            RIE - The Digital Technocrats provides cutting-edge digital solutions, professional services, and expert consulting 
            to help your business grow and succeed in the modern digital landscape.
          </p>
          <div className="hero-buttons">
            <a href="#services" className="btn btn-primary">
              Our Services <FaArrowRight className="btn-icon" />
            </a>
            <a href="#about" className="btn btn-secondary">
              <FaPlay className="play-icon" /> Learn More
            </a>
          </div>
          <div className="hero-stats">
            <div className="stat">
              <span className="stat-number">10+</span>
              <span className="stat-label">Years Experience</span>
            </div>
            <div className="stat">
              <span className="stat-number">500+</span>
              <span className="stat-label">Projects Completed</span>
            </div>
            <div className="stat">
              <span className="stat-number">200+</span>
              <span className="stat-label">Happy Clients</span>
            </div>
          </div>
        </div>
        
        <div className="hero-image">
          <div className="hero-image-wrapper">
            <div className="hero-main-visual">
              <div className="visual-circle"></div>
              <div className="visual-bars">
                <div className="bar bar-1"></div>
                <div className="bar bar-2"></div>
                <div className="bar bar-3"></div>
                <div className="bar bar-4"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  )
}

export default Hero
