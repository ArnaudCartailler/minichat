<?php

  try{

  	$bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', '');

  }

  catch(Exception $e){

          die('Erreur : '.$e->getMessage());
  }



  if(!empty($_POST["pseudo"]) AND $_POST['message']){

    $req = $bdd->prepare('INSERT INTO minichat (pseudo, message) VALUES(?, ?)');
    $req->execute(array($_POST['pseudo'], $_POST['message']));

  } else{

    echo "";
  }


  header('Location: minichat.php');
?>
