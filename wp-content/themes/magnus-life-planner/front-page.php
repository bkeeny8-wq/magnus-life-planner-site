<?php
/**
 * Front page template for Magnus Life Planner.
 *
 * @package Magnus_Life_Planner
 */

$home_url    = esc_url( home_url( '/' ) );
$privacy_url = esc_url( home_url( '/privacy-policy/' ) );
$terms_url   = esc_url( home_url( '/terms-of-service/' ) );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Magnus is a personal planning app for iPhone and iPad that helps you navigate your day before it starts." />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <header class="site-header">
    <a class="brand" href="#top" aria-label="Magnus home">
      <?php magnus_life_planner_logo_img( 'dark', 'brand-logo brand-logo--mark', 'mark' ); ?>
    </a>

    <nav class="nav-links" aria-label="Main navigation">
      <a href="#features">Features</a>
      <a href="#how-it-works">How it works</a>
      <a href="<?php echo $privacy_url; ?>">Privacy Policy</a>
      <a href="<?php echo $terms_url; ?>">Terms of Service</a>
      <a class="nav-cta" href="mailto:bkeeny8@gmail.com?subject=Magnus%20beta%20access">Beta Access</a>
    </nav>
  </header>

  <main id="top">
    <section class="hero section-dark">
      <div class="map-lines" aria-hidden="true"></div>
      <div class="hero-inner">
        <div class="hero-copy">
          <p class="eyebrow">Life planning, with direction</p>
          <h1>Navigate your day before it starts.</h1>
          <div class="gold-rule"></div>
          <p class="hero-subtitle">
            Magnus brings your goals, habits, meals, workouts, schedule, and routines into one calm view — so you know what matters before the day starts moving.
          </p>
          <div class="hero-actions">
            <a class="button button-gold" href="mailto:bkeeny8@gmail.com?subject=Magnus%20beta%20access">Request beta access</a>
            <a class="button button-outline" href="#features">Explore features</a>
          </div>
          <p class="hero-note"><span aria-hidden="true">⚓</span> Currently in beta · iOS · TestFlight</p>
        </div>

        <div class="hero-logo-wrap" aria-label="Magnus logo">
          <div class="hero-logo-glow" aria-hidden="true"></div>
          <?php magnus_life_planner_logo_img( 'dark', 'hero-logo brand-logo--full', 'full' ); ?>
        </div>
      </div>
    </section>

    <section class="features-band" id="features">
      <div class="section-heading">
        <p class="eyebrow eyebrow-dark">Built for real life</p>
        <h2>Everything you need. Nothing you don’t.</h2>
      </div>

      <div class="feature-grid">
        <article class="feature">
          <div class="feature-icon">□</div>
          <h3>Today & Calendar</h3>
          <p>See your schedule, weather, and priorities in one simple daily view.</p>
        </article>

        <article class="feature">
          <div class="feature-icon">◎</div>
          <h3>Habits & Goals</h3>
          <p>Track the routines that move your life forward without making your day heavier.</p>
        </article>

        <article class="feature">
          <div class="feature-icon">♨</div>
          <h3>Meals</h3>
          <p>Plan meals, prep your week, and keep food decisions from becoming daily friction.</p>
        </article>

        <article class="feature">
          <div class="feature-icon">▬</div>
          <h3>Workouts</h3>
          <p>Draw a workout card, follow the plan, log your sets, and track progress.</p>
        </article>

        <article class="feature">
          <div class="feature-icon">♡</div>
          <h3>Readiness</h3>
          <p>Use sleep and recovery context to decide whether to push, maintain, or go lighter.</p>
        </article>

        <article class="feature">
          <div class="feature-icon">☷</div>
          <h3>Household-Ready</h3>
          <p>Built for shared routines, household planning, and smarter reminders over time.</p>
        </article>
      </div>
    </section>

    <section class="quote-band section-dark">
      <div class="lighthouse" aria-hidden="true"></div>
      <div class="quote-content">
        <h2>Less chaos. More direction.</h2>
        <div class="gold-rule centered"></div>
        <p>Magnus is designed to help you move through your day with clarity, focus, and purpose.</p>
      </div>
    </section>

    <section class="how-section" id="how-it-works">
      <div class="how-inner">
        <div class="how-copy">
          <p class="eyebrow eyebrow-dark">How it works</p>
          <h2>Plan your week in one pass.</h2>

          <div class="steps">
            <div class="step">
              <span>1</span>
              <div>
                <h3>Build your weekly plan</h3>
                <p>Sync your calendar and block in what matters.</p>
              </div>
            </div>

            <div class="step">
              <span>2</span>
              <div>
                <h3>Add the habits, meals, and workouts</h3>
                <p>Create routines you can actually stick to.</p>
              </div>
            </div>

            <div class="step">
              <span>3</span>
              <div>
                <h3>Wake up to a clear daily briefing</h3>
                <p>Know what’s next so you can start with confidence.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="phone-mock">
          <div class="phone-notch"></div>
          <div class="phone-screen">
            <h3>Good morning, Magnus.</h3>
            <p class="phone-muted">Here’s your plan for today.</p>

            <div class="briefing-row">
              <span>☼</span>
              <div><strong>72° Mostly Sunny</strong></div>
              <time>7:02 AM</time>
            </div>

            <div class="briefing-row">
              <span>□</span>
              <div>Team sync</div>
              <time>9:30 AM</time>
            </div>

            <div class="briefing-row">
              <span>▬</span>
              <div>Upper body workout</div>
              <time>45 min</time>
            </div>

            <div class="briefing-row">
              <span>♨</span>
              <div>Grilled chicken & rice bowl</div>
              <time>Lunch</time>
            </div>

            <div class="briefing-row">
              <span>◎</span>
              <div>2 habits due before noon</div>
              <time></time>
            </div>

            <div class="briefing-row">
              <span>☔</span>
              <div><strong>Rain after 2 PM</strong><br><small>Bring a jacket</small></div>
              <time></time>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="cta-band">
      <div class="cta-mark" aria-hidden="true">
        <?php magnus_life_planner_logo_img( 'dark', 'cta-logo brand-logo--mark', 'mark' ); ?>
      </div>
      <div>
        <h2>Be among the first to use Magnus.</h2>
        <p>Magnus is currently in beta on TestFlight. Request access and help shape the first release.</p>
      </div>
      <a class="button button-navy" href="mailto:bkeeny8@gmail.com?subject=Magnus%20beta%20access">Request beta access</a>
    </section>
  </main>

  <footer class="site-footer">
    <div class="footer-brand">
      <a class="brand" href="#top">
        <?php magnus_life_planner_logo_img( 'dark', 'brand-logo brand-logo--full', 'full' ); ?>
      </a>
      <p>Navigate your day before it starts. A personal planning app for iPhone and iPad.</p>
    </div>

    <div class="footer-column">
      <h4>Product</h4>
      <a href="#features">Features</a>
      <a href="#how-it-works">How it works</a>
    </div>

    <div class="footer-column">
      <h4>Legal</h4>
      <a href="<?php echo $privacy_url; ?>">Privacy Policy</a>
      <a href="<?php echo $terms_url; ?>">Terms of Service</a>
    </div>

    <div class="footer-column">
      <h4>Contact</h4>
      <a href="mailto:bkeeny8@gmail.com">Contact Support</a>
      <a href="mailto:bkeeny8@gmail.com">bkeeny8@gmail.com</a>
    </div>

    <div class="footer-bottom">© <?php echo esc_html( gmdate( 'Y' ) ); ?> Magnus Life Planner. All rights reserved.</div>
  </footer>

<?php wp_footer(); ?>
</body>
</html>
