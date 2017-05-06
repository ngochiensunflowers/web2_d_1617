<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
  <link href="css/swiper.css" rel="stylesheet" type="text/css"/>
  <?php
  if (!class_exists('lessc')) {
    include ('./libs/lessc.inc.php');
  }
  $less = new lessc;
  $less->compileFile('less/1.less', 'css/1.css');
  ?>
  <link href="css/1.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="modul4">
        <section class="swiper-container">
            <div class="swiper-wrapper">
		<div class="swiper-slide" style="background-image: url(images/promo.jpg);">
                    <div class="center">
			<div class="table-cell">
                            <div class="details">
                                <h2 class="title">Promo Action</h2>
                                <div class="content">
                                <p><b>Ut enim ad minim veniam</b>, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="swiper-slide" style="background-image: url(images/slide-1.jpg); ">
                    <div class="center">
                        <div class="table-cell">
                            <div class="details">
                                <h2 class="title">Cristiano Restaurant</h2>
                                    <div class="content">
                                        <p><b>Ut enim ad minim veniam</b>, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        
        </section>
    </div>
    <script src="js/swiper.min.js" type="text/javascript"></script>
    <script src="js/scrips.js" type="text/javascript"></script>
</body>
</html>