<?php 

ini_set('display_errors','off');

require 'admin/database.php';
$connexion = Database::connect();
    session_start();
    include 'admin/formul.php';
    
    // if(empty($_SESSION['PROFILE'])){
    //   header("location:oppor.php");
    // }
    // else
    // {
    
    // }
	if (isset($_POST["envoyer"])) {

    $errors = [];
  
  
		extract($_POST);
		if (!empty($comment)) {
      
     $photo = $_FILES['photo']['name'];
     $image_upload = $_FILES['photo']['tmp_name'];
     $store_image = "img/$photo";
     move_uploaded_file($image_upload,$store_image);

				   $db_table = "maison";

				   $db_values = "comment, photo";

				   $db_inconnu = "?,?";

				   $data_values = [
				  		$_POST['comment'],
				  		$_POST['photo'],
              ];

              
        				   		$result = insertData($db_table,$db_values,$db_inconnu,$data_values,$connexion);
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
    <!-- <link rel="stylesheet" href="css/footer.css"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/i.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
  <section style="background-image:linear-gradient(rgba(0,0,0,.4), rgba(0,0,0,.4)), url(images/head.jpg); height: 600px; background-size: cover;">
    <div class="header">
        <ul>
          <li class="nav-item"><a href="index.php" >Acceuil</a></li>
          <li class="nav-item"><a href="" >Notre Entreprise</a></li>
          <li class="nav-item"><a href="fich.php" >Nos maquettes</a></li>
          <li class="nav-item"><a href="promotion.php" >Nos Experts</a></li>
          <li class="nav-item"><a href="connexion.php" >Connexion</a></li>
          <li class="nav-item"><a href="deconnexion.php" >deconnexion</a></li>      
        </ul>
</div>
    <div class="">
      <h2 class="plus">Esthitou Bat</h2>
      <h2 class="more">BUILDING</h2>
    </div>

    
  </section>
   <br><br>
  <div class="container">
      <div class="row">
          <div >
                <p class="para">
                Katie Barnes
                Katie Barnes l'a enregistrée dans Web
                65
                This is our daily Website design inspiration article for our loyal readers. Every day we are showcasing a website design ideas whether live on app stores or only designed as concept.
              </p>
          </div>
      </div>
  </div>
  <br>
      <div class="divider"></div>
      <br><br>

      <div class="container-fluid">
          <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-12">
                <img src="images/lou.jpg" class="img-design img-rounded">
                <p>Cités avec jardin pour tous</p>
            </div>

            <div class="col-md-4 col-lg-4 col-sm-12">
                <img src="images/cit.jpg" alt="" sizes="" srcset="" class="img-design">
                <p>Pour toutes vos cité</p>
            </div>

            <div class="col-md-4 col-lg-4 col-sm-12">
                <img src="images/ci.jpg" alt="" sizes="" srcset="" class="img-design">
                <p>Pour toutes vos cité</p>
            </div>
          </div>
 
      </div>

      
      <div class="container-fluid">
            <div class="row">
              <div class="col-md-4 col-lg-4 col-sm-12">
                  <img src="images/mi.jpg" alt="" sizes="" srcset="" class="img-design">
                  <p>Pour toutes vos cité</p>
              </div>
  
              <div class="col-md-4 col-lg-4 col-sm-12">
                  <img src="images/du.jpg" alt="" sizes="" srcset="" class="img-design">
                  <p>Pour toutes vos cité</p>
              </div>
  
              <div class="col-md-4 col-lg-4 col-sm-12">
                  <img src="images/dup.jpg" alt="" sizes="" srcset="" class="img-design">
                  <p>Pour toutes vos cité</p>
              </div>
            </div>
   
        </div>

        <div class="container-fluid">
                <div class="row">
                  <div class="col-md-4 col-lg-4 col-sm-12">
                      <img src="images/lp.jpg" alt="" sizes="" srcset="" class="img-design">
                      <p>Pour toutes vos cité</p>
                  </div>
      
                  <div class="col-md-4 col-lg-4 col-sm-12">
                      <img src="images/vill.jpg" alt="" sizes="" srcset="" class="img-design">
                      <p>Pour toutes vos cité</p>
                  </div>
      
                  <div class="col-md-4 col-lg-4 col-sm-12">
                      <img src="images/vl.jpg" alt="" sizes="" srcset="" class="img-design">
                      <p>Pour toutes vos cité</p>
                  </div>
                </div>
       
            </div>
            <br><br>
            <div class="container-fluid" style="background-color: #eee;"><br><br>
              <p class="paragraphes">Ces modèles ne vous conviennent peut etre pas , heureusement vous avez la possibilité de nous décrire de nous décrire tous ce dont vous avez bésoins dans la maison de vos reves.Si c'est le cas , remplissez le formulaire suivant svp!</p>
              <h1 class="title">JE DECRIS LA MAISON DE MES REVES</h1>
              <div class="col-lg-3 col-md-3 col-sm-12 offset-5">
                
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
  		
  		<?php if (isset($_SESSION['success'])): ?>

	  		<div class="alert alert-success" role="alert">
			  Vos données sont enregistrées avec succès, felicitations !!!
			  Cliques <a href="tableau.php">ici pour voir les inscrits</a>
			</div>
			<?php unset($_SESSION['success']) ?>

  		<?php endif ?>

  		<?php if (isset($_SESSION['error'])): ?>
  			<div class="alert alert-danger" role="alert">
			  Echec dans l'enregistrement des données :)
			</div>
			<?php unset($_SESSION['error']) ?>
  			
  		<?php endif ?>
              <div class="row">
               <form method="post" enctype="mulipart/form-data" class="formulaire">
                  <div class="form-group">
                    <label>Décrivez la maison de votre choix :</label>
                    <textarea type="text" name="comment" class="form-control" placeholder="exprimez vous">
                      
                    </textarea>
                  </div>                  
                  <div class="form-group">
                    <label>Photo de votre maison de reve :</label>
                      <input type="file" name="photo" placeholder="Choisissez votre fichier" class="form-control">
                  </div>
                  <button type="submit" class="envoyer" value="Envoyer" name="envoyer">Submit</button>


                </form>
              </div>
            </div>
            </div>
       <?php require_once("footer.php") ?>
</body>
</html>