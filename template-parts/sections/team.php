<?php
/**
 * Team section.
 *
 * @package StartupWebsite
 */

if (! defined('ABSPATH')) {
    exit;
}

$team_members = array(
    array(
        'name' => 'Ravi K',
        'role' => 'CEO & Founder',
        'initials' => 'AD',
        'tone' => 'tone-1',
    ),
    array(
        'name' => 'Priyanka M.R',
        'role' => 'Sr. Production Executive - Operations',
        'initials' => 'BR',
        'tone' => 'tone-2',
    ),
    array(
        'name' => 'Aarthi R',
        'role' => 'Junior Production Executive',
        'initials' => 'SR',
        'tone' => 'tone-3',
    ),
    array(
        'name' => 'Sharmila K',
        'role' => 'Junior Production Executive',
        'initials' => 'JJ',
        'tone' => 'tone-4',
    ),
    array(
        'name' => 'Kishore T',
        'role' => 'Web Disigner',
        'initials' => 'RD',
        'tone' => 'tone-5',
    ),
);
?>
<section id="team" class="team section">
    <div class="container">
        <span class="section-label center">Our Team</span>
        <h2 class="section-title">Team Members</h2>
        <p class="section-subtitle">
            The leadership team behind our delivery excellence and long-term client relationships.
        </p>

        <div class="team-grid">
            <?php foreach ($team_members as $member) : ?>
                <article class="team-card">
                    <div class="team-photo <?php echo esc_attr($member['tone']); ?>" aria-hidden="true">
                        <span class="team-initials"><?php echo esc_html($member['initials']); ?></span>
                    </div>
                    <div class="team-info">
                        <h3 class="team-name"><?php echo esc_html($member['name']); ?></h3>
                        <p class="team-role"><?php echo esc_html($member['role']); ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
