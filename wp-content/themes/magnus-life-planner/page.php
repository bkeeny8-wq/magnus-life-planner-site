<?php
/**
 * Page template for legal and content pages (Daylight identity).
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
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'magnus-page' ); ?>>
<?php wp_body_open(); ?>

  <header class="site-header site-header-page">
    <a class="brand" href="<?php echo $home_url; ?>" aria-label="Magnus home"><?php magnus_life_planner_brand(); ?></a>
    <nav class="nav-links" aria-label="Main navigation">
      <a href="<?php echo esc_url( $home_url . '#features' ); ?>">Features</a>
      <a href="<?php echo esc_url( $home_url . '#how-it-works' ); ?>">How it works</a>
      <a href="<?php echo $privacy_url; ?>">Privacy</a>
      <a href="<?php echo $terms_url; ?>">Terms</a>
      <a class="nav-cta" href="mailto:bkeeny8@gmail.com?subject=Magnus%20beta%20access">Get early access</a>
    </nav>
  </header>

  <main class="page-shell" id="top">
    <?php
    while ( have_posts() ) :
      the_post();
      ?>
      <article <?php post_class( 'page-content' ); ?>>
        <p class="eyebrow">Magnus</p>
        <h1><?php the_title(); ?></h1>
        <div class="rule"></div>
        <div class="page-body">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; ?>
  </main>

  <footer class="site-footer">
    <div class="footer-brand">
      <a class="brand" href="<?php echo $home_url; ?>"><?php magnus_life_planner_brand(); ?></a>
      <p>One calm view of your whole day. A personal planner for iPhone and iPad.</p>
    </div>
    <div class="footer-col">
      <h4>Product</h4>
      <a href="<?php echo esc_url( $home_url . '#features' ); ?>">Features</a>
      <a href="<?php echo esc_url( $home_url . '#how-it-works' ); ?>">How it works</a>
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
