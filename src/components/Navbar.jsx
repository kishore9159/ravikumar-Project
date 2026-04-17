import { useState, useEffect } from 'react'
import { FaBars, FaTimes } from 'react-icons/fa'
import './Navbar.css'

const Navbar = () => {
  const [isOpen, setIsOpen] = useState(false)
  const [isScrolled, setIsScrolled] = useState(false)

  const serviceLinks = [
    'eBook Publishing Services',
    'Typesetting Services',
    'ePub3 Services',
    'Accessibility Services',
    'Editorial and Pre-press',
    'Web Design'
  ]

  useEffect(() => {
    const handleScroll = () => {
      setIsScrolled(window.scrollY > 50)
    }
    window.addEventListener('scroll', handleScroll)
    return () => window.removeEventListener('scroll', handleScroll)
  }, [])

  useEffect(() => {
    document.body.style.overflow = isOpen ? 'hidden' : ''
    return () => {
      document.body.style.overflow = ''
    }
  }, [isOpen])

  const toggleMenu = () => {
    setIsOpen(!isOpen)
  }

  const closeMenu = () => {
    setIsOpen(false)
  }

  return (
    <nav className={`navbar ${isScrolled ? 'scrolled' : ''}`}>
      <div className="container navbar-container">
        <a href="#" className="logo">
          <img src="/logo.png" alt="RIE - The Digital Technocrats" className="logo-img" />
        </a>

        <ul className={`nav-menu ${isOpen ? 'active' : ''}`}>
          <li><a href="#home" onClick={closeMenu}>Home</a></li>
          <li><a href="#about" onClick={closeMenu}>About</a></li>
          <li className="nav-item-has-submenu">
            <a href="#services" onClick={closeMenu} aria-haspopup="true">Services</a>
            <ul className="nav-submenu" aria-label="Services submenu">
              {serviceLinks.map((service) => (
                <li key={service}>
                  <a href="#services" onClick={closeMenu}>{service}</a>
                </li>
              ))}
            </ul>
          </li>
          <li><a href="#contact" onClick={closeMenu}>Contact</a></li>
        </ul>

        <a href="#contact" className="nav-cta btn btn-primary">Get Started</a>

        <div className={`hamburger ${isOpen ? 'active' : ''}`} onClick={toggleMenu}>
          {isOpen ? <FaTimes /> : <FaBars />}
        </div>
      </div>
    </nav>
  )
}

export default Navbar
