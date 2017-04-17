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
    <div class="modul10">
        <div id="page-header" style="background-image: url(images/header-bg.jpg)">
            <div class="container">
                <div class="center">
		<h1>Salads</h1>
                </div>
            </div>
	
        </div>
    </div>
</body>
</html>