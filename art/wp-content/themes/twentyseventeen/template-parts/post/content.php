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
	<div class="title">
		<?php

			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
			$id = get_the_ID();
file_put_contents("/tmp/kohi.txt", "\n: ".print_r($id, true), FILE_APPEND);
			$img = get_field("artw_img", $id);
file_put_contents("/tmp/kohi.txt", "\n: ".print_r($img, true), FILE_APPEND);
			if(is_array($img) && count($img) > 0 && strlen($img["url"]) > 0){
		?>
			<div><img src="<?=$img["url"]?>"></div>
		<?
			}else{
		?>
			<div class="no-pic"><p>no picture</p></div>
		<?

			}
		?>
	</div>


</article><!-- #post-## -->
