<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">

	<?php if ( have_posts() ) : ?>
		<header class="page-header">
			<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		</header><!-- .page-header -->

<?php    

	$category = get_queried_object();
	$category_id = $category->term_id;


    $categories =  get_categories('child_of='.$category_id);  
    foreach  ($categories as $category) {
        //Display the sub category information using $category values like $category->cat_name

        // display category image, if one exists - place image in /images/podcast_images/ dir  
        $cat_img = '';
        if(get_bloginfo("url") .'/wp-content/images/podcast_images/' . $category->slug . '.jpg' != ' ') {$cat_img = '<img class="podcast_category_image" src="'.get_bloginfo("url") .'/wp-content/images/podcast_images/' . $category->slug . '.jpg" />';} 

       echo '<a href="./'.$category->name.'"><h2 class="podcast_h2">'.$cat_img.$category->name.'</h2></a>'; 
        // start a list for the podcasts
        echo '<ul class="podcast_series">';
        foreach (get_posts('orderby=post_date&category='.$category->term_id) as $post) {
            setup_postdata( $post );
            // format date
            $my_date = mysql2date('F j\<\s\u\p\>S\<\/\s\u\p\>, Y', $post->post_date);

            // load the custom fields for this post, if they have content
            if(get_post_meta($post->ID, 'Speaker', true)){ 
                $speaker_name = '<div class="speaker"><strong>Speaker: </strong>'. get_post_meta($post->ID, "Speaker", true).'</div>';
            } else {
                $speaker_name = '';
            } 
            if(get_post_meta($post->ID, 'Scripture', true)){ 
                $scripture = '<div class="scripture"><strong>Scripture: </strong>'. get_post_meta($post->ID, "Scripture", true).'</div>';
            } else {
                $scripture = '';
            } 
            // echo out the results into a list item
            //echo '<li><a href="'.get_permalink($post->ID).'">'.get_the_title($post->ID).'</a>'.  $speaker_name . $scripture.'<div class="podcast_date"> Recorded On: '. $my_date .'</div></li>';   
        }
        // close the list
        echo '</ul>';
    } ?>
		
	<?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :
			?>
			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that
				 * will be used instead.
				 */
				get_template_part( 'template-parts/post/content', get_post_format() );

			endwhile;

			the_posts_pagination(
				array(
					'prev_text'          => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
					'next_text'          => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
				)
			);

		else :

			get_template_part( 'template-parts/post/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php
get_footer();
