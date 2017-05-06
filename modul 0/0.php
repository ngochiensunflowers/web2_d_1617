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
        $less->compileFile('less/0.less', 'css/0.css');
        ?>
         <link href="css/0.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="modul0">
            <div class="container">
                <div class="row">
			<div class="col-md-6">
					<div class="fax">
						<ul>
							<li><i class="fa fa-map-marker"></i>123 Main Street, Uni 21, New York City</li>
							<li><i class="fa fa-phone"></i>+38 (012) 34 56 789</li>
						</ul>
					</div>
			</div>
			<div class="list">
				<div class="col-md-6">
						<ul id="menu-top-nav" class="additional-links">
                                                        <li id="menu-item-240" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-240"><a href="http://cristiano.ukrdevs.com/my-account/">My Account</a></li>
							<li id="menu-item-241" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-241"><a href="http://cristiano.ukrdevs.com/shop/">Shop</a></li>
                                                        <li id="menu-item-242" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-242"><a href="http://cristiano.ukrdevs.com/contact-us/">Contact Us</a></li>
                                                </ul>
                                                <div class="social">
                                                        <a class="fa fa-facebook" href="http://facebook.com" target="blank"></a>
							<a class="fa fa-twitter" href="http://twitter.com" target="blank"></a>
                            			        <a class="fa fa-tripadvisor" href="https://www.tripadvisor.com/" target="blank"></a>
							<a class="fa fa-yelp" href="https://www.yelp.com/" target="blank"></a>
                                                </div>
				</div>      
			</div>
		</div>
            </div>
        </div>
    </body>
</html>