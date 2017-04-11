<html>
    <head>
        <title>Restaurant</title>
        <link href="../public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../public/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
       
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('../public/less/hien.less', '../public/css/hien.css');
        ?>
         <link href="../public/css/hien.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="modul-05">
        <!--Random Dishes-->
            <div class="container">
                 <div id="our-menu">               
                    <div class="section-title">
                        <p class="subtitle">- Random Dishes -</p>
                        <h1 class="pr-font">From Our Menu</h1>			
                    </div>
                
                    <div class="dishes-menu">
                        <div class="row">                           
                            <div class="col-md-6">
                                <div class="menu-item">
                                    <div class="thumbnail">
                                        <img src="../public/images/h1.jpg" alt=""/>
                                    </div>
                                    <div class="description">
                                        <span class="pr-font dm-price">
                                            <span class="currency">$</span>
                                            13.50
                                        </span>				
                                        <h2>
                                            <span class="title">Roasted Pork Belly</span>
                                        </h2>
                                        <div class="dots">
                                            <p>Pan roasted pork belly with gratin potato, braised Savoy cabbage, apples, thyme and calvados jus</p>
                                        </div>
                                    </div> 
                                </div>                                
                            </div>
                            
                            <div class="col-md-6">
                                <div class="menu-item">
                                    <div class="thumbnail">
                                        <img src="../public/images/h2.jpg" alt=""/>
                                    </div>
                                    <div class="description">
                                        <span class="pr-font dm-price">
                                            <span class="currency">$</span>
                                            9.50
                                        </span>				
                                        <h2>
                                            <span class="title">Tuna Niçoise</span>
                                        </h2>
                                        <div class="dots">
                                            <p>Chargrilled fresh tuna steak (served medium rare) on classic Niçoise salad with French beans, cherry tomatoes, black olives, peppers, new potatoes, egg, baby gem lettuce and red onion</p>
                                        </div>
                                    </div> 
                                </div>
                                
                            </div>   
                            
                            <div class="col-md-6">
                                <div class="menu-item">
                                    <div class="thumbnail">
                                        <img src="../public/images/h3.jpg" alt=""/>
                                    </div>
                                    <div class="description">
                                        <span class="pr-font dm-price">
                                            <span class="currency">$</span>
                                            10.95</span>				
                                        <h2>
                                            <span class="title">Chicken and Walnut Salad</span>
                                            <span class="highlight-text">Hot</span>
                                        </h2>
                                        <div class="dots">
                                            <p>Chargrilled chicken with avocado, baby gem lettuce, baby spinach, shallots, French beans, walnuts, croutons and a mustard dressing</p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div> 
                            
                            <div class="col-md-6">
                                <div class="menu-item">
                                    <div class="thumbnail">
                                        <img src="../public/images/h4.jpg" alt=""/>
                                    </div>
                                    <div class="description">
                                        <span class="pr-font dm-price">
                                            <span class="currency">$</span>
                                            13.95</span>				
                                        <h2>
                                            <span class="title">Escalope de Veau</span>                                  
                                        </h2>
                                        <div class="dots">
                                            <p>Sautéed breaded veal escalope with watercress, lemon and veal jus.</p>
                                        </div>
                                    </div>
                                </div>                                
                            </div> 
                            
                             <div class="col-md-6">
                                 <div class="menu-item">
                                     <div class="thumbnail">
                                        <img src="../public/images/h5.jpg" alt=""/>
                                    </div>
                                    <div class="description">
                                        <span class="pr-font dm-price">
                                            <span class="currency">$</span>
                                            7.50–
                                            <span class="currency">$</span>
                                            12.00
                                        </span>				
                                        <h2>
                                            <span class="title">Goats Cheese Salad</span>
                                        </h2>
                                        <div class="dots">
                                            <ul class="multiple-prices">
                                                <li>
                                                    <span class="lbl">Small</span>
                                                    -
                                                    <span class="price">
                                                        <span class="currency">$</span>
                                                        7.50
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="lbl">Medium</span>
                                                    -
                                                    <span class="price">
                                                        <span class="currency">$</span>
                                                        11.50
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="lbl">Large</span>
                                                    -
                                                    <span class="price">
                                                        <span class="currency">$</span>
                                                        12.00
                                                    </span>
                                                </li>
                                            </ul>									
                                            <p>Warm goats cheese and roasted vegetable salad with black olive tapenade crostini</p>
                                        </div>
                                    </div>
                                 </div>                                
                            </div>     
                            
                            <div class="col-md-6">
                                <div class="menu-item">
                                    <div class="thumbnail">
                                        <img src="../public/images/h6.jpg" alt=""/>
                                    </div>
                                    <div class="description">
                                        <span class="pr-font dm-price">
                                            <span class="currency">$</span>
                                            12.50</span>				
                                        <h2>
                                            <span class="title">Fish Parmentier</span>                                  
                                        </h2>
                                        <div class="dots">
                                            <p>Cod, haddock, prawn and salmon in a creamy white wine and leek sauce, topped with mash potato and Gruyère cheese</p>
                                        </div>
                                    </div>
                                </div>                                
                            </div> 
                        </div>
                    </div>
                     
                    <div class="view-full-menu">
                        <a href="/our-menu" class="btn-color">View Full Menu</a>
                    </div>
                </div>   
            </div> 
        
        <div class="clearfix"></div>
        </div>
        
        
        <div class="modul-06"> 
            <!--Phone nummer-->
            <div class="short-info">
                <div class="center">
                    <h2 class="pr-font">Call Us: +38 (012) 34 56 789</h2>
                </div>
            </div>
            
        <!--Should to Try-->
            <div id="most-popular">
                <div class="container">
                    <div class="center">
                        <div class="section-title">
                            <p class="subtitle">- Should to Try -</p>
                            <h3 class="pr-font">Chef Recommended</h3>
                        </div>
                    </div>
                    <div id="product-list">
                        <div class="row">
                            <div class="product">
                                <div class="col-md-4">
                                    <a class="image" href="#">
                                        <img src="../public/images/kemSocola.jpg" alt=""/>
                                        <span class="price">
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">$</span>
                                                15.00
                                            </span>                                            
                                        </span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </body>
</html>