<html>
<head>
</head>
<body>
<?php

	$db=mysqli_connect("localhost","root","","qualitycontrol");

				if(isset($_POST['login'])){
					$email = mysqli_real_escape_string($db,$_POST['email']);
					$password = mysqli_real_escape_string($db,$_POST['password']);

					$c_password = md5($c_password);

					$query = ("SELECT * FROM `technicians` WHERE `email` = '$email' AND `password` = '$password'");
					$result2 = $db->query($query);
					if ($result2->num_rows > 0) {
						$_SESSION['permit'] = $result2->fetch_assoc();
						$usertype = $_SESSION['permit']['type'];
						header('location:home.html') ;
					}

				else{
					$_SESSION['msg']="login failed,invalid input";
					header('location:login.html');
				}
			}

  ?>
</body>
</html>
