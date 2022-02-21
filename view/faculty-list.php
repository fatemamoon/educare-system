<?php
	require("faculty/model/db.php")
?>
<link rel="stylesheet" href="facultylist.css">

<div class="container">
 	<div class="holiday">


 		<h3>Faculty List</h3>
		 
    

 		<div class="rom-btm">
 			<div class="col-md-3 room-left">
 				<img src="logo.png" class="img-responsive" alt="">
 			</div>
 			<div class="col-md-6 room-midle">
			<?php

$connection = new db();

$conobj=$connection->OpenCon();



$userQuery=$connection->ViewProfile($conobj,"faculty", "meem");



if($userQuery !== false && $userQuery->num_rows > 0)

{

	while($row = $userQuery->fetch_assoc())

	{         

		$fname1 = $row["fname"];

		$lname1 = $row["lname"];

	


	}

}

else

{

   echo "error";

}

            ?>
			 

 				<h4>Faculty Name:<?php echo $fname1." ".$lname1?></h4>
 				<h6>id:9374978785</h6>
 				<p><b>DEPT:</b> Physics</p>
 			
 			</div>
 			<div class="col-md-3 room-right">
 				
 				<a href="facultylistdetails.php" class="view">Details</a>
 			</div>
 			<div class="clearfix"></div>
 		</div>



		 <?php

$connection = new db();

$conobj=$connection->OpenCon();



$userQuery=$connection->ViewProfile($conobj,"faculty", "mim");



if($userQuery !== false && $userQuery->num_rows > 0)

{

	while($row = $userQuery->fetch_assoc())

	{         

		$fname2= $row["fname"];

		$lname2 = $row["lname"];

	


	}

}

else

{

   echo "error";

}

            ?>
			 



		 <div class="rom-btm">
 			<div class="col-md-3 room-left">
 				<img src="logo.png" class="img-responsive" alt="">
 			</div>
 			<div class="col-md-6 room-midle">

 				<h4>Faculty Name:<?php echo $fname2." ".$lname2?> </h4>
 				<h6>id:9374978785</h6>
 				<p><b>DEPT:</b> Chemistry</p>
 			
 			</div>
 			<div class="col-md-3 room-right">
 				
 				<a href="facultylistdetails.php" class="view">Details</a>
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



$userQuery=$connection->ViewProfile($conobj,"faculty", "mimi");



if($userQuery !== false && $userQuery->num_rows > 0)

{

	while($row = $userQuery->fetch_assoc())

	{         

		$fname3= $row["fname"];

		$lname3 = $row["lname"];

	


	}

}

else

{

   echo "error";

}

            ?>
			 





 				<h4>Faculty Name:<?php echo $fname3." ".$lname3?> </h4>
 				<h6>id:9374978785</h6>
 				<p><b>DEPT:</b> Math</p>
 			
 			</div>
 			<div class="col-md-3 room-right">
 				
 				<a href="facultylistdetails.php" class="view">Details</a>
 			</div>
 			<div class="clearfix"></div>
 		</div>


		 <div class="rom-btm">
 			<div class="col-md-3 room-left">
 				<img src="logo.png" class="img-responsive" alt="">
 			</div>
 			<div class="col-md-6 room-midle">


			 <div class="rom-btm">
 			<div class="col-md-3 room-left">
 				<img src="logo.png" class="img-responsive" alt="">
 			</div>
 			<div class="col-md-6 room-midle">
			<?php





			 
	

$connection = new db();

$conobj=$connection->OpenCon();



$userQuery=$connection->ViewProfile($conobj,"faculty", "Dr ar");



if($userQuery !== false && $userQuery->num_rows > 0)

{

	while($row = $userQuery->fetch_assoc())

	{         

		$fname4 = $row["fname"];

		$lname4 = $row["lname"];

	


	}

}

else

{

   echo "error";

}

            ?>
			 

 				<h4>Faculty Name:<?php echo $fname4." ".$lname4?></h4>
 				<h6>id:9374978785</h6>
 				<p><b>DEPT:</b> </p>

	
				 </div>
 			<div class="col-md-3 room-right">
 				
 				<a href="facultylistdetails.php" class="view">Details</a>
 			</div>
 			<div class="clearfix"></div>
 		</div>

 			