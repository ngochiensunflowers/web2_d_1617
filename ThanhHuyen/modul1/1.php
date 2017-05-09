<html>
    <head>
        <title>Restaurant</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
        <div class="modul1">
            <div class="container">
                <div class="logo">
	            <div class="text-logo">
                        <a href="/">
			    <p>Restaurant</p>					
			    <h2 class="title">Cristiano</h2>
		        </a>
		    </div>
                </div>
                <div class="menu">
                    <ul class="nav nav-tabs navbar-right">
                    <li class="active"><a href="#">HOME</a></li>
                    <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">OUR MENU
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Boxed Layour</a></li>
                            </ul>
                    </li>
                    <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">SHOP
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Pizza</a></li>
                                <li><a href="#">Salads</a></li>
                                <li><a href="#">Desserts</a></li>
                                <li><a href="#">Soups</a></li>
                                <li><a href="#">Drinks</a></li> 
                            </ul>
                    </li>
                    <li><a href="#">GALLERY</a></li>
                    <li><a href="#">OUR NEWS</a></li>
                    <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">RESERVASION
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Open Table Reservation</a></li>
                            </ul>
                    </li>
                    <li><a href="#">CONTACT US</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>