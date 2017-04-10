<html>
<head>

  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>


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

    <div class="modul3">
        <div class="container">
            <div class="section-title">
		<p class="subtitle">From 11:00am to 10:00pm </p>
                <h3 class="pr-font">Order Online</h3>
            </div>
            
        </div>
        <div class="clearfix"></div>
        
        <div id="categories-wrapper" > 
            
            <ul id="categories-list" >
                <div class="row">
                    <div class="col-md-3">
		<li class="item swiper-slide-active" style="width: 260px;">
                    <div class="product-category">
                        <a href="">
                            <h2>Salads</h2>	
                            <img alt="" src="images/cat-2.jpg"> 			
                            <span class="gradient"></span>
                        </a>
                    </div>
                </li>
                    </div>
                     <div class="col-md-3">
                <li class="item swiper-slide-next" style="width: 260px; ">
                    <div class="product-category">
                        <a href="">
                            <h2>Pizza</h2>	
                            <img alt="" src="images/cat-1.jpg" > 			
                            <span class="gradient"></span>
                        </a>
                    </div>
                </li>
                     </div>
                  <div class="col-md-3">
                <li class="item" style="width: 260px;">
                    <div class="product-category ">
                        <a href="">
                            <h2>Desserts</h2>	
                            <img alt="" src="images/cat-3.jpg" > 			
                            <span class="gradient"></span>
                        </a>
                    </div>
                </li>
                  </div>
                <div class="col-md-3">
                <li class="item" style="width: 260px;">
                    <div class="product-category ">
                        <a href="">
                            <h2>Soups</h2>	
                            <img alt="" src="images/cat-4.jpg" > 			
                            <span class="gradient"></span>
                        </a>
                    </div>
                </li>
                </div>
                     <div class="col-md-3">
                <li class="item" style="width: 260px;">
                    <div class="product-category">
                        <a href="">
                            <h2>Drinks</h2>	
                            <img alt="" src="images/cat-2.jpg" > 			
                            <span class="gradient"></span>
                        </a>
                    </div>
                </li>
                     </div>
              </div>
            </ul>
       </div>
    </div>
</body>
</html>