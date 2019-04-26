<?php 
require 'admin/database.php';

if(isset($_POST))
{
  $email = verifyInput($_POST['email']);
  $password = verifyInput($_POST['password']);
}

$connexion = Database::connect();
$opportune = $connexion ->prepare("SELECT * FROM users WHERE email = ? AND password = ? ");

$opportune ->execute(array($email, $password));
if ($exist = $opportune ->fetch()) {
  session_start();
  $_SESSION['PROFILE'] = $exist['email'];
  $_SESSION['PROFILE'] = $exist['nom'];

  header("location:oppor.php");
}
else
{
  header("location:form.php");
}
  function verifyInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

?>