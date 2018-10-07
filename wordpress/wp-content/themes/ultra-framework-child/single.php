<?php
/**
 * The template for displaying all single posts.
 */

get_header(); ?>

	<div id="primary" class="content-area uk-width-medium-3-4">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single' );

?>
<strong>Ticket Price:</strong> <?php echo get_post_meta($post->ID, 'ticket_price', true); ?><br>
<strong>Release Date:</strong> <?php echo date('m-d-Y',strtotime(get_post_meta($post->ID, 'release_date', true))); ?><br>
<?php
$taxArray = get_post_taxonomies( $post );
foreach($taxArray as $index=>$value) {
	echo "<strong>" . $value . ":</strong> ";
	$terms = get_the_terms( $post->ID , $value );
	foreach ( $terms as $term ) {
		echo $term->name;
	}
	echo "<br>";
}
?>
<?php

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

<h3>Films List</h3>
<?php
$args = array(
  'post_type'   => 'films',
  'post_status' => 'publish'
 );
 
$filmPosts = new WP_Query( $args );
if( $filmPosts->have_posts() ) :
?>
  <ul>
    <?php
      while( $filmPosts->have_posts() ) :
        $filmPosts->the_post();
	$taxonomies = get_the_taxonomies($post, $args);
        ?>
          <li><?php printf( '%1$s - %2$s | %3$s ', get_the_title(), get_the_content(),  implode(",",$taxonomies));  ?></li>
        <?php
      endwhile;
      wp_reset_postdata();
    ?>
  </ul>
<?php
else :
  esc_html_e( 'No Films!', 'text-domain' );
endif;
?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
