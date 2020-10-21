<?php
/**
 * The header for our theme
 *
 * @subpackage lz-fashion-ecommerce
 * @since 1.0
 * @version 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
} else {
    do_action( 'wp_body_open' );
}?>

<div id="page" class="site">
	<a class="screen-reader-text skip-link" href="#content"><?php esc_html_e( 'Skip to content', 'lz-fashion-ecommerce' ); ?></a>

	<div id="header">
		<div class="top-header">
			<div class="container">	
				<div class="row">
					<div class="col-lg-6 col-md-6 p-0">
						<div class="top">
							<?php if( get_theme_mod( 'lz_fashion_ecommerce_call','' ) != '') { ?>
						        <i class="fas fa-phone"></i><span class="col-org"><?php echo esc_html( get_theme_mod('lz_fashion_ecommerce_call','') ); ?></span>
						    <?php } ?>		
						    <?php if( get_theme_mod( 'lz_fashion_ecommerce_mail','' ) != '') { ?>
						        <i class="fas fa-envelope"></i><span class="col-org"><?php echo esc_html( get_theme_mod('lz_fashion_ecommerce_mail','') ); ?></span>
						    <?php } ?>		   		
						</div>	
					</div>
					<div class="col-lg-6 col-md-6 p-0">
						<div id="topside-menu" class="nav sidenav">
			                <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'lz-fashion-ecommerce' ); ?>">
			                  <?php 
			                    wp_nav_menu( array( 
			                      'theme_location' => 'woocommerce-menu',
			                      'container_class' => 'main-menu-navigation clearfix' ,
			                      'menu_class' => 'clearfix',
			                      'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
			                      'fallback_cb' => 'wp_page_menu',
			                    ) ); 
			                  ?>
			                </nav>
			            </div>
					</div>
				</div>
			</div>
		</div>
		<div class="search-bar">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3">
						<div class="logo">
					        <?php if ( has_custom_logo() ) : ?>
						        <div class="site-logo"><?php the_custom_logo(); ?></div>
						    <?php endif; ?>
				            <?php if (get_theme_mod('lz_fashion_ecommerce_show_site_title',true)) {?>
						        <?php $blog_info = get_bloginfo( 'name' ); ?>
						        <?php if ( ! empty( $blog_info ) ) : ?>
						            <?php if ( is_front_page() && is_home() ) : ?>
							            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						        	<?php else : ?>
					            		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						            <?php endif; ?>
						        <?php endif; ?>
						    <?php }?>
				        	<?php if (get_theme_mod('lz_fashion_ecommerce_show_tagline',true)) {?>
						        <?php
						        $description = get_bloginfo( 'description', 'display' );
						        if ( $description || is_customize_preview() ) :
						          ?>
							        <p class="site-description">
							            <?php echo esc_html($description); ?>
							        </p>
						        <?php endif; ?>
						    <?php }?>
					    </div>
					</div>
					<?php if(class_exists('woocommerce')){ ?>
						<div class="col-lg-7 col-md-7">
				        	<?php get_product_search_form()?>
				      	</div>
						<div class="col-md-2 col-md-2">
						    <div class="cart_icon">
						        <a class="cart-contents" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>"><i class="fas fa-shopping-bag"></i></a>
					            <li class="cart_box">
					              <span class="cart-value"> <?php echo wp_kses_data( WC()->cart->get_cart_contents_count() );?></span>
					            </li>
						    </div>
					    </div>
					<?php }else { echo '<h6>'.esc_html('Please Install Woocommerce Plugin','lz-fashion-ecommerce').'<h6>'; }?>
				</div>
			</div>
		</div>	
	    <div class="menu-section">
			<div class="container">
				<div class="main-top">
				    <div class="row">
				    	<?php if(class_exists('woocommerce')){ ?>
				      	<div class="col-lg-3 col-md-5">
					        <button class="product-btn"><?php echo esc_html_e('ALL CATEGORIES','lz-fashion-ecommerce'); ?><i class="fa fa-bars" aria-hidden="true"></i></button>
					        <div class="product-cat">
					          <?php
					            $args = array(
					              //'number'     => $number,
					              'orderby'    => 'title',
					              'order'      => 'ASC',
					              'hide_empty' => 0,
					              'parent'  => 0
					              //'include'    => $ids
					            );
					            $product_categories = get_terms( 'product_cat', $args );
					            $count = count($product_categories);
					            if ( $count > 0 ){
					                foreach ( $product_categories as $product_category ) {
					                  $product_cat_id   = $product_category->term_id;
					                  $cat_link = get_category_link( $product_cat_id );
					                  if ($product_category->category_parent == 0) { ?>
					                <li class="drp_dwn_menu"><a href="<?php echo esc_url(get_term_link( $product_category ) ); ?>">
					                <?php
					              }
					                echo esc_html( $product_category->name ); ?></a><i class="fas fa-chevron-right"></i></li>
					                <?php
					                }
					              }
					          ?>
				        	</div>
				      	</div>
				      	<?php }else { echo '<h6>'.esc_html('Please Install Woocommerce Plugin','lz-fashion-ecommerce').'<h6>'; }?>
				      	<div class="col-lg-9 col-md-7">
				      		<div class="toggle-menu responsive-menu">
						        <button onclick="lz_fashion_ecommerce_open()" role="tab"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','lz-fashion-ecommerce'); ?></span></button>
						    </div>
							<div id="resp-menu" class="nav sidenav">
						        <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'lz-fashion-ecommerce' ); ?>">
						            <?php 
						            wp_nav_menu( array( 
						              'theme_location' => 'responsive',
						              'container_class' => 'main-menu-navigation clearfix' ,
						              'menu_class' => 'clearfix',
						              'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
						              'fallback_cb' => 'wp_page_menu',
						            ) ); 
						            ?>
						            <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="lz_fashion_ecommerce_close()"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','lz-fashion-ecommerce'); ?></span></a>
						        </nav>
						    </div>
							<div id="sidelong-menu" class="nav sidenav">
				                <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'lz-fashion-ecommerce' ); ?>">
				                  <?php 
				                    wp_nav_menu( array( 
				                      'theme_location' => 'primary',
				                      'container_class' => 'main-menu-navigation clearfix' ,
				                      'menu_class' => 'clearfix',
				                      'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
				                      'fallback_cb' => 'wp_page_menu',
				                    ) ); 
				                  ?>
				                </nav>
				            </div>
						</div>
				    </div>
				</div>
			</div>
		</div>	
	</div>

	<div class="site-content-contain">
		<div id="content" class="site-content">