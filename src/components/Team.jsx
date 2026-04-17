import './Team.css'

const Team = () => {
  const members = [
    {
      name: 'Ravi K',
      role: 'CEO & Founder',
      
      tone: 'tone-1',
      photo: '/ravik.jpeg'
    },
    {
      name: 'Priyanka M.R',
      role: 'Sr. Production Executive - Operations',
      tone: 'tone-2',
      photo: '/Priyanka.jpg'
    },
    {
      name: 'Aarthi R',
      role: 'Junior Production Executive',
      initials: 'RK',
      tone: 'tone-3'
    },
    {
      name: 'Sharmila K',
      role: 'Junior Production Executive',
      tone: 'tone-4',
      photo: '/Sharmila_photo.jpg'

    },
    {
      name: 'Kishore T',
      role: 'Web Developer',
     
      tone: 'tone-5',
      photo: '/kishore.jpg'
    }
  ]

  return (
    <section id="team" className="team section">
      <div className="container">
        <span className="section-label center">Our Team</span>
        <h2 className="section-title">Team Members</h2>
        <p className="section-subtitle">
          The leadership team behind our delivery excellence and long-term client relationships.
        </p>

        <div className="team-grid">
          {members.map((member) => (
            <article key={member.name} className="team-card">
              <div
                className={`team-photo ${member.tone}`}
                aria-hidden="true"
                style={
                  member.photo
                    ? {
                        backgroundImage: `url(${member.photo})`,
                        backgroundSize: 'cover',
                        backgroundPosition: 'center',
                        backgroundRepeat: 'no-repeat'
                      }
                    : undefined
                }
              >
                {!member.photo && <span className="team-initials">{member.initials}</span>}
              </div>
              <div className="team-info">
                <h3 className="team-name">{member.name}</h3>
                <p className="team-role">{member.role}</p>
              </div>
            </article>
          ))}
        </div>
      </div>
    </section>
  )
}

export default Team
