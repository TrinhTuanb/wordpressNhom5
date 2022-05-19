<?php get_header(); ?>
<!-- Header Area End Here -->
<!-- Begin Page Banner Area -->
<?php get_template_part('slider'); ?>
<!-- Page Banner Area End Here -->
<!-- Begin Shop Topbar Wrapper Area -->
<div class="shop-topbar-area shop-topbar-area-reverse pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 order-2 order-lg-1">
                <?php get_sidebar(); ?>

                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-section">
                        <h2 class="title-product" style="display: flex;">
                            <a href="#" class="title" style="font-size: 17px; margin-right: 400px">Sản phẩm nổi bật</a>

                            <div class="list-child " style="font-size: 15px; ">
                                <ul>
                                    <?php
                                    $args = array(
                                        'type'      => 'product',
                                        'child_of'  => 0,
                                        'parent'    => 0,
                                        'taxonomy' => 'product_cat'
                                    );
                                    $categories = get_categories($args);
                                    foreach ($categories as $category) { ?>
                                        <li style="float: left;margin-left: 20px;"><a href="<?php echo get_term_link($category->slug, 'product_cat'); ?>"><?php echo $category->name; ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="clear"></div>
                        </h2>
                        <div class="content-product-box">

                            <div class="row">
                                <?php
                                $tax_query[] = array(
                                    'taxonomy' => 'product_visibility',
                                    'field'    => 'name',
                                    'terms'    => 'featured',
                                    'operator' => 'IN',
                                );
                                ?>
                                <?php $args = array('post_type' => 'product', 'posts_per_page' => 8, 'ignore_sticky_posts' => 1, 'tax_query' => $tax_query); ?>
                                <?php $getposts = new WP_query($args); ?>
                                <?php global $wp_query;
                                $wp_query->in_the_loop = true; ?>
                                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>


                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <!-- Begin Single Product Area -->
                                        <?php get_template_part('content/item_product'); ?>
                                        <!-- Single Product Area End Here -->
                                    </div>
                                <?php endwhile;
                                wp_reset_postdata(); ?>

                            </div>
                        </div>
                    </div>
                    <p style=" margin-bottom: 20px;
                        padding-bottom: 20px;
                        border-bottom: 1px solid #ededed;"></p>
                    <div class="shop-product">
                        <!-- Begin Tab Menu Content Area -->
                        <div class="tab-content">
                            <?php $cat = get_term_by('id', 19, 'product_cat'); ?>
                            <a style="font-size: 25px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" href="<?php echo get_term_link($cat->slug, 'product_cat'); ?>"><?php echo $cat->name; ?></a>
                            <div id="grid" class="tab-pane show fade in active">
                                <div class="grid-view">
                                    <div class="row">

                                        <?php $args = array(
                                            'post_type' => 'product',
                                            'posts_per_page' => 8,
                                            'ignore_sticky_posts' => 1,
                                            'product_cat' => $cat->slug
                                        ); ?>
                                        <?php $getposts = new WP_query($args); ?>
                                        <?php global $wp_query;
                                        $wp_query->in_the_loop = true; ?>
                                        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>


                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <!-- Begin Single Product Area -->
                                                <?php get_template_part('content/item_product'); ?>
                                                <!-- Single Product Area End Here -->
                                            </div>
                                        <?php endwhile;
                                        wp_reset_postdata(); ?>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Tab Menu Content Area End Here -->
                    </div>
                    <p style=" margin-bottom: 20px;
                        padding-bottom: 20px;
                        border-bottom: 1px solid #ededed;"></p>
                    <div class="shop-product">
                        <!-- Begin Tab Menu Content Area -->
                        <div class="tab-content">
                            <?php $cat = get_term_by('id', 18, 'product_cat'); ?>
                            <a style="font-size: 25px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" href="<?php echo get_term_link($cat->slug, 'product_cat'); ?>"><?php echo $cat->name; ?></a>
                            <div id="grid" class="tab-pane show fade in active">
                                <div class="grid-view">
                                    <div class="row">

                                        <?php $args = array(
                                            'post_type' => 'product',
                                            'posts_per_page' => 8,
                                            'ignore_sticky_posts' => 1,
                                            'product_cat' => $cat->slug
                                        ); ?>
                                        <?php $getposts = new WP_query($args); ?>
                                        <?php global $wp_query;
                                        $wp_query->in_the_loop = true; ?>
                                        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>


                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <!-- Begin Single Product Area -->
                                                <?php get_template_part('content/item_product'); ?>
                                                <!-- Single Product Area End Here -->
                                            </div>
                                        <?php endwhile;
                                        wp_reset_postdata(); ?>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Tab Menu Content Area End Here -->
                    </div>
                    <!-- Begin Pagination Area -->

                    <!-- Pagination Area End Here -->
                    <p style=" margin-bottom: 20px;
                        padding-bottom: 20px;
                        border-bottom: 1px solid #ededed;"></p>
                    <div class="shop-product">
                        <!-- Begin Tab Menu Content Area -->
                        <div class="tab-content">
                            <?php $cat = get_term_by('id', 16, 'product_cat'); ?>
                            <a style="font-size: 25px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" href="<?php echo get_term_link($cat->slug, 'product_cat'); ?>"><?php echo $cat->name; ?></a>
                            <div id="grid" class="tab-pane show fade in active">
                                <div class="grid-view">
                                    <div class="row">

                                        <?php $args = array(
                                            'post_type' => 'product',
                                            'posts_per_page' => 8,
                                            'ignore_sticky_posts' => 1,
                                            'product_cat' => $cat->slug
                                        ); ?>
                                        <?php $getposts = new WP_query($args); ?>
                                        <?php global $wp_query;
                                        $wp_query->in_the_loop = true; ?>
                                        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>


                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <!-- Begin Single Product Area -->
                                                <?php get_template_part('content/item_product'); ?>
                                                <!-- Single Product Area End Here -->
                                            </div>
                                        <?php endwhile;
                                        wp_reset_postdata(); ?>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Tab Menu Content Area End Here -->
                    </div>
                    <!-- Begin Pagination Area -->

                    <!-- Pagination Area End Here -->
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Shop Topbar  Wrapper Area End Here -->
<!-- Begin Footer Area -->
<?php get_footer(); ?>