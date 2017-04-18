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
        $less->compileFile('less/6.less', 'css/6.css');
        ?>
         <link href="css/6.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="modul_06">
        <!--Phone nummer-->
            <div class="short-info">
                <div class="center">
                    <h2 class="pr-font">Call Us: +38 (012) 34 56 789</h2>
                </div>
            </div>            
        </div>
    </body>
</html>