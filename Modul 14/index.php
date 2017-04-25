<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="public/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet"/ type="text/css" href="public/css/styles.css">
</head>
<body>
	<div class=" Modul 14">
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
						<textarea name="review" rows="8" cols="100" aria-required = "true" ></textarea>
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