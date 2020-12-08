<?php
//--Connexion au serveur BDD
$dns = ('mysql:host=localhost; dbname=id15561053_diaspogrant; charset=utf8');
$username = ('id15561053_guth');
$password = ('Diaspogrant000webhost_');
try{
    $bdd = new PDO ($dns, $username, $password);
    //echo "connection au serveur réussie !";
    }
    catch (PDOException $e)
    {
        printf("Impossible de se connecter au serveur : %s\n", $e->getMessage());
    }

//'PORT': '3307',

    // Fonctions permettant le minimum de securisation des données du formulaire
    function securisation($donnes){
        $donnes = trim($donnes);
        $donnes = stripslashes($donnes);
        $donnes = strip_tags(htmlspecialchars($donnes));
        return $donnes;
    }
?>