<html>
<head>

  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="css/font-awesome.css" rel="stylesheet" type="text/css"/>
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
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
       <section id="promo-slider" class="swiper-container-horizontal">
<!--	    <div class="swiper-wrapper" style="transform: translate3d(-702px, 0px, 0px); transition-duration: 0ms;">-->
		<div class="swiper-slide item swiper-slide-active" style="background-image: url(images/promo.jpg);">
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
            <div class="swiper-slide item swiper-slide-active" style="background-image: url(images/slide-1.jpg); ">
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
<!--            </div>-->
		<div class="slider-button-prev fa fa-caret-left"></div>
		<div class="slider-button-next fa fa-caret-right swiper-button-disabled"></div>			
		<div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
                    <span class="swiper-pagination-bullet"></span>
                    <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
                </div>	
        </section>
    </div>
</body>
</html>