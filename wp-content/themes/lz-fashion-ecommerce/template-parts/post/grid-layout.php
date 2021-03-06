<?php
/**
 * Template part for displaying posts
 * 
 * @subpackage lz-fashion-ecommerce
 * @since 1.0
 * @version 1.4
 */

?>
<div class="col-md-4 col-sm-4">
	<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
    <div class="article_content">   
      <div class="article-text">
        <h3><?php the_title();?></h3>   
        <?php the_post_thumbnail(); ?>
        <div class="metabox">
         <span class="entry-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
          <span class="entry-author"><?php the_author(); ?></span>
          <span class="entry-comments"><?php comments_number( __('0 Comments','lz-fashion-ecommerce'), __('0 Comments','lz-fashion-ecommerce'), __('% Comments','lz-fashion-ecommerce') ); ?></span>
        </div>
        <p><?php $excerpt = get_the_excerpt();echo esc_html( lz_fashion_ecommerce_string_limit_words( $excerpt,30 ) ); ?></p>      
        <div class="read-btn">
          <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" title="<?php esc_attr_e( 'READ MORE', 'lz-fashion-ecommerce' ); ?>"><?php esc_html_e('READ MORE','lz-fashion-ecommerce'); ?><i class="fas fa-angle-right"></i>
          </a>
        </div>
      </div>
      <div class="clearfix"></div> 
    </div>
  </div>
</div>