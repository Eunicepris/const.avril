<?php 
// ini_set('display_errors','off');
require 'admin/database.php';
$db = Database::connect();
    session_start();
    include 'admin/fichier.php';

    // if(empty($_SESSION['PROFILE'])){
    //   header("location: oppor.php");
    // }
    // else
    // {
	
    
    // }

    
	if (isset($_POST["envoyer"])) {
  // var_dump($_FILES);

		$errors = [];
		extract($_POST);
		if (!empty($commentaire)) {
      $image = $_FILES['image']['name'];
      $image_upload = $_FILES['image']['tmp_name'];
      $store_image = "im/$image";
      move_uploaded_file($image_upload,$store_image);

				   $db_table = "maquette";

				   $db_values = "commentaire, image";

				   $db_inconnu = "?,?";

				   $data_values = [
				  		$_POST['commentaire'],
              $_POST['image'],
              
              ];
             
				  	$result = insertData($db_table,$db_values,$db_inconnu,$data_values,$db);
				   		if ($result) {
				   			$_SESSION['success']= true;
				   		}
				   		else{
				   			$_SESSION['error'] = true;
				   		}
			
		}else{
			$errors[] = "Tous les champs sont requis !";
        } 
     }	
    
	

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/i.css">

    <style>
      body{
        font-family: Caminata-One-demo-FFP;
        font-size: 22px;
      }
      .ss {
        border-width: 4px;
        border-style: solid;
        border-color: mediumpurple;
        padding: 30px;
        margin-top: 50px;
        height: 350px;
        padding-top: 40px;
        font-size: 20px;
      }

      .envoyers {
        padding-bottom: 10px;
        padding-top: 10px;
        padding-right: 50px;
        padding-left: 50px;
        color: #fff;
        font-weight: bold;
        background-color: mediumpurple;
        margin-left: 30px;
        border-width: 2px;
        border-color: mediumpurple;
        border-style: solid;
        margin-bottom: 10px;
        font-size: 15px;
      }
      .katie {
        text-align: center;
        margin-right: 300px;
        margin-left: 300px;
        font-family: Caminata-One-demo-FFP;
      }
      .dis {
        background-color: mediumpurple;
        padding-left: 50px;
        padding-right: 50px;
        padding-top: 10px;
        padding-bottom: 10px;
        color: #fff;
        font-weight: bold;
        margin-top: 10px;
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;
        text-align: center;
      }
    </style>
</head>
<body>
  
  <section style="background-image:linear-gradient(rgba(0,0,0,.4), rgba(0,0,0,.4)), url(images/slider-1_0.jpg); height: 600px; background-size: cover;">
    <div class="header">
        <ul>
        <li class="nav-item"><a href="index.php" >Acceuil</a></li>
          <li class="nav-item"><a href="oppor.php" >Notre Entreprise</a></li>
          <li class="nav-item"><a href="fich.php" >Nos maquettes</a></li>
          <li class="nav-item"><a href="promotion.php" >Nos Experts</a></li>
          <li class="nav-item"><a href="connexion.php" >Connexion</a></li>
          <li class="nav-item"><a href="deconnexion.php" >deconnexion</a></li>
</div>
    <div class="">
      <h2 class="plus">Design</h2>
      <h2 class="more">BUILDING</h2>
    </div>
  </section>
   
  <div class="container-fluid bg-light">
      <br><br>
      
      <div class="row">
               <p class="katie"> Katie Barnes
                Katie Barnes l'a enregistrée dans Web
                65
                This is our daily Website design inspiration article for our loyal readers. Every day we are showcasing a website design ideas whether live on app stores or only designed as concept.
              </p>
          
      </div>
      <br>
      <div class="divider"></div>
  </div>
      <div class="container-fluid">
          <br><br>
          <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-12">
                <img src="images/pl.png">
                <!-- <p class="dis">Pour toutes vos cité</p> -->
            </div>

            <div class="col-md-4 col-lg-4 col-sm-12">
                <img src="images/op.jpg" alt="" sizes="" srcset="">
                <!-- <div class="dis">Pour toutes vos cité</div> -->
            </div>

            <div class="col-md-4 col-lg-4 col-sm-12">
                <img src="images/maq.jpg" alt="" sizes="" srcset="">
                <!-- <p class="dis">Pour toutes vos cité</p> -->
            </div>
          </div>
 
      </div>
      <br><br><br><br>

      <div class="container-fluid bg-light">
        <div class="row">
  
                  <p class="katie">
                    Katie Barnes
                  Katie Barnes l'a enregistrée dans Web
                  65
                  This is our daily Website design inspiration article for our loyal readers. Every day we are showcasing a website design ideas whether live on app stores or only designed as concept.
                </p>
        </div>

        
    </div>

    <div class="container-fluid bg-light">
    <?php if(isset($errors)):?>
  		 <?php foreach ($errors as $error1): ?>
  		 	<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  <strong><?= $error1 ?></strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    	<span aria-hidden="true">&times;</span>
			  </button>
			</div>
  		 <?php endforeach ?>
	<?php endif?>
  		<h3 class="text-center">Veillez vous inscrire ici</h3>
  		
  		<?php if (isset($_SESSION['success'])): ?>

	  		<div class="alert alert-success" role="alert">
			  Vos données sont enregistrées avec succès, felicitations !!!
			  Cliques <a href="tableau.php">ici pour voir les inscrits</a>
			</div>
			<?php unset($_SESSION['success']) ?>

  		<?php endif ?>

  		<?php if (isset($_SESSION['error'])): ?>
  			<div class="alert alert-danger" role="alert">
			  Echec dans l'enregistrement des données !!!
			</div>
			<?php unset($_SESSION['error']) ?>
  			
  		<?php endif ?>
      <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 offset-5">
                  <form action="" method="post" enctype="multipart/form-data" class="ss">

                    <div class="form-group">
                      <label for="texte">Avez-vous deja une maquette?</label>
                      <textarea name="commentaire" class="form-control" type="text" placeholder="decrivez en quelque moi"></textarea>
                    </div>

                    <div class="form-group">
                      <label for="image">Text</label>
                      <input name="image" class="form-control" type="file">
                    </div>

                    <input type="submit" name="envoyer" value="envoyer" class="envoyers">
                    <br><br>
                  </form>
                </div>
              </div>
    </div>

    <?php require_once("footer.php") ?>

</body>
</html>