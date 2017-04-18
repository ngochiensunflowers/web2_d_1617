<html>
    <head>
        <title>Restaurant</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
       
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/7.less', 'css/7.css');
        ?>
         <link href="css/7.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="modul-07">
            <section id="most-popular">
                <div class="container">
                    <div class="center">
                        <div class="section-title">
                            <p class="subtitle">Should to Try</p>
                            <h3 class="pr-font">Chef Recommended</h3>
                        </div>
                    </div>

                    <div class="product-list">
                        <div class="col-md-4">
                            <div class="pic">
                                <a class="image" href="#">
                                    <img src="images/salad.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="Greek Salad" title="Greek Salad">
                                    <span class="price">
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">$</span>
                                            30.00
                                        </span>                                            
                                    </span>                               
                                </a>

                                <div class="description">
                                    <h2 class="title">
                                        <a href="#">
                                            Caeser Salad				
                                        </a>
                                    </h2>
                                    <p>Lettuce, Eggs, Parmesan Cheese, Chicken Breast Fillets.</p>
                                   <a href="/?add-to-cart=22" class="btn-cart">Add to cart</a>		
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="pic">
                                <a class="image" href="#">                                  
                                    <img src="images/kemSocola.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="Apple Strudel" title="Apple Strudel">
                                    <span class="price">
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">$</span>
                                            15.00
                                        </span>                                            
                                    </span>                               
                                </a>

                                <div class="description">
                                    <h2 class="title">
                                        <a href="#">
                                           Apple Strudel				
                                        </a>
                                    </h2>
                                    <p>Apples, Vanilla Ice Cream, Nuts</p>
                                    <a href="/?add-to-cart=22" class="btn-cart">Add to cart</a>		
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="pic">
                                <a class="image" href="#">                                     
                                    <img src="images/pie.jpg"  class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="Cherry Pie" title="Cherry Pie">
                                    <span class="price">
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">$</span>
                                            15.00
                                        </span>                                            
                                    </span>                               
                                </a>

                                <div class="description">
                                    <h2 class="title">
                                        <a href="#">
                                          Cherry Pie			
                                        </a>
                                    </h2>
                                    <p>Cherries, Dough, White Sugar, Cheese, Vanilla Ice Cream</p>
                                    <a href="/?add-to-cart=22" class="btn-cart">Add to cart</a>		
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>