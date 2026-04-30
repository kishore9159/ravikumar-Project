import { useState, useEffect } from 'react'
import { FaBars, FaTimes } from 'react-icons/fa'
import './Navbar.css'

const Navbar = () => {
  const [isOpen, setIsOpen] = useState(false)
  const [isScrolled, setIsScrolled] = useState(false)
  const [isServicesOpen, setIsServicesOpen] = useState(false)

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
    setIsOpen((prev) => {
      const next = !prev
      if (!next) {
        setIsServicesOpen(false)
      }
      return next
    })
  }

  const closeMenu = () => {
    setIsOpen(false)
    setIsServicesOpen(false)
  }

  const handleServicesClick = (event) => {
    if (window.innerWidth <= 992) {
      event.preventDefault()
      setIsServicesOpen((prev) => !prev)
      return
    }

    closeMenu()
  }

  return (
    <nav className={`navbar ${isScrolled ? 'scrolled' : ''}`}>
      <div className="container navbar-container">
        <a href="#" className="logo">
          <img src="/logoo.png" alt="RIE - Rithie Innovative E-Services" className="logo-img" />
        </a>

        <ul className={`nav-menu ${isOpen ? 'active' : ''}`}>
          <li><a href="#home" onClick={closeMenu}>Home</a></li>
          <li><a href="#about" onClick={closeMenu}>About</a></li>
          <li className={`nav-item-has-submenu ${isServicesOpen ? 'open' : ''}`}>
            <a
              href="#services"
              onClick={handleServicesClick}
              aria-haspopup="true"
              aria-expanded={isServicesOpen}
            >
              Services
            </a>
            <ul className="nav-submenu" aria-label="Services submenu">
              {serviceLinks.map((service) => (
                <li key={service}>
                  <a href="#services" onClick={closeMenu}>{service}</a>
                </li>
              ))}
            </ul>
          </li>
          <li><a href="#team" onClick={closeMenu}>Team</a></li>
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
