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
        $less->compileFile('less/17.less', 'css/17.css');
        ?>
         <link href="css/17.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="modul-17">       
            <div class="container">
                <div id="our-clien">
                    <div class="section-title">
                        <p class="subtitle">What Our Clients Say</p>
                        <h1 class="pr-font">Testimonials</h1>
                    </div>
                    
                    <div class="content">
                       <i class="fa fa-quote-left" aria-hidden="true"></i>
                        <p class="text">
                            Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                        </p>
                        <h2 class="title">John Doe</h2>
                    </div>
                    
                    <div class="nav">
                        <span class="prev fa fa-caret-left"></span>
                        <span class="next fa fa-caret-right"></span>	
                   </div>	
                    </div>                    
                                        
            </div>
        </div>
    </body>
</html>