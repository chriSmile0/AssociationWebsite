<?php
//Creer un cookie
setcookie("rememberMe","true",time()+(365*2*3600),'/');
$_COOKIE["rememberMe"];

//Recuperer et traiter les données du formulaire//

$nom = $prenom = $messag = $email = $sujetmessage = "Question";
$nomErr = $prenomErr = $emailErr = "";

$nomresa = $prenomresa = $emailresa = $joursreserver =  "";
$nomresaErr = $prenomresaErr = $emailresaErr = "";


function test_input($data){
    $data = htmlspecialchars($data);
    return $data;
}



//SI il veut rester anonyme
if (isset($_POST['submitcontact'])) #On a cliqué sur le premier bouton
{
    $ano = $_POST['anonyme'];
    if($ano === "Oui"){
        if(empty($_POST['message'])){
            $messag = "";
        }
        else {
            $messag = test_input($_POST['message']);
        }
    }
//SI il ne veut pas rester anonyme
    else {
        if(empty($_POST['nom'])){
            $nom = "";
        }
        else {
            $nom = test_input($_POST['nom']);
            if(!preg_match("/^[a-zA-Z- ]{1,50}$/",$nom)){
                $nomErr = "Espace et tiret autorités ainsi que les majuscules";
            }
        }

        if(empty($_POST['prenom'])){
            $prenom = "";
        }
        else {
            $prenom = test_input($_POST['prenom']);
        
            if(!preg_match("/^[a-zA-Z- ]{1,50}$/",$prenom)){
                $prenomErr = "Espace et tiret autorités ainsi que les majuscules";
            }
        }

        if(empty($_POST['email'])){
            $email = "";
        }   
        else {
            $email = test_input($_POST['email']);
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $emailErr = "Format d'email invalide";
            }
        }
        if(empty($_POST['message'])){
            $messag = "";
        }
        else {
            $messag = test_input($_POST['message']);
        }
    }

    $sujetmessage = $_POST['sujetmessage'];

    try {
        $bdd= new PDO("mysql:host=localhost", 'root', '');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE  DATABASE IF NOT EXISTS myDb";
        $bdd->exec($sql);
        echo "success database";
        }
    catch(PDOException $e){}
    
    $bdd = null;

    try{
        $bdd = new PDO('mysql:host=localhost;dbname=myDb;charset=utf8', 'root', '');
        $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE TABLE IF NOT EXISTS Contacts (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nom VARCHAR(30) NOT NULL,
            prenom VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            sujetmessage VARCHAR(13),
            messag TEXT
            )";
        
           
            $bdd->exec($sql);
            echo "success create table";
            }
    catch(PDOException $e){}
     
    $bdd = null;
 
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=myDb;charset=utf8', 'root', '');
       
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO Contacts (nom, prenom, email,sujetmessage,messag)
        VALUES ('$nom','$prenom','$email','$sujetmessage','$messag')";
        $bdd->exec($sql);
        echo "success insert values";
        
        }
    catch(PDOException $e){}

    $bdd = null;
}

elseif (isset($_POST['submitresa'])){
    if(empty($_POST['nomresa'])){
        $nomresa = "";
    }
    else {
        $nomresa = test_input($_POST['nomresa']);
        if(!preg_match("/^[a-zA-Z- ]{1,50}$/",$nomresa)){
            $nomresaErr = "Espace et tiret autorités ainsi que les majuscules";
        }
    }

    if(empty($_POST['prenomresa'])){
        $prenomresa = "";
    }
    else {
        $prenomresa = test_input($_POST['prenomresa']);
        
        if(!preg_match("/^[a-zA-Z- ]{1,50}$/",$prenomresa)){
            $prenomresaErr = "Espace et tiret autorités ainsi que les majuscules";
        }
    }

    if(empty($_POST['emailresa'])){
        $emailresa = "";
    }
    else {
        $emailresa = test_input($_POST['emailresa']);
        if(!filter_var($emailresa,FILTER_VALIDATE_EMAIL)){
            $emailresaErr = "Format d'email invalide";
        }
    }
    $joursreserver = $_POST['joursreserver'];

    try {
        $bdd= new PDO("mysql:host=localhost", 'root', '');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE  DATABASE IF NOT EXISTS myDb";
        $bdd->exec($sql);
        }
    catch(PDOException $e){}
    
    $bdd = null;
   
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=myDb;charset=utf8', 'root', '');
        $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE TABLE IF NOT EXISTS Reservation (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nomresa VARCHAR(30) NOT NULL,
            prenomresa VARCHAR(30) NOT NULL,
            emailresa VARCHAR(50),
            joursreserver VARCHAR(20)
            )";
            $bdd->exec($sql);
    }
    catch(PDOException $e){} 
        

        
    $bdd = null;

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=myDb;charset=utf8', 'root', '');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO Reservation (nomresa, prenomresa, emailresa,joursreserver)
        VALUES ('$nomresa','$prenomresa','$emailresa','$joursreserver')";
        $bdd->exec($sql);
        }
    catch(PDOException $e){}
        
    
    $bdd = null;
}
?>

