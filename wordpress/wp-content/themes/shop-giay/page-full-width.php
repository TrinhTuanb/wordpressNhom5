	<?php /* Template Name: Page full width */ ?>
<?php get_header(); ?>
	<div class="shop-topbar-area shop-topbar-area-reverse pt-100 pb-100 page-category">
	    <div class="container">
	        <div class="row">
	            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	                <h1 class="cat-title"><?php single_cat_title(); ?></h1>
	                <?php if (have_posts()) : ?>
	                    <?php while (have_posts()) : the_post(); ?>
	                        <h2 class="single-title"><?php the_title(); ?></h2>
	                        <br>
	                        <div class="single-content">
	                            <p><?php the_content(); ?></p>
	                        </div>


	                    <?php endwhile; ?>
	                <?php endif; ?>
	            </div>
	        </div>
	    </div>
	</div>
<?php get_footer(); ?>