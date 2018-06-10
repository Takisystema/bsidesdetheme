<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bsidetheme
 */

get_header('home');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="cf-content">
	      <div class="container-fluid">

	      <!-- Grid Boxes -->
	        <div class="row">
	          <div class="cf-box">
	            <div class="col-md-6">
								<?php get_sidebar( 'home' ); ?>
	              <!-- <div class="cf-text-box">
	                <h1>About</h1>
	                <p>
	                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	                </p>
	              </div> -->
	            </div>
	            <div class="col-md-6">
	              <div class="cf-img-box">
	                <figure>
	                  <img src="https://images.pexels.com/photos/113850/pexels-photo-113850.jpeg?w=940&h=650&auto=compress&cs=tinysrgb">
	                </figure>
	              </div>
	            </div>
	          </div>

	          <div class="cf-box">
	            <div class="col-md-6">
	              <div class="cf-text-box">
	                <h1>Highlights</h1>
	                <ul class="cf-agenda-small">
	                  <li>
	                    <a href="javascript:;">
	                      <span>Speaker 1</span>
	                      <span>Hacker</span>
	                    </a>
	                  </li>
	                  <li>
	                    <a href="javascript:;">
	                      <span>Speaker 2</span>
	                      <span>Hacker</span>
	                    </a>
	                  </li>
	                  <li>
	                    <a href="javascript:;">
	                      <span>Speaker 3</span>
	                      <span>Hacker</span>
	                    </a>
	                  </li>
	                  <li>
	                    <a href="javascript:;" class="cf-link">
	                      More...
	                    </a>
	                  </li>
	                </ul>
	              </div>
	            </div>
	            <div class="col-md-6">
	              <div class="cf-img-box">
	                <figure>
	                  <img src="https://images.pexels.com/photos/7095/people-coffee-notes-tea.jpg?w=940&h=650&auto=compress&cs=tinysrgb">
	                </figure>
	              </div>
	            </div>
	          </div>
	        </div>
	        <!-- End Grid Boxes -->

	        <!-- Sponsers -->
	        <div class="row">
	          <div class="col-xs-6 col-sm-4 col-md-2 cf-sponser-box">
	            <a href="javascript:;"><i class="fab fa-500px"></i></a>
	          </div>
	          <div class="col-xs-6 col-sm-4  col-md-2 cf-sponser-box">
	            <a href="javascript:;"><i class="fab fa-adn"></i></a>
	          </div>
	          <div class="col-xs-6 col-sm-4  col-md-2 cf-sponser-box">
	            <a href="javascript:;"><i class="fab fa-apple"></i></a>
	          </div>
	          <div class="col-xs-6 col-sm-4  col-md-2 cf-sponser-box">
	            <a href="javascript:;"><i class="fab fa-bitcoin"></i></a>
	          </div>
	          <div class="col-xs-6 col-sm-4  col-md-2 cf-sponser-box">
	            <a href="javascript:;"><i class="fab fa-cc-amex"></i></a>
	          </div>
	          <div class="col-xs-6 col-sm-4  col-md-2 cf-sponser-box">
	            <a href="javascript:;"><i class="fab fa-xing"></i></a>
	          </div>
	        </div>
	        <!-- End Sponsers -->

	        <!-- Twitter Banner -->
	        <div class="row">
	          <div class="col-lg-12 cf-twitter-box">
	            <h1 class="text-center"><i class="fab fa-twitter"></i></h1>
	            <span>Follow <a href="javascript:;">@Gi Conference </a>on twitter & stay pickled!</span>
	            <p>
	              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	              tempor incididunt ut labore et dolore magna aliqua.
	            </p>
	          </div>
	        </div>
	        <!-- End Twitter Banner -->

	      </div>
	    </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
