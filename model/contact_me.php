<?php

    session_start();

    include 'connexion_bdd.php';
        
    $name = $_POST['name'];
    $email_address = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    $_SESSION['ENVOI'] = '1';
        
    //$_SESSION['ENVOI'] = '0';
        
    
    


                
    //Insertion 
    $requete="insert into contact(nom, email, telephone, message, date)values(:A,:B,:C,:D,CURRENT_TIMESTAMP)"; 
    
    //Préparation de la requete
    $stmt=$bdd->prepare($requete);
    $stmt->bindParam(':A', $name,PDO::PARAM_STR);
    $stmt->bindParam(':B', $email_address,PDO::PARAM_STR);
    $stmt->bindParam(':C', $phone,PDO::PARAM_STR);
    $stmt->bindParam(':D', $message,PDO::PARAM_STR);
    //Execution de la requete
    $stmt->execute();
        
    $url = "../index.php";
        
    header("location: $url");

?>