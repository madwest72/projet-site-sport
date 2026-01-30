<?php /* Connecter notre BDD Ã notre site*/

    try{
        $user = "root";
        $pass = "";
        $bdd = new PDO("mysql:host=localhost;dbname=mm", $user,$pass);

    } catch(PDOException $e) {
     print "Erreur !:". $e->getMessage();
     die();

    }

?>