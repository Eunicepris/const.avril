<?php session_start();
// $id=$_SESSION['EXPERT'];
// if(empty($_SESSION['PROFILE'])){
// 	header("location:form.php");
// }
// else
// {

// }
?>
<!DOCTYPE html>
<html>
<head>
	<title>expertss</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<style>
	.polaroid {
	  margin-top:100px; 
	  width: 360px;
	  height: 380px;
	  box-shadow: 0 0 20px gray;
	  text-align: center;
	  padding:45px;
	  color: #fff;
	  font-size: 25px;
	  font-weight: bold;
	  margin-left: 250px;
	  margin-bottom: 70px;
	}
	.imgm {
			height: 170px;
			width: 100%;
	}

	.valsubs {
		margin-left: -250%;
		margin-top: 50px;
		margin-bottom: 20px;
		background-color:#131a2f;
		padding-top: 10px;
		padding-bottom: 10px;
		padding-left: 20px;
		padding-right: 20px;
		color: #fff;
		font-weight: bold;
		border-width: 2px;
		border-style: solid;
		border-color: #131a2f;
		text-align: center;

		/*margin-top: 50%;*/
	}
	.expertss {
		color: #fff;
		font-weight: bold;
		font-size: 50px;
		text-align: center;
		margin-left: 10px;
		margin-top: 25px;
		margin-bottom:25px;
		font-family: Calling Angels Personal Use;
	}
	.spacers {
		background-color: #fff;
		width: 100px;
		font-weight: bold;
		height: 3px;
		margin-left: 500px;
		margin-top: 10px;
	}

	</style>
</head>
<body style="background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url(img/workplace-615375__340.jpg); background-size: cover;">

	<div class="container">
		<h1 class="expertss">expertss</h1>
		<div class="spacers"></div>
		<div class="row">
		


			<?php
			require 'admin/database.php';
			$db = Database::connect();
			$statement = $db ->query("SELECT * FROM experts");
			while($experts = $statement -> fetch()) { 

			?>

				<div class="col-lg-6 col-md-6 col-sm-12 polaroid"><br>
				<img src="images/<?php echo $experts['image'] ?>  " class="imgm"><br>
				<h5><i class="fas fa-user"></i>Nom: <?php echo $experts["nom"] ?></h5>

				<h5><i class="fas fa-user"></i> Specialiste <?php echo $experts["specialiste"] ?> </h5>

				<h5><i class="fas fa-envelope-open-text"></i>desciption: <?php echo $experts["description"] ?></h5>
				</div>

			<?php
				}
			?>
		</div>
		
	</div>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>