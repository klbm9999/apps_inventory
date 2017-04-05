<!DOCTYPE html>
<html>
<head>
	<title>Test mail</title>
</head>
<body>
	<h3>Apps Inventory</h3>
	<?php
		if ($c1!=null) {
			if($c2!=null) {
				echo "Project : ".$c1.", ".$c2."<br>";
			}
			else {
				echo "Project : ".$c1."<br>";
			}	
		}
		else {
			echo "Project : ".$c2."<br>";
		}
		echo "Description : ".$desc."<br>";
		echo "Name : ".$name."<br>";
		echo "Country : ".$country."<br>";
		echo "Email : ".$email."<br>";
		echo "Phone : ".$phone."<br>";
		echo "Company : ".$company."<br>";
		echo "Industry : ".$industry."<br>";
		echo "Hire Type : ".$r1."<br>";
	?>
</body>
</html>