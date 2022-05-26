<?php get_header(); ?>
<!-- Header Area End Here -->
<!-- Begin Page Banner Area -->

<!-- Page Banner Area End Here -->
<!-- Begin Shop Topbar Wrapper Area -->
<div class="shop-topbar-area shop-topbar-area-reverse pt-100 pb-100 page-category">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <h1 class="cat-title"><?php single_cat_title(); ?></h1>
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <h2 class="single-title"><?php the_title(); ?></h2>
                        <br>
                        <div class="meta-single">
                            <span>Tác giả:<strong> <?php the_author(); ?></strong></span><br>
                            <span>Chuyên mục: <?php the_category(','); ?></span>
                        </div>
                        <div class="single-content">
                           <p><?php the_content(); ?></p> 
                        </div>
                        <div class="comment-facebook">
                            <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="" data-numposts="5"></div>
                        </div>
                        <br>
                        <br>
                        <div class="related-post">
                            <?php
                            $categories = get_the_category($post->ID);
                            if ($categories) {
                                $category_ids = array();
                                foreach ($categories as $individual_category) $category_ids[] = $individual_category->term_id;

                                $args = array(
                                    'category__in' => $category_ids,
                                    'post__not_in' => array($post->ID),
                                    'showposts' => 5 // Số bài viết bạn muốn hiển thị.

                                );
                                $my_query = new wp_query($args);
                                if ($my_query->have_posts()) {
                                    echo '<h3>Bài viết liên quan</h3><br><ul class="list-news">';
                                    while ($my_query->have_posts()) {
                                        $my_query->the_post();
                            ?>
                                        <div class="list-new">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_post_thumbnail('full'); ?>
                                                    </a>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                                    <h4>
                                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                    </h4>
                                                    <?php the_excerpt(); ?>
                                                    <a href="<?php the_permalink(); ?>" class="read-more">Xem chi tiết</a>
                                                </div>
                                            </div>
                                        </div>
                            <?php
                                    }
                                    echo '</ul>';
                                }
                            }
                            ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <div class="col-lg-3">
                <?php get_sidebar(); ?>
            </div>

        </div>
    </div>
</div>
<!-- Shop Topbar  Wrapper Area End Here -->
<!-- Begin Footer Area -->
<?php get_footer(); ?>