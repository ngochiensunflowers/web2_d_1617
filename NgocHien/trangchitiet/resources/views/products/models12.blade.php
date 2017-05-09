<div class="modul12">
    <div class="msg">
    <img id="msg-photo">
    <div class="btn-close">x</div>
    </div>

    <div class="blur" style="background-image: url(images/product-4-110x110.jpg)"></div>
        <div class="container">
            <div id="product-single-wrap">
                <div id="product-single" class="cols-2 like-table">
                    <div class="product-image">
                        <a href="#" >
                            <img width="585" height="390" src="<?php echo $products[9]['img']?>" class="attachment-585x390 size-585x390 wp-post-image" alt="Apple Strudel" class="btn-photo">				
                        </a>
                    </div>
                <div class="details">		
                    <div class="woocommerce-product-rating">
                        <div class="star-rating">
                            <span style="width:86.6%">
                                <strong class="rating">4.33</strong> 
                                out of 
                                <span>5</span>				
                                based on 
                                <span class="rating">3</span> 
                                customer ratings			
                            </span>
                        </div>
                        <h1><?php echo $products[9]['name']?></h1>
                        <div class="product_meta">
                            <span class="posted_in">Categories: <a href="">Salads</a>, <a href="">Pizza</a>, <a href="" rel="tag">Desserts</a>, <a href="">Drinks</a></span>
                        </div>
                        <p><?php echo $products[9]['description']?></p>
                        <div class="ing">
                            <p>Apples, Vanilla Ice Cream, Nuts</p>
                        </div>
                        <p class="single-price">
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">$</span><?php echo $products[9]['price']?>
                            </span>
                        </p>

                        <div class="add-to-cart-wrap">
                            <form class="cart" method="post" enctype="multipart/form-data">

                                <button type="submit" name="add-to-cart" value="32" class="single_add_to_cart_button pr-font btn-color button alt">Add to cart</button>
                                    <div class="quantity">
                                        <input type="number" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric">
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>	
            </div>
        </div>
    </div>
</div>