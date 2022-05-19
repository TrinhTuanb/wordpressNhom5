
                <div class="shop-sidebar">
                    <!-- Shop Sidebar Area -->
                    <div class="category">
                        <h4>Danh Mục</h4>
                        <!-- Begin Category List Area -->
                        <div class="category-list">
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
                                    <li><a href="<?php echo get_term_link($category->slug, 'product_cat'); ?>"><?php echo $category->name; ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <!-- Category List Area End Here -->
                    </div>
                    <!-- Shop Sidebar Area End-->
                    <!-- Shop Sidebar Area -->
                    <div class="category mt-30">
                        <h4>Bài Viết</h4>
                        <!-- Begin Category List Area -->
                        <div class="category-list">
                            <ul>
                                <?php $args = array(
                                    'post_status' => 'publish',
                                    'post_type' => 'post',
                                    'posts_per_page' => 3,
                                    'cat' => 1,
                                    'orderby' => 'rand'
                                ); ?>
                                <?php $getposts = new WP_query($args); ?>
                                <?php global $wp_query;
                                $wp_query->in_the_loop = true; ?>
                                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                    <li>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('thumbnail'); ?>
                                        </a>
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

                                    </li>
                                <?php endwhile;
                                wp_reset_postdata(); ?>
                            </ul>
                        </div>
                        <!-- Category List Area End Here -->
                    </div>
                    <!-- Shop Sidebar Area End-->
                    <!-- Shop Sidebar Area -->
                    <hr>
                    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar')) : ?><?php endif; ?>
                   
                    <!-- Shop Sidebar Area End-->
                </div>
                <!-- Begin Sidebar Compare Area -->
                
            </div>