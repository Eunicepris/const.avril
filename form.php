<?php  require 'securite.php' ?>
<?php 

require 'admin/database.php';
$connexion = Database::connect();
	session_start();
    include 'admin/inscr.php';

	if (isset($_POST["envoi"])) {


		$errors = [];
		extract($_POST);
		if (!empty($nom) && !empty($prenom) && !empty($contact) && !empty($commune) && !empty($email) && !empty($password)) {


				   $db_table = "users";

				   $db_values = "nom, prenom, contact, commune, email, password";

				   $db_inconnu = "?,?,?,?,?,?";

				   $data_values = [
				  		$_POST['nom'],
				  		$_POST['prenom'],
				  		$_POST['contact'],
				  		$_POST['commune'],
						$_POST['email'],
						$_POST['password'],
				
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
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
		
	  		
			<?php unset($_SESSION['success']) ?>

  		<?php endif ?>

  		<?php if (isset($_SESSION['error'])): ?>
  			<div class="alert alert-danger" role="alert">
			  Echec dans l'enregistrement des données !!!
			</div>
			<?php unset($_SESSION['error']) ?>
  			
		  <?php endif ?>
		  
		  <?php 
      header("location:form.php");
	  ?>
        <div class="row">
            <div class="col-md-8 col-lg-8 col-sm-12 offset-2 shadow mp-8 mt-5">
            <form action="auth.php" method="post">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" class="form-control" placeholder="Votre nom">
                </div>
                  
                <div class="form-group">
                    <label for="prenom">Prenom</label>
                    <input type="text" name="prenom" class="form-control" placeholder="Votre prenom">
                </div>
                      
                <div class="form-group">
                    <label for="contact">Contact</label>
                    <input type="number" name="contact" class="form-control" placeholder="Votre contact">
                </div>

                <div class="form-group">
                    <label for="commune">Commune</label>
                    <input type="text" name="commune" class="form-control" placeholder="Votre localisation">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Votre email">
                </div>
                      
                <div class="form-group">
                    <label for="password">Mot de Passe</label>
                    <input type="password" name="password" class="form-control" placeholder="Votre password">
                </div>
                <button type="submit" class="btn btn-primary my-2 btn-block" name="envoi">Submit</button>
            </form>                
            </div>
        </div>
    </div>
    
</body>
</html>