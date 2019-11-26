<?php
//Creer un cookie
setcookie("rememberMe","true",time()+(365*2*3600),'/');
$_COOKIE["rememberMe"];

//Recuperer et traiter les données du formulaire//

$nom = $prenom = $messag = $email = $sujetmessage = "Question";
$nomErr = $prenomErr = $emailErr = "";

$nomresa = $prenomresa = $emailresa = $joursreserver =  "";
$nomresaErr = $prenomresaErr = $emailresaErr = "";

$nom_donnees = $prenom_donnees = $email_donnees = $sujetmessage_donnees = "";
$messag_donnees = $YourInput = "";

$nom_donnees_resa = $prenom_donnees_resa = $email_donnees_resa = "";
$YourInputResa = $joursreserver_donnees_resa = "";
        


function test_input($data) {
    $data = htmlspecialchars($data);
    return $data;
}



//SI il veut rester anonyme
if (isset($_POST['submitcontact'])) { #On a cliqué sur le premier bouton
    $ano = $_POST['anonyme'];
    if ($ano === "Oui") {
        if (empty($_POST['message']))
            $messag = "No";
        else 
             $messag = test_input($_POST['message']);
    }
//SI il ne veut pas rester anonyme
    else {
        if (empty($_POST['nom']))
            $nom = "No";
        else {
            $nom = test_input($_POST['nom']);
            if(!preg_match("/^[a-zA-Z- é]{1,50}$/",$nom))
                $nomErr = "Espace et tiret autorités ainsi que les majuscules";   
        }

        if (empty($_POST['prenom']))
            $prenom = "No";
        else {
            $prenom = test_input($_POST['prenom']);
            if(!preg_match("/^[a-zA-Z-é ]{1,50}$/",$prenom))
                $prenomErr = "Espace et tiret autorités ainsi que les majuscules";
        }

        if (empty($_POST['email']))
            $email = "No";
        else {
            $email = test_input($_POST['email']);
            if(!filter_var($email,FILTER_VALIDATE_EMAIL))
                $emailErr = "Format d'email invalide"; 
        }
        if (empty($_POST['message']))
            $messag = "No";
        else 
            $messag = test_input($_POST['message']);
    }
    $sujetmessage = $_POST['sujetmessage'];

    try {
        $bdd = new PDO('sqlite:' . dirname(__FILE__) . '/database.db');
        $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE TABLE IF NOT EXISTS Contacts (
            id INTEGER PRIMARY KEY AUTOINCREMENT ,
            nom VARCHAR(30) NOT NULL,
            prenom VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            sujetmessag VARCHAR(13),
            messag TEXT
            )";
            $bdd->exec($sql);
    
    }
    catch (PDOException $e){
        var_dump($e->getMessage());
    }

    try {
        $sql = "INSERT INTO Contacts (nom, prenom, email,sujetmessag,messag)
        VALUES ('$nom','$prenom','$email','$sujetmessage','$messag')";
        $bdd->exec($sql);
        }
    catch (PDOException $e){
        var_dump($e->getMessage());
    }

    try {
        $sql = "SELECT nom,prenom,email,sujetmessag,messag FROM Contacts 
        WHERE id IN (SELECT max(id) FROM Contacts)";
        $result  = $bdd->query($sql);
        $row = $result->fetch();
        $YourInput = "<h4>Vos données de contacts</h4>" ;
        $nom_donnees = "Nom : " . $row['nom'] . "<br>";
        $prenom_donnees = "Prenom : " . $row['prenom'] . "<br>";
        $email_donnees = "Email : " . $row['email'] . "<br>";
        $sujetmessage_donnees = "Sujet message : " . $row['sujetmessag'] . "<br>";
        $messag_donnees = "Message : " . $row['messag'] . "<br>";
    }
    catch(PDOEXCEPTION $e){
        var_dump($e->getMessage());
    }

    $bdd = null;
}

elseif (isset($_POST['submitresa'])) {
    if (empty($_POST['nomresa']))
        $nomresa = "";
    else {
        $nomresa = test_input($_POST['nomresa']);
        if (!preg_match("/^[a-zA-Z-é ]{1,50}$/",$nomresa))
            $nomresaErr = "Espace et tiret autorités ainsi que les majuscules";
    }

    if (empty($_POST['prenomresa']))
        $prenomresa = "";
    else {
        $prenomresa = test_input($_POST['prenomresa']);
        if (!preg_match("/^[a-zA-Z-é ]{1,50}$/",$prenomresa))
            $prenomresaErr = "Espace et tiret autorisés ainsi que les majuscules";
    }

    if (empty($_POST['emailresa']))
        $emailresa = "";
    else {
        $emailresa = test_input($_POST['emailresa']);
        if(!filter_var($emailresa,FILTER_VALIDATE_EMAIL))
            $emailresaErr = "Format d'email invalide";
    }
    $joursreserver = $_POST['joursreserver'];

    try {
        $bdd = new PDO('sqlite:' . dirname(__FILE__) . '/database.db');
        $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE TABLE IF NOT EXISTS Reservation (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            nomresa VARCHAR(30) NOT NULL,
            prenomresa VARCHAR(30) NOT NULL,
            emailresa VARCHAR(50),
            joursreserver VARCHAR(20)
            )";
            $bdd->exec($sql);
    }
    catch(PDOException $e){} 

    try {
       
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO Reservation 
        (nomresa, prenomresa, emailresa,joursreserver)
        VALUES ('$nomresa','$prenomresa','$emailresa','$joursreserver')";
        $bdd->exec($sql);
    }
    catch(PDOException $e){}

        try {
            $sql = "SELECT nomresa,prenomresa,emailresa,joursreserver FROM 
            Reservation WHERE id IN (SELECT max(id) FROM Reservation)";
            $result  = $bdd->query($sql);
            $row = $result->fetch();
            $YourInputResa = "<h4>Vos données de Reservation</h4>" ;
            $nom_donnees_resa = "Nom : " . $row['nomresa'] . "<br>";
            $prenom_donnees_resa = "Prenom : " . $row['prenomresa'] . "<br>";
            $email_donnees_resa = "Email : " . $row['emailresa'] . "<br>";
            $joursreserver_donnees_resa = "Jours reserver : " . $row['joursreserver'] . "<br>";
        }
        catch(PDOEXCEPTION $e){
            var_dump($e->getMessage());
        }
    $bdd = null;
}
?>

