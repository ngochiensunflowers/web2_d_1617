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
    <div class="modul11">
        <div id="layout" class="wide">
            <div id="container">
                <div id="content" class="center">
                    <ul id="categories-nav">	
                        <li class="cat-item cat-item-7 current-cat">
                            <a href="">Salads</a>
                        </li>
                        <li class="cat-item cat-item-9">
                            <a href="">Pizza</a>
                        </li>
                        <li class="cat-item cat-item-10">
                            <a href="">Desserts</a>
                        </li>
                        <li class="cat-item cat-item-8">
                            <a href="">Soups</a>
                        </li>
                        <li class="cat-item cat-item-16">
                            <a href="">Drinks</a>
                        </li>
                    </ul>		
                </div>
            </div>
        </div>
    </div>
</body>
</html>