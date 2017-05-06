<html>
<head>
  
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
  <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <script src="js/crips.js" type="text/javascript"></script>
  <?php
  if (!class_exists('lessc')) {
    include ('./libs/lessc.inc.php');
  }
  $less = new lessc;
  $less->compileFile('less/1.less', 'css/1.css');
  ?>
  <link href="css/1.css" rel="stylesheet" type="text/css"/>
</head>

<body>
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
                            <a href="images/product-4.jpg" >
                            <img width="585" height="390" src="images/product-4-585x390.jpg" class="attachment-585x390 size-585x390 wp-post-image" alt="Apple Strudel" class="btn-photo">				</a>
			</div>
                <div class="details">		
                    <div class="woocommerce-product-rating">
		<div class="star-rating">
			<span style="width:86.6%">
				<strong class="rating">4.33</strong> out of <span>5</span>				based on <span class="rating">3</span> customer ratings			</span>
		</div>
                        <h1>
                            Apple Strudel
                        </h1>
                    <div class="product_meta">
                        <span class="posted_in">Categories: <a href="">Salads</a>, <a href="">Pizza</a>, <a href="" rel="tag">Desserts</a>, <a href="">Drinks</a></span>
                    </div>
			<p>Tasty apple dessert for tea time. This delicious you will never forget.</p>
			<div class="ing">
                            <p>Apples, Vanilla Ice Cream, Nuts</p>
			</div>
                            <p class="single-price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>15.00</span></p>
					
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
</body>
</html>