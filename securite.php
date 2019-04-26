<?php 
  require 'admin/database.php';
  session_start();
  if(empty($_SESSION['PROFILE'])){
  	header("location:form.php");
  }
  else
  {

  }
?>