<html>
<head>
<script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  
  <script type="text/javascript">
      $(document).ready(function(e) {
          var but = $(".swiper-pagination-bullet-active");
          var set = $("#categories-wrapper");
          but.click(function(e) {
              var sec = $("article section:nth-child(1)");
              sec.hide("fast","linear",function(){
                  set.append($(this));
              });
          });
      });
  </script>
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
        <div class="container">  
        <div id="categories-wrapper" > 
            <ul id="categories-list" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;" >   
		<li class="item swiper-slide-active" style="width: 270px; margin-right: 30px">
                    <div class="product-category">
                        <a href="">
                            <h2>Salads</h2>	
                            <img alt="" src="images/cat-2.jpg"> 			
                            <span class="gradient"></span>
                        </a>
                    </div>
                </li>
                    
                <li class="item swiper-slide-next" style="width: 270px; margin-right: 30px">
                    <div class="product-category">
                        <a href="">
                            <h2>Pizza</h2>	
                            <img alt="" src="images/cat-1.jpg" > 			
                            <span class="gradient"></span>
                        </a>
                    </div>
                </li>
                    
                  
                <li class="item" style="width: 270px; margin-right: 30px">
                    <div class="product-category ">
                        <a href="">
                            <h2>Desserts</h2>	
                            <img alt="" src="images/cat-3.jpg" > 			
                            <span class="gradient"></span>
                        </a>
                    </div>
                </li>
                  
                <li class="item" style="width: 270px; margin-right: 30px">
                    <div class="product-category ">
                        <a href="">
                            <h2>Soups</h2>	
                            <img alt="" src="images/cat-4.jpg" > 			
                            <span class="gradient"></span>
                        </a>
                    </div>
                </li>
                
                <li class="item" style="width: 270px; margin-right: 30px">
                    <div class="product-category ">
                        <a href="">
                            <h2>Drinks</h2>	
                            <img alt="" src="images/cat-2.jpg" > 			
                            <span class="gradient"></span>
                        </a>
                    </div>
                </li>    
            </ul> 
        </div>
             <div class="clearfix"></div>
             <div class="swiper-pagination bullet-5 swiper-pagination-clickable swiper-pagination-bullets">
                <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
                <span class="swiper-pagination-bullet"></span>
            </div>
      </div>
    </div>
</body>
</html>