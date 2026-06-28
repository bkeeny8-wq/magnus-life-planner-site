<?php
/**
 * Front page template for Magnus Life Planner (Calm & Balanced identity).
 *
 * @package Magnus_Life_Planner
 */

$privacy_url = esc_url( home_url( '/privacy-policy/' ) );
$terms_url   = esc_url( home_url( '/terms-of-service/' ) );
$beta_link   = 'mailto:bkeeny8@gmail.com?subject=Magnus%20beta%20access';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Magnus is a personal planning app for iPhone and iPad that brings your day into one calm view." />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <header class="site-header">
    <a class="brand" href="#top" aria-label="Magnus home"><?php magnus_life_planner_brand(); ?></a>
    <nav class="nav-links" aria-label="Main navigation">
      <a href="#features">Features</a>
      <a href="#how-it-works">How it works</a>
      <a href="<?php echo $privacy_url; ?>">Privacy</a>
      <a href="<?php echo $terms_url; ?>">Terms</a>
      <a class="nav-cta" href="<?php echo esc_url( $beta_link ); ?>">Get early access</a>
    </nav>
  </header>

  <main id="top">
    <section class="hero">
      <svg class="hero-arc" viewBox="0 0 760 420" fill="none" aria-hidden="true">
        <path class="arc-path" d="M40 360 A340 340 0 0 1 720 360" stroke="#457B9D" stroke-opacity="0.55" stroke-width="2" fill="none"/>
        <circle cx="600" cy="120" r="6" fill="#FF8C42"/>
      </svg>
      <div class="hero-inner">
        <div>
          <p class="eyebrow">
            <svg width="15" height="15" viewBox="0 0 14 14" aria-hidden="true"><path d="M2 10 A5 5 0 0 1 12 10" stroke="#457B9D" stroke-width="1.6" fill="none" stroke-linecap="round"/></svg>
            Your day, in focus
          </p>
          <h1>See what matters before the day moves.</h1>
          <p class="hero-sub">Magnus brings your schedule, habits, meals, workouts, and home into one calm daily view &mdash; so you start the day knowing what counts.</p>
          <div class="hero-actions">
            <a class="button button-primary" href="<?php echo esc_url( $beta_link ); ?>">Get early access</a>
            <a class="button button-ghost" href="#how-it-works">See how it works</a>
          </div>
          <p class="hero-note">In beta · iOS · TestFlight</p>
        </div>

        <div class="today-card" aria-label="A preview of the Magnus daily view">
          <div class="today-head"><strong>Today</strong><time>6:58 AM</time></div>
          <p class="today-cap">Clear morning, lighter afternoon.</p>
          <div class="brow"><span class="bdot"></span><div>Team sync</div><div class="brt">9:30</div></div>
          <div class="brow"><span class="bdot warm"></span><div>Upper body · 45 min</div><div class="brt">planned</div></div>
          <div class="brow"><span class="bdot"></span><div>Grilled chicken bowl</div><div class="brt">lunch</div></div>
          <div class="brow is-muted"><span class="bdot"></span><div>2 habits before noon</div><div class="brt"></div></div>
        </div>
      </div>
    </section>

    <section class="section" id="features">
      <div class="section-heading">
        <p class="eyebrow">Built for real life</p>
        <h2>Everything you need, nothing you don&rsquo;t.</h2>
      </div>
      <div class="feature-grid">
        <article class="feature">
          <div class="feature-icon fi-blue"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><rect x="3" y="4" width="14" height="13" rx="2.5" stroke="currentColor" stroke-width="1.6"/><path d="M3 8h14M7 2v3M13 2v3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg></div>
          <h3>Today &amp; calendar</h3>
          <p>Your schedule, weather, and priorities in one simple daily view.</p>
        </article>
        <article class="feature">
          <div class="feature-icon fi-sage"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><circle cx="10" cy="10" r="6.5" stroke="currentColor" stroke-width="1.6"/><circle cx="10" cy="10" r="2.3" fill="currentColor"/></svg></div>
          <h3>Habits &amp; goals</h3>
          <p>Keep the routines that move your life forward, without a heavier day.</p>
        </article>
        <article class="feature">
          <div class="feature-icon fi-gold"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M5 3v6a2 2 0 002 2v6M5 3v3M7 3v3M14 3c-1.5 0-2 2-2 4s.5 3 2 3v7" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
          <h3>Meals</h3>
          <p>Plan meals, prep your week, and keep food off your daily to-do list.</p>
        </article>
        <article class="feature">
          <div class="feature-icon fi-coral"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M3 10h2M15 10h2M6 7h1.5M12.5 7h1.5M6 13h1.5M12.5 13h1.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/><rect x="7.5" y="6" width="5" height="8" rx="2" stroke="currentColor" stroke-width="1.6"/></svg></div>
          <h3>Workouts</h3>
          <p>Draw a workout, follow the plan, log your sets, and watch progress add up.</p>
        </article>
        <article class="feature">
          <div class="feature-icon fi-blue"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M3 11h3l2-5 3 8 2-4h4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
          <h3>Readiness</h3>
          <p>Use sleep and recovery to decide when to push, hold, or take it easy.</p>
        </article>
        <article class="feature">
          <div class="feature-icon fi-sage"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M4 16v-5l6-5 6 5v5" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/><path d="M8 16v-3h4v3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
          <h3>Shared home</h3>
          <p>Routines, chores, and a shopping list your whole household can share.</p>
        </article>
      </div>
    </section>

    <section class="band">
      <div class="band-inner">
        <h2>A calmer way to move through your day.</h2>
        <p>Magnus is built to help you start each day clear on what matters &mdash; and let everything else fade back until it does.</p>
      </div>
    </section>

    <section class="section" id="how-it-works">
      <div class="how-inner">
        <div class="how-copy">
          <p class="eyebrow" style="color:var(--muted)">How it works</p>
          <h2>Plan once. Wake up ready.</h2>
          <div class="steps">
            <div class="step"><div class="n">1</div><div><h3>Bring it together</h3><p>Connect your calendar and add what matters this week.</p></div></div>
            <div class="step"><div class="n">2</div><div><h3>Add your routines</h3><p>Habits, meals, and workouts you&rsquo;ll actually keep.</p></div></div>
            <div class="step"><div class="n">3</div><div><h3>Wake up to a clear day</h3><p>A simple morning briefing, so you start with focus.</p></div></div>
          </div>
        </div>
        <div class="phone">
          <div class="phone-screen">
            <div class="today-head"><strong>Good morning</strong><time>7:02 AM</time></div>
            <p class="today-cap">Here&rsquo;s your day.</p>
            <div class="brow"><span class="bdot"></span><div>72° mostly sunny</div><div class="brt">now</div></div>
            <div class="brow"><span class="bdot"></span><div>Team sync</div><div class="brt">9:30</div></div>
            <div class="brow"><span class="bdot warm"></span><div>Upper body workout</div><div class="brt">45 min</div></div>
            <div class="brow"><span class="bdot"></span><div>Grilled chicken bowl</div><div class="brt">lunch</div></div>
            <div class="brow is-muted"><span class="bdot"></span><div>2 habits before noon</div><div class="brt"></div></div>
          </div>
        </div>
      </div>
    </section>

    <section class="cta">
      <div class="cta-inner">
        <div>
          <h2>Be among the first to use Magnus.</h2>
          <p>Magnus is in beta on TestFlight. Request access and help shape the first release.</p>
        </div>
        <a class="button button-primary" href="<?php echo esc_url( $beta_link ); ?>">Get early access</a>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="footer-brand">
      <a class="brand" href="#top"><?php magnus_life_planner_brand(); ?></a>
      <p>One calm view of your whole day. A personal planner for iPhone and iPad.</p>
    </div>
    <div class="footer-col">
      <h4>Product</h4>
      <a href="#features">Features</a>
      <a href="#how-it-works">How it works</a>
    </div>
    <div class="footer-col">
      <h4>Legal</h4>
      <a href="<?php echo $privacy_url; ?>">Privacy</a>
      <a href="<?php echo $terms_url; ?>">Terms</a>
    </div>
    <div class="footer-col">
      <h4>Contact</h4>
      <a href="mailto:bkeeny8@gmail.com">Support</a>
      <a href="mailto:bkeeny8@gmail.com">bkeeny8@gmail.com</a>
    </div>
    <div class="footer-bottom">© <?php echo esc_html( gmdate( 'Y' ) ); ?> Magnus. All rights reserved.</div>
  </footer>

<?php wp_footer(); ?>
</body>
</html>
