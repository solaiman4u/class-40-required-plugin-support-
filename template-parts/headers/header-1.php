<?php
$menu_width = cs_get_option('menu_width');
$enable_search = cs_get_option('enable_search');
$search_width = cs_get_option('search_width');
?>

<header class="site-header">
		<div class="header-top-area">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="site-branding">
							<?php
								get_template_part( 'template-parts/headers/logo');
							?>
						</div><!-- .site-branding -->
					</div>
					<div class="col-md-8">
						<div class="header-right-btn">
							<a href="">Featured in New York Times, Forbes & Mashable</a>
							<a href="">25 years of industrial experiences</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header-bottom-area">
			<div class="container">
				<div class="row">
					<div class="<?php if(!empty($menu_width)):?><?php echo esc_attr( $menu_width );?><?php else :?>col-md-8<?php endif; ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
						?>
					</div>
					<?php if($enable_search != false) : ?>
					<div class="<?php if(!empty($search_width)):?><?php echo esc_attr( $search_width );?><?php else :?>col-md-8<?php endif; ?>">
						<div class="header-search-form">
							<?php get_search_form(); ?>
						</div>
					</div>
				<?php endif; ?>
				</div>
			</div>
		</div>
	</header>