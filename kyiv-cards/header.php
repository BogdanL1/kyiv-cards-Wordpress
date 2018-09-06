<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content = " text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel ="stylesheet" type = "text/css" href="css/style.css" />
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800" rel="stylesheet">
  <title>Киевский печатный цех</title>  
  <?php wp_head(); ?>
</head>
<body>
		<header>
			<div class="header-inner">
				<div class="first-line">
					<a href="#">
					<div class="logo-block">
						<img src=" <?php bloginfo( 'template_url' ); ?>/img/logo_header.png" alt="logo" class="logo_img">
						<div class="title">
							<h1><?php bloginfo('name'); ?> <?php wp_title(); ?></h1>
						</div>
					</div>
					</a>
					<a href="#" class="a-order-samples">
					<div class="order-samples">
						<img src=" <?php bloginfo( 'template_url' ); ?>/img/A4.png" alt="">
						<h1>Заказать <br />образцы <br />продукции</h1>
					</div>
					</a>
					<div class="order-block">
						<a href="#">
						<div class="call-me">
							<img src=" <?php bloginfo( 'template_url' ); ?>/img/phone.png" alt="">
							<h3>Перезвонить мне</h3>
						</div>
						</a>
						<a href="#">
						<div class="order">
							<img src=" <?php bloginfo( 'template_url' ); ?>/img/basket.png" alt="">
							<h3>Заказать</h3>
						</div>
						</a>
					</div>
					<?php
						if ( function_exists('dynamic_sidebar') )
							dynamic_sidebar('widget-header');
					?>
				</div>

				<?php wp_nav_menu(array('theme_location' => 'top', 'container'       => 'nav')); ?>
			</div>
			
			<div class="header-section">
				<div class="header-section-inner">
					<div class="cards">
						<h1>Визитки</h1>
					</div>
					<div class="section-content">
						<div class="section-content_title">
							<h3>Содержание раздела</h3>
						</div>
						<div class="section-content_list">
							<ol>
								<li>
									<h2>1. Цены на стандартные визитки</h2>
									<a href="#price-for-printing" class="find-out">
										<h3>Узнать</h3>
									</a>
								</li>
								<li>
									<h2>2. Скорость печати</h2>
									<a href="#speed-of-printing" class="look">
										<h3>Увидеть</h3>
									</a>
								</li>
								<li>
									<h2>3. Описание продукции</h2>
									<a href="#product-description" class="familiarize">
										<h3>Ознакомиться</h3>
									</a>
								</li>
								<li>
									<h2>4. Стоимость дизайна</h2>
									<a href="#price-of-maket" class="see">
										<h3>Посмотреть</h3>
									</a>
								</li>
								<li>
									<h2>5. Бесплатная доставка</h2>
									<a href="#delivery" class="check">
										<h3>Проверить</h3>
									</a>
								</li>
								<li>
									<h2>6. Возвращаем 15% от заказа</h2>
									<a href="#give-back" class="sort-out">
										<h3>Разобраться</h3>
									</a>
								</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
			
			<div class="submenu-bg">
				<div class="submenu-inner">
					<?php wp_nav_menu(array('theme_location' => 'bot', 'container'       => 'nav')); ?>
				</div>
			</div>
		</header>