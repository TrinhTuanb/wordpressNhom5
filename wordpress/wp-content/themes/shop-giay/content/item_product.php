<?php global $product; ?>
<div class="single-product single-product-3">
                <!-- Begin Product Image Area -->
                <div class="product-img">
                    <a href="<?php the_permalink(); ?>">
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'full', array( 'class' =>'thumnail') ); ?>
                    <?php if($product->is_on_sale()){ ?>
                    <span class="sale">Giảm <br><?php echo percentSale($product->get_regular_price(), $product->get_sale_price()) ?>%</span>
                    <?php } ?>
                    </a>
                    <div class="sticker"><span>New</span></div>
                    <!-- Begin Product Action Area -->
                    <div class="product-action">
                        <div class="product-action-inner">
                            <div class="cart">
                                <a href="?add_to_cart=<?php the_ID();?>">
                                    <span>Add To Cart</span>
                                </a>
                            </div>
                            <ul class="add-to-links">
                                <li  class="rav-wishlist"><a href="wishlist.html" data-bs-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                <li class="rav-compare"><a href="#" data-bs-toggle="tooltip" data-placement="top" title="Compare"><i class="fa fa-refresh"></i></a></li>
                                <li class="rav-quickviewbtn">
                                    <a href=".open-modal" data-bs-toggle="modal" title="Quick view"><i class="fa fa-eye"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Product Action Area End Here -->
                </div>
                <!-- Product Image Area End Here -->
                <!-- Begin Product Content Area -->
                <div class="product-contents">
                    <!-- Begin Product Name Area -->
                    <h5 class="product-name">
                        <a href="<?php the_permalink(); ?>" title="Printed Chiffon Dress"><?php the_title();?></a>
                    </h5>
                    <!-- Product Name Area End Here -->
                    <!-- Begin Price Box Area -->
                    <div class="price-box">
                        <?php echo $product->get_price_html(); ?>
                    </div>
                    <!-- Price Box Area End Here -->
                    <!-- Begin Rating Area -->
                    
                    <!-- Rating Area End Here -->
                </div>
                <!-- Product Content Area End Here -->
            </div>