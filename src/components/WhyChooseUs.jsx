import { FaUsers, FaClock, FaAward, FaHeadset, FaRocket, FaHandshake } from 'react-icons/fa'
import './WhyChooseUs.css'

const WhyChooseUs = () => {
  const reasons = [
    {
      icon: <FaUsers />,
      title: 'Expert Team',
      description: 'Our skilled professionals bring years of industry experience to every project.'
    },
    {
      icon: <FaClock />,
      title: 'On-Time Delivery',
      description: 'We understand deadlines and consistently deliver projects on schedule.'
    },
    {
      icon: <FaAward />,
      title: 'Quality Assurance',
      description: 'Rigorous testing and quality checks ensure flawless deliverables.'
    },
    {
      icon: <FaHeadset />,
      title: '24/7 Support',
      description: 'Round-the-clock support to address your concerns anytime, anywhere.'
    },
    {
      icon: <FaRocket />,
      title: 'Fast Turnaround',
      description: 'Quick and efficient processes without compromising on quality.'
    },
    {
      icon: <FaHandshake />,
      title: 'Client Focused',
      description: 'Your success is our priority. We tailor solutions to your specific needs.'
    }
  ]

  return (
    <section className="why-choose-us section">
      <div className="container">
        <span className="section-label center">Why Choose Us</span>
        <h2 className="section-title">What Makes Us Stand Out</h2>
        <p className="section-subtitle">
          We combine expertise, innovation, and dedication to deliver exceptional results 
          that exceed expectations.
        </p>

        <div className="reasons-grid">
          {reasons.map((reason, index) => (
            <div key={index} className="reason-card">
              <div className="reason-icon">{reason.icon}</div>
              <div className="reason-content">
                <h3 className="reason-title">{reason.title}</h3>
                <p className="reason-description">{reason.description}</p>
              </div>
            </div>
          ))}
        </div>

        <div className="cta-banner">
          <div className="cta-content">
            <h3>Ready to Start Your Project?</h3>
            <p>Let's discuss how we can help transform your business.</p>
          </div>
          <a href="#contact" className="btn btn-primary">Get Free Quote</a>
        </div>
      </div>
    </section>
  )
}

export default WhyChooseUs
