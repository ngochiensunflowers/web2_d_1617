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
        $less->compileFile('less/2.less', 'css/2.css');
        ?>
         <link href="css/2.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        
        <div class="modul2" style="background-image: url(images/slide-1.jpg)">
            <div class="container">
	    <div class="center">
                <h1 class="title">CRISTIANO RESTAURANT </h1>
	        <p class="title">123 Main Street, Uni 21, New York City</p>
	    </div>
            <span class="scroll">
		<span class="wheel"></span>
	    </span>
	</div>
        </div>
    </body>
</html>