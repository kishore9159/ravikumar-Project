import { FaFacebookF, FaTwitter, FaLinkedinIn, FaInstagram, FaWhatsapp, FaArrowUp } from 'react-icons/fa'
import './Footer.css'

const Footer = () => {
  const scrollToTop = () => {
    window.scrollTo({ top: 0, behavior: 'auto' })
  }

  return (
    <footer className="footer">
      <div className="container">
        <div className="footer-content">
          <div className="footer-brand">
            <a href="#" className="footer-logo">
              <img src="/logo.png" alt="RIE - The Digital Technocrats" className="footer-logo-img" />
            </a>
            <p className="footer-description">
              RIE - The Digital Technocrats provides cutting-edge digital solutions and professional services to help 
              businesses thrive in the modern digital landscape.
            </p>
            <div className="social-links">
              <a href="#" className="social-link"><FaFacebookF /></a>
              <a href="#" className="social-link"><FaTwitter /></a>
              <a href="#" className="social-link"><FaLinkedinIn /></a>
              <a href="#" className="social-link"><FaInstagram /></a>
              <a href="#" className="social-link"><FaWhatsapp /></a>
            </div>
          </div>

          <div className="footer-links">
            <h4 className="footer-title">Quick Links</h4>
            <ul>
              <li><a href="#home">Home</a></li>
              <li><a href="#about">About Us</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div>

          <div className="footer-links">
            <h4 className="footer-title">Our Services</h4>
            <ul>
              <li><a href="#services">eBook Publishing Services</a></li>
              <li><a href="#services">Typesetting Services</a></li>
              <li><a href="#services">ePub3 Services</a></li>
              <li><a href="#services">Accessibility Services</a></li>
              <li><a href="#services">Editorial and Pre-press</a></li>
            </ul>
          </div>

          <div className="footer-newsletter">
            <h4 className="footer-title">Newsletter</h4>
            <p>Subscribe to our newsletter for updates and insights.</p>
            <form className="newsletter-form">
              <input type="email" placeholder="Enter your email" />
              <button type="submit" className="btn btn-primary">Subscribe</button>
            </form>
          </div>
        </div>

        <div className="footer-bottom">
          <p>&copy; 2026 RIE - The Digital Technocrats. All Rights Reserved.</p>
          <div className="footer-bottom-links">
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Service</a>
            <a href="#">Sitemap</a>
          </div>
        </div>
      </div>

      <button className="scroll-top" onClick={scrollToTop}>
        <FaArrowUp />
      </button>
    </footer>
  )
}

export default Footer
