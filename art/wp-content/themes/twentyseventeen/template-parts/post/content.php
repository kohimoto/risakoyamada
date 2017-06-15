<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="title" style="top:10em;">
		<?php

			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
			$id = get_the_ID();
			$img[] = get_field("artw_img", $id);
			$img[] = get_field("ex_img", $id);
			$img[] = get_field("shop_img", $id);
			if(is_array($img) && count($img) > 0){
			  foreach($img as $ik => $iv){
			    if(strlen($iv["url"]) > 0){
		?>
			<div><img src="<?=$iv["url"]?>"></div>
		<?
			}else{
		?>
		<?
			    }
			  }
			}else{
		?>
			<div class="no-pic"><p>no picture</p></div>
		<?
			}
		?>
	</div>


</article><!-- #post-## -->
