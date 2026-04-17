import './Team.css'

const Team = () => {
  const members = [
    {
      name: 'RAVI KUMAR',
      role: 'President',
      initials: 'AD',
      tone: 'tone-1'
    },
    {
      name: 'Barathi Rajagopalan',
      role: 'Vice President - Client Success',
      initials: 'BR',
      tone: 'tone-2'
    },
    {
      name: 'Suresh R',
      role: 'General Manager - Operations',
      initials: 'SR',
      tone: 'tone-3'
    },
    {
      name: 'Jacob Francis J',
      role: 'Sr. Manager - Finance & Accounts',
      initials: 'JJ',
      tone: 'tone-4'
    },
    {
      name: 'KISHORE',
      role: 'WEB-DISIGNER',
      initials: 'RD',
      tone: 'tone-5'
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
              <div className={`team-photo ${member.tone}`} aria-hidden="true">
                <span className="team-initials">{member.initials}</span>
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
