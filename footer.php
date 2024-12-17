<?php
  $pulse_layout_type = get_option( 'pulse_layout' );
  if( !is_front_page() || $pulse_layout_type['front_layout']['type'] !== 'tiles' ) echo '</div>';
  echo ( !empty( $pulse_potm ) || !empty( $pulse_ctotm ) || !empty( $featured_events_arr ) ) ? '<footer id="site-footer" class="xlarge-padding small-small-padding no-margin-bottom relative">' : '<footer id="site-footer" class="xlarge-padding small-small-padding no-margin-bottom medium-margin-top relative">';
?>
  <div class="grid-container">
    <div class="grid-x grid-margin-x align-middle">
      <div class="cell small-12">
        <?php pulse_footer_nav(); ?>
      </div>
			<?php $blog_info = get_bloginfo( 'name' ); ?>
			<?php if ( ! empty( $blog_info ) ) : ?>
        <div class="small-12 medium-12 large-12 text-center cell">
          <p>
           All Rights Reserved | &#169; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> | <a href="<?php echo get_site_url() ?>/privacy-policy/" aria-current="page">Privacy Policy</a>
          </p>
        </div>
			<?php endif; ?>
    </div>
  </div>
</footer>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0G7CT912H9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-0G7CT912H9');
</script>
<?php wp_footer(); ?>
</body>

</html>