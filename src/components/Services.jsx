import { FaCode, FaCloud, FaPalette, FaDatabase, FaChartLine, FaLaptopCode } from 'react-icons/fa'
import './Services.css'

const Services = () => {
  const services = [
  {
    icon: <FaCode />,
    title: 'eBook Publishing Services',
    description: 'End-to-end eBook publishing solutions including formatting, conversion, and distribution across major digital platforms.'
  },
  {
    icon: <FaCloud />,
    title: 'Typesetting Services',
    description: 'High-quality typesetting services ensuring clean layouts, proper formatting, and visually appealing book designs.'
  },
  {
    icon: <FaPalette />,
    title: 'ePub3 Services',
    description: 'Advanced ePub3 conversion services with interactive elements, multimedia support, and accessibility compliance.'
  },
  {
    icon: <FaDatabase />,
    title: 'Accessibility Services',
    description: 'Comprehensive accessibility solutions to make your digital content compliant with global standards and usable for all readers.'
  },
  {
    icon: <FaChartLine />,
    title: 'Editorial and Pre-press',
    description: 'Professional editing, proofreading, and pre-press services to ensure your content is polished and publication-ready.'
  },
  {
    icon: <FaLaptopCode />,
    title: 'Web Design',
    description: 'Custom web design services focused on modern layouts, responsive user experiences, and conversion-driven interfaces.'
  }
]

  return (
    <section id="services" className="services section">
      <div className="container">
        <span className="section-label center">Our Services</span>
        <h2 className="section-title">What We Offer</h2>
        <p className="section-subtitle">
          Comprehensive technology solutions tailored to meet your unique business needs 
          and drive digital transformation.
        </p>

        <div className="services-grid">
          {services.map((service, index) => (
            <div key={index} className="service-card">
              <div className="service-icon">{service.icon}</div>
              <h3 className="service-title">{service.title}</h3>
              <p className="service-description">{service.description}</p>
              <a href="#contact" className="service-link">Learn More →</a>
            </div>
          ))}
        </div>
      </div>
    </section>
  )
}

export default Services
