<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rebonz
 */

?>

<div class="has_banner">

	<section id="banner-section" class="banner">
		<div id="wp-custom-header" class="wp-custom-header">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hd_top.jpg" width="1920" height="780" alt="株式会社Re.bonz">
		</div>
		<div class="banner-text">
			<div class="container">
				<div class="text-holder">
					<h2 class="title fadeInUp">すべてのレベルでの<br class="sp" />完璧さ</h2>
					<div class="btn">
						<a href="<?php echo home_url(); ?>/contact/"></a>
						<i class="fas fa-edit"></i>無料のお問い合わせ
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="site-content">
		<section class="container">
			<h3 class="ct">事業内容</h3>

			<div class="container__inner">
				<ul class="servicelist">
					<li class="servicelist__item">
						<h4 class="ch">外壁工事</h4>
						<figure class="service__img">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/img_service_1.jpg" alt="株式会社Re.bonz">
						</figure>
						<ul class="service__list">
							<li>塗装工事</li>
							<li>カバー工法</li>
							<li>張り替え工事</li>
						</ul>
					</li>

					<li class="servicelist__item">
						<h4 class="ch">防水工事</h4>
						<figure class="service__img">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/img_service_2.jpg" alt="株式会社Re.bonz">
						</figure>
						<ul class="service__list">
							<li>アスファルト防水</li>
							<li>シート防水</li>
							<li>塗膜防水</li>
						</ul>
					</li>

					<li class="servicelist__item">
						<h4 class="ch">内装工事</h4>
						<figure class="service__img">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/img_service_3.jpg" alt="株式会社Re.bonz">
						</figure>
						<ul class="service__list">
							<li>クロス工事</li>
							<li>ボード工事</li>
							<li>床仕上げ工事</li>
						</ul>
					</li>
				</ul>
			</div>
		</section>
	</div>

</div>