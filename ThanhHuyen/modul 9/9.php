<html>
    <head>
        <title>Restaurant</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
       
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/9.less', 'css/9.css');
        ?>
         <link href="css/9.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="modul9">
            <div class="container">
			<div class="row">
				<div class="col-md-6 col-xs-12">
					<div class="contact">
						<h1 class="us">Contact Us</h1>
						<ul class="contact-info">
							<li>123 Main Street, Uni 21, New York City</li>
							<li>+38 (012) 34 56 789</li>	
							<li class="hours">Mon - Fri: 08:00 am - 10:00 pm</li>
							<li class="hours">Sat - Sun: 10:00 am - 11:00 pm</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-xs-12">
					<div class="Follow">
						<h2 class="widgettitle">Follow Us</h2> 
						<p>Join us on social networks</p>
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
        <footer>
            <p>&copy; 2017 Cristiano. All rights reserved</p>
</footer>
    </body>
</html>