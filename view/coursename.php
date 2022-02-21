<?php
	require("faculty/model/db.php")
?>
<link rel="stylesheet" href="coursename.css">

<div class="container">
 	<div class="holiday">


 		<h3>Courses</h3>



		 
		 
    

 		<div class="rom-btm">
 			<div class="col-md-3 room-left">
 				<img src="logo.png" class="img-responsive" alt="">
 			</div>
 			<div class="col-md-6 room-midle">
			 <?php

$connection = new db();

$conobj=$connection->OpenCon();



$userQuery=$connection->ViewCourse($conobj,"course", "1");



if($userQuery !== false && $userQuery->num_rows > 0)

{

	while($row = $userQuery->fetch_assoc())

	{         

		$course1 = $row["course"];

	


	}

}

else

{

   echo "error";

}

            ?>
 				<h4>Course Name:<?php echo $course1 ?></h4>
 				<h6>id:9374978785</h6>
 				
 			
 			</div>
 			<div class="col-md-3 room-right">
 				
 				<a href="details.php" class="view">Details</a>
 			</div>
 			<div class="clearfix"></div>
 		</div>



		 <div class="rom-btm">
 			<div class="col-md-3 room-left">
 				<img src="logo.png" class="img-responsive" alt="">
 			</div>
 			<div class="col-md-6 room-midle">



			 <?php

$connection = new db();

$conobj=$connection->OpenCon();



$userQuery=$connection->ViewCourse($conobj,"course", "1");



if($userQuery !== false && $userQuery->num_rows > 0)

{

	while($row = $userQuery->fetch_assoc())

	{         

		$course2 = $row["course"];

	


	}

}

else

{

   echo "error";

}

            ?>
		
 				<h4>Course Name: <?php echo $course2 ?></h4>
 				<h6>id:9374978785</h6>
 				
 			</div>
 			<div class="col-md-3 room-right">
 				
 				<a href="details.php" class="view">Details</a>
 			</div>
 			<div class="clearfix"></div>
 		</div>





		 <div class="rom-btm">
 			<div class="col-md-3 room-left">
 				<img src="logo.png" class="img-responsive" alt="">
 			</div>
 			<div class="col-md-6 room-midle">
 				<h4>Course Name: Biology</h4>
 				<h6>id:9374978785</h6>
 				
 			
 			</div>
 			<div class="col-md-3 room-right">
 				
 				<a href="details.php" class="view">Details</a>
 			</div>
 			<div class="clearfix"></div>
 		</div>


		 <div class="rom-btm">
 			<div class="col-md-3 room-left">
 				<img src="logo.png" class="img-responsive" alt="">
 			</div>
 			<div class="col-md-6 room-midle">
 				<h4>Course Name: English</h4>
 				<h6>id:9374978785</h6>
 				
 			
 			</div>
 			<div class="col-md-3 room-right">
 				
 				<a href="details.php" class="view">Details</a>
 			</div>
 			<div class="clearfix"></div>
 		</div>

		      <!--- /footer ---->
			  <?php include 'footer.php'; ?>
    