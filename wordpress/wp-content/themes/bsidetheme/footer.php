<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bsidetheme
 */

?>

	</div><!-- #content -->

	<footer>
		<div class="container-fluid">
			<div class="site-info">
				<div class="col-xs-12 col-lg-6">
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( '%1$s by %2$s.', 'bsidetheme' ), 'bsidetheme', '<a href="javascript:;">Gione</a> & <a href="javascript:;">Rulien</a>' );
					?>
					{{message}}
				</div>
				<div class="col-xs-12 col-lg-6 cf-social">
          <ul>
						<li><a href="javascript:;"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="javascript:;"><i class="fab fa-twitter-square"></i></a></li>
            <li><a href="javascript:;"><i class="fab fa-google-plus-square"></i></a></li>
            <li><a href="javascript:;"><i class="fas fa-rss-square"></i></a></li>
          </ul>
        </div>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="<?php echo(get_template_directory_uri()); ?>/js/vue.js"></script>
</body>
</html>
