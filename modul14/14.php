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
        $less->compileFile('less/14.less', 'css/14.css');
        ?>
         <link href="css/14.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="modul14">
            <div class="container">
			<h3>ADD A REVIEW</h3>
			<i class="fa fa-star" aria-hidden="true"></i>
			<i class="fa fa-star" aria-hidden="true"></i>
			<i class="fa fa-star" aria-hidden="true"></i>
			<i class="fa fa-star" aria-hidden="true"></i>
			<i class="fa fa-star" aria-hidden="true"></i>
			<div class="row">
				<div class="col-md-12">
					<p class="comment">
						<label for="comment">Your Review</label><br>
						<textarea name="review" rows="8" cols="115" aria-required = "true" ></textarea>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<p class="name"> 
						<label for="author"> Name <span class="required"> * </span></label>
						<br>
						<input id="author" name="author" type="text" value="" size="30" aria-required="true">
					</p>
				</div>
				<div class="col-md-6">
					<p class="email">
						<label for="email"> Email <span class="required"> * </span></label>
						<br>
						<input id="email" name="email" type="text" value="" size="30" aria-required="true">
					</p>
				</div>
			</div>
			<p class="submit">
				<input type="SUBMIT" value="SUBMIT" name="SUBMIT" style="background: black ">
			</p>
		</div>
	</div>
    </body>
</html>