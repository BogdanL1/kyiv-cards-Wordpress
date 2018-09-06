<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kyiv-cards
 */

?>

		<footer>
			<div class="footer-line">
					<a href="#" class="a-f-logo-block">
					<div class="f-logo-block">
						<img src="<?php bloginfo( 'template_url' ); ?>/img/logo_header.png" alt="logo" class="logo_img">
						<div class="f-title">
							<h1><?php bloginfo('name'); ?> <?php wp_title(); ?></h1>
						</div>
					</div>
					</a>
					<?php
						if ( function_exists('dynamic_sidebar') )
							dynamic_sidebar('widget-footer1');
					?>
					<?php
						if ( function_exists('dynamic_sidebar') )
							dynamic_sidebar('widget-footer2');
					?>
					<a href="#" class="f-a-order-samples">
					<div class="f-order-samples">
						<img src="<?php bloginfo( 'template_url' ); ?>/img/A4.png" alt="">
						<h1>Заказать образцы продукции</h1>
					</div>
					</a>
					<div class="f-order-block">
						<a href="#">
						<div class="f-call-me">
							<img src="<?php bloginfo( 'template_url' ); ?>/img/phone.png" alt="">
							<h3>Перезвонить мне</h3>
						</div>
						</a>
						<a href="#">
						<div class="f-order">
							<img src="<?php bloginfo( 'template_url' ); ?>/img/basket.png" alt="">
							<h3>Заказать</h3>
						</div>
						</a>
					</div>
					<?php
						if ( function_exists('dynamic_sidebar') )
							dynamic_sidebar('widget-footer3');
					?>
			</div>
			<h3 class="text-bottom">© Киевский Печатный Цех, 2013 - 2018 </h3>
		</footer>

		<?php wp_footer(); ?>
</body>
</html>
