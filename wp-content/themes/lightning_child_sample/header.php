<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
global $lightning_theme_options;
$lightning_theme_options = get_option( 'lightning_theme_options' );
?>
<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<?php do_action( 'lightning_header_before' ); ?>
<header class="navbar siteHeader">
	<?php do_action( 'lightning_header_prepend' ); ?>
	<div class="container siteHeadContainer">
		<div class="navbar-header">
			<h1 class="navbar-brand siteHeader_logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span>
			<?php lightning_print_headlogo(); ?>
			</span></a>
			</h1>
			<?php do_action( 'lightning_header_logo_after' ); ?>
			<?php
			$args  = array(
				'theme_location' => 'Header',
				'container'      => 'nav',
				'items_wrap'     => '<ul id="%1$s" class="%2$s nav gMenu">%3$s</ul>',
				'fallback_cb'    => '',
				'echo'           => false,
				'walker'         => new description_walker(),
			);
			$gMenu = wp_nav_menu( $args );
		?>
		</div>

		<?php
		if ( $gMenu ) {
			echo '<div id="gMenu_outer" class="gMenu_outer">';
			echo $gMenu;
			echo '</div>';
		}
		?>
    <div class="langBox">
		<?php echo do_shortcode( '[bogo]' ); ?>
    <span class="langBox__ttl">Other Languages:</span>
    <?php echo do_shortcode('[gtranslate]'); ?>
    </div>
		<div class="noSP headerOtherMenu">
			<nav>
				<ul>
					<li><a href="https://www.facebook.com/%E3%83%AC%E3%82%A4%E3%83%B3%E3%83%9C%E3%83%BC%E3%82%A4%E3%83%B3%E3%82%BF%E3%83%BC%E3%83%8A%E3%82%B7%E3%83%A7%E3%83%8A%E3%83%AB%E5%A4%96%E8%AA%9E%E5%AD%A6%E6%A0%A1-1468776563392909/" target="_blank"><i class="fab fa-facebook-square fa-3x"></i></a></li>
					<li><a href="https://www.instagram.com/rainbow_language_school" target="_blank"><i class="fab fa-instagram fa-3x"></i></a></li>
					<li class="item-contact forJP"><a href="/contact/"><span>お問い合わせ</span></a></li>
					<li class="item-contact forEN"><a href="/en/contact/"><span>Contact Us</span></a></li>
					<li class="item-tel forJP">レインボーインターナショナル外語学校<br><span><i class="fas fa-phone"></i> 0120-928-258</span></li>
					<li class="item-tel forEN">Rainbow International Language School<br><span><i class="fas fa-phone"></i> 0120-928-258</span></li>
				</ul>
			</nav>
		</div>
	</div>
	<?php do_action( 'lightning_header_append' ); ?>
</header>
<?php do_action( 'lightning_header_after' ); ?>
