<?php if ( is_active_sidebar( 'footer-upper-widget-1' ) ) : ?>
<div class="section sectionBox siteContent_after">
		<div class="row ">
				<div class="col-md-12 ">
				<?php dynamic_sidebar( 'footer-upper-widget-1' ); ?>
				</div>
		</div>
</div>
<?php endif; ?>

<?php do_action('lightning_footer_before'); ?>

<footer class="section siteFooter">
    <div class="footerMenu">
       <div class="container">
            <?php wp_nav_menu( array(
                'theme_location'    => 'Footer',
                'container'         => 'nav',
                'items_wrap'        => '<ul id="%1$s" class="%2$s nav">%3$s</ul>',
                'fallback_cb'       => '',
                'depth'             => 1
            ) ); ?>
        </div>
    </div>
    <div class="sectionBox copySection text-center">
          <p>Copyright &copy; Rainbow International Language School <br class="noPC">All Rights Reserved.</p>
    </div>
</footer>
<?php do_action('lightning_footer_after'); ?>
<?php wp_footer();?>
</body>
</html>
