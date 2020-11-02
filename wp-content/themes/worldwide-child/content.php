<?php
/**
 * @package Worldwide
 */
?>
 <div class="articlelists">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="articleHead">
		<header class="entry-header">  
			<h4 class="dt"><?php echo get_the_date($format = 'd,M');?></h4>
            <?php if ( 'post' == get_post_type() ) : ?>
            	<h4><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>               
            <?php endif; ?>            
        </header><!-- .entry-header -->
		
		</div>
		<?php if (has_post_thumbnail() ){ ?>
          <div class="post-thumb">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          </div>       
        <?php } ?>
  
        
    
        <?php if ( is_search() || !is_single() ) : // Only display Excerpts for Search ?>
        <div class="entry-summary">
			<div class="ex-head">by <a class="author"><?php echo get_author_name();?></a> on <?php echo get_the_date($format= 'd,M,Y');?><a class="comm">Comments <?php echo get_comments_number();?></a><hr></div>
			<?php the_excerpt(); ?>
           <a class="ReadMore" href="<?php the_permalink(); ?>"><?php esc_html_e('Read More','worldwide'); ?></a>
        </div><!-- .entry-summary -->
        <?php else : ?>
        <div class="entry-content">
            <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'worldwide' ) ); ?>          
        </div><!-- .entry-content -->
        <?php endif; ?>
        <div class="clear"></div>
    </article><!-- #post-## -->
</div><!-- blog-post-repeat -->