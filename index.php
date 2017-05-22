<?php
/**
 * The main template file
 *
 * Layout 4rodas
 *
 *
 * @package WordPress
 * @subpackage Quatro_Rodas
 * @since Quatro Rodas
 */

get_header(); ?>

	<main>
		<div class="container">
			<?php //get_header(); ?>
			<?php get_template_part('destaques'); ?>
			<?php get_template_part('content'); ?>
		</div>
	</main>

<?php get_footer(); ?>
