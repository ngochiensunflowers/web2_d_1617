<html>
<head>

  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
   <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
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

    <div class="modul3">
        <div class="container">
            <div class="section-title">
		<p class="subtitle">From 11:00am to 10:00pm </p>
                <h3 class="pr-font">Order Online</h3>
            </div>
            
        </div>
        <div class="clearfix"></div>
        <div class="">  
        <div class="swiper-container" > 
                <ul class="swiper-wrapper" > 
		<li class="swiper-slide" style="//width: 270px; margin-right: 30px">
                    <div class="item">
                        <a href="">
                            <h2>Salads</h2>	
                            <img alt="" src="images/cat-2.jpg"> 			
                            <span class="gradient"></span>
                        </a>
                    </div>
                </li>
                    
                <li class="swiper-slide" style="//width: 270px; margin-right: 30px">
                    <div class="item">
                        <a href="">
                            <h2>Pizza</h2>	
                            <img alt="" src="images/cat-1.jpg" > 			
                            <span class="gradient"></span>
                        </a>
                    </div>
                </li>
                    
                  
                <li class="swiper-slide" style="//width: 270px; margin-right: 30px">
                    <div class="item ">
                        <a href="">
                            <h2>Desserts</h2>	
                            <img alt="" src="images/cat-3.jpg" > 			
                            <span class="gradient"></span>
                        </a>
                    </div>
                </li>
                  
                <li class="swiper-slide" style="//width: 270px; margin-right: 30px">
                    <div class="item ">
                        <a href="">
                            <h2>Soups</h2>	
                            <img alt="" src="images/cat-4.jpg" > 			
                            <span class="gradient"></span>
                        </a>
                    </div>
                </li>
                
                <li class="swiper-slide" style="//width: 270px; margin-right: 30px">
                    <div class="item ">
                        <a href="">
                            <h2>Drinks</h2>	
                            <img alt="" src="images/cat-2.jpg" > 			
                            <span class="gradient"></span>
                        </a>
                    </div>
                </li>    
            </ul> 
               
            </div>
          
             <div class="swiper-pagination"></div>
             
        </div>
       
      </div>
     <script src="css/swiper.min.js" type="text/javascript"></script>
        <script src="js/scrips.js" type="text/javascript"></script>
    </div>
</body>
</html>