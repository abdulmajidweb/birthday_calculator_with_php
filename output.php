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
		<header class="alert alert-info">
           <div class="row">
               <div class="col-9">
                    <p class="h5">Birthday Calculator</p>
                </div>
			    <div class="col">
                    <a href="index.php"><span class="btn btn-danger">Home</span></a>
                </div>
           </div>
			
		</header>
		<!--section part-->
		<section class="alert alert-primary" style="min-height:250px;">
		    <p class="text-success h4 font-italic"><?php echo "Hi ! ".$_POST['name'];?></p>
			<!--php coding-->
			<?php
				if($_SERVER['REQUEST_METHOD'] == 'POST'){
					$b_day = $_POST['day'];
					$b_month = $_POST['month'];
					$b_year = $_POST['year'];
					
					$r_day = date("d");
					$r_month = date("m");
					$r_year = date("Y");
					
					if($b_year == $r_year){
						if($b_month > $r_month){
							echo "<span class='text-danger h4'>Invalid birthday. Please, input your right birthday.</span>";
						}
						elseif($b_month == $r_month){
							if($b_day > $r_day){
								echo "<span class='text-danger h4'>Invalid birthday. Please, input your right birthday.</span>";
							}
							else{
								$f_day = $r_day - $b_day;
								echo "<span class='text-danger h4'>You are a child.</span><br><span class='text-danger h4 font-italic'>Details :</span> <span class='text-danger h4'>Only $f_day day.</span>";
							}
						}
						else{
							if($b_day > $r_day){
								$r_day += 30;
								$f_day = $r_day - $b_day;
								$r_month -= 1;
								$f_month = $r_month - $b_month;
							}
							else{
								$f_day = $r_day - $b_day;
								$f_month = $r_month - $b_month;
							}
							echo "<span class='text-danger h4'>You are a child.</span><br><span class='text-danger h4 font-italic'>Details :</span> <span class='text-danger h4'>$f_month month and $f_day day.</span>";
							
						}
					}
					else{
						if($b_day > $r_day){
							$r_day += 30;
							$f_day = $r_day - $b_day;
							$r_month -= 1;
						}
						else{
							$f_day = $r_day - $b_day;
						}
						if($b_month > $r_month){
							$r_month += 12;
							$f_month = $r_month - $b_month;
							$r_year -= 1;
							$f_year = $r_year - $b_year;
						}
						else{
							$f_month = $r_month - $b_month;
							$f_year = $r_year - $b_year;
						}
						echo "<span class='text-danger h4'>You are $f_year years old.</span><br><span class='text-danger h4 font-italic'>Details :</span> <span class='text-danger h4'>$f_year years $f_month month and $f_day day.</span>";
					}
					
				}
			?>
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