<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Birthday Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--bootstrap css-->
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
</head>
<body class="alert-success">
    <!--start coding-->
	<div class="container-fluid mt-1">
	    <!--header-->
		<header>
			<p class="alert alert-info h5">Birthday Calculator</p>
		</header>
		<!--section part-->
		<section class="alert alert-primary">
		    <p class="text-danger h6 font-italic">Please, fill up all inputs...</p>
			<form action="output.php" method="post">
               <div class="form-group row">
                   <label for="name" class="col-12">Name</label>
				    <input type="text" name="name" id="name" required="" class="form-control col" placeholder="Enter your name">
               </div>
                <div class="form-group row">
                   <p class="col-12">Birthday</p>
				    <input type="number" name="day" placeholder="Day" required="" min="1" max="31" class="col form-control mr-1">
				    <input type="number" name="month" placeholder="Month" required="" min="1" max="12" class="col form-control mr-1">
				    <input type="number" name="year" placeholder="Year" required="" min="1800" max="<?php echo date('Y');?>" class="col form-control">
               </div>
				<input type="submit" name="submit" value="Submit" class="btn btn-primary">
				<input type="reset" name="reset" value="Reset" class="btn btn-danger">
			</form>
		</section>
		
		<footer class="footer">
			<p>Developed by <span class="font-italic font-weight-bold">Abdul Majid</span></p>
		</footer>
	</div>
	
	<!--bootstrap js-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
</body>
</html>