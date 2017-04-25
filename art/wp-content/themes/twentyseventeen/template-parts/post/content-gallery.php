<?php
/**
 * Template part for displaying gallery posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>

<main>
	<section class="page-homepage">
	<article class="image-grid home-image-grid">
	<div class="wrap image-grid-inner">
	<div id="col-1" class="col">

<?
$img = get_field('artw_img');
file_put_contents("/tmp/kohi.txt", "\n: ".print_r($img, true), FILE_APPEND);


?>
		<a href="/work/2013-12-17 15.01.49-2.jpg" class='grid-image-item' data-lity="data-lity">
			<span></span>
			<picture>
				<img src='/work/2013-12-17 15.01.49-2.jpg' alt='' title='' />
			</picture>
		</a>

		<a href="/work/2013-04-16 10.05.20.jpg" class='grid-image-item' data-lity="data-lity">
			<span></span>
			<picture>
				<img src='/work/2013-04-16 10.05.20.jpg' alt='' title='' />
			</picture>
		</a>

		<a href="/work/2012-09-07 15.25.17.jpg"  class='grid-image-item' data-lity="data-lity">
			<span></span>
			<picture>
				<img src='/work/2012-09-07 15.25.17.jpg' alt='' title='' />
			</picture>
		</a>

		<a href="/work/2012-12-14 16.04.46.jpg"  class='grid-image-item' data-lity="data-lity">
			<span></span>
			<picture>
				<img src='/work/2012-12-14 16.04.46.jpg' alt='' title='' />
			</picture>
			</a>

	</div>
	<div id="col-2" class="col">
		<a href="/work/2014-01-22 00.01.36.jpg" class='grid-image-item' data-lity="data-lity">
			<span></span>
			<picture>
	  		<img src='/work/2014-01-22 00.01.36.jpg' alt='' title='' />
			</picture>
		</a>

		<a href="/work/2013-06-16 19.31.44.jpg"  class='grid-image-item' data-lity="data-lity">
			<span></span>
			<picture>
				<img src='/work/2013-06-16 19.31.44.jpg' alt='' title='' />
			</picture>
		</a>

		<a href="/work/2012-06-01 17.36.21.jpg"  class='grid-image-item' data-lity="data-lity">
			<span></span>
			<picture>
				<img src='/work/2012-06-01 17.36.21.jpg' alt='' title='' />
			</picture>
		</a>

		<a href="/work/2012-06-01 17.10.32.jpg"  class='grid-image-item' data-lity="data-lity">
			<span></span>
			<picture>
				<img src='/work/2012-06-01 17.10.32.jpg' alt='' title='' />
			</picture>
		</a>
	</div>

	<div id="col-3" class="col">
		<a href="/work/2014-01-22 00.08.55.jpg" class='grid-image-item' data-lity="data-lity">
			<span></span>
			<picture>
				<img src='/work/2014-01-22 00.08.55.jpg' alt='' title='' />
			</picture>
		</a>

		<a href="/work/2013-12-21 13.19.22.jpg"  class='grid-image-item' data-lity="data-lity">
			<span></span>
			<picture>
				<img src='/work/2013-12-21 13.19.22.jpg' alt='' title='' />
			</picture>
		</a>

		<a href="/work/2012-12-14 16.03.57.jpg"  class='grid-image-item' data-lity="data-lity">
			<span></span>
			<picture>
				<img src='/work/2012-12-14 16.03.57.jpg' alt='' title='' />
			</picture>
		</a>

		<a href="/work/2012-06-01 17.25.00.jpg"  class='' data-lity="data-lity">
			<span></span>
			<picture>
				<img src='/work/2012-06-01 17.25.00.jpg' alt='' title='Equilateral' />
			</picture>
		</a>
	</div>
	</div>
	</article>
	</section>
</main>
