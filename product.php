<?php

	$db=mysqli_connect("localhost","root","","qualitycontrol");


					if(isset($_POST['save'])){
    $product=$_POST['product'];
    $batchno=$_POST['batchno'];
		$pumpstation=$_POST['pumpstation'];
    $tankno=$_POST['tankno'];
		$labno=$_POST['labno'];
    $datesampled=$_POST['datesampled'];
    $timesampled=$_POST['timesampled'];
    $quantityofbatch=$_POST['quantityofbatch'];
    $quantityreceived=$_POST['quantityreceived'];
    $certificatenumber=$_POST['certificatenumber'];


			$sql = "INSERT INTO `products`(`product`,`batch_no`,`pump_station`,`tank_no`,`lab_no`,`date_sampled`,`time_sampled`,`quantity_of_batch`,`quantity_Received`,`certificate_number`)
      VALUES ('$product','$batchno','$pumpstation','$tankno','$labno','$datesampled','$timesampled','$quantityofbatch','$quantityreceived','$certificatenumber')";
			$result = $db->query($sql);
			if ($result) {
				header('location:home.html');
			}
			else{
				echo "Error:" .$sql . "<br>" . $db -> error;
			}


		}

?>
