//Mon JS
var regexEmail = /^[a-zA-Z0-9-_.]+@[a-z0-9-_.]+\.[a-z]{2,}$/;
var regexNomPrenom =  /^[a-zA-Z- ]{1,50}$/;
var regexMessage = /^[a-zA-Z0-9 '",áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ.-]{0,}$/;

let nomErr = "Entrer un nom valide";
let prenomErr = "Entrer un prenom valide";
let emailErr = "Entrer un email de la forme nom_Prenom@operateur.dom";

function colorError(champ,error) {
    if (error)
        champ.style.backgroundColor = "tomato";
    else 
        champ.style.backgroundColor = "";
}

//Verif Nom
function verifNom(champNom) {
   if (!regexNomPrenom.test(champNom.value)) {
       colorError(champNom,true);
       document.getElementById('errorNom').innerHTML = nomErr;
       return false;
   }
    else {
        colorError(champNom,false);
        return true;
    }
}
//verif Prenom
function verifPrenom(champPrenom){
   if (!regexNomPrenom.test(champPrenom.value)) {
       colorError(champPrenom,true);
       document.getElementById('errorPrenom').innerHTML = prenomErr;
       return false;
   }
    else {
        colorError(champPrenom,false);
        return true;
    }
}

//verif email
function verifEmail(champEmail) {
   if (!regexEmail.test(champEmail.value)) {
       colorError(champEmail,true);
       document.getElementById('errorEmail').innerHTML = emailErr;
       return false;
   }
    else {
        colorError(champEmail,false);
        return true;
    }
}

//verif message
function verifMessage(champMessage) {
   if (!regexMessage.test(champMessage.value)) {
       colorError(champMessage,true);
       return false;
   }
    else {
        colorError(champMessage,false);
        return true;
    }
}

//Verif form contatcs
function verifform(form) {
    var verifname = verifNom(form.nom)
    var veriffname = verifPrenom(form.prenom)
    var verifmessage = verifMessage(form.message)
    var verifemail = verifEmail(form.email)
    if (document.getElementById('Yes').checked) {
        verifname = true;
        veriffname = true;
        verifemail = true;
    } 
    else {  
        if(veriffname && verifname && verifmessage && verifemail)
            return true;  
        else    
             return false;
    }
}

//ANonymie
/*
La fonction AnoOui permet de cacher les champs inutiles pour la personne qui 
veut rester anonyme ('.style.display = "none";)
Mais aussi d'éviter le scénario suivant :
Imaginons qu'une personne mal-intentionée veut faire semblant d'etre anonyme
la fonction veriform ne verifiera donc pas les champ nom prenom et email
Exemple : je remplis email prenom et nom mais je passe ensuite en anonyme
et j'envoie le formulaire, mais grace la fonction anoOui 
le getElementById de chaque champ input me permet de remettre la valeur du 
champ a null donc de reinitialiser a chaque changement de bouton radio 
les champs qui étaient remplis ou non 
*/
function anoOui() {
    document.getElementById('Nom').style.display = "none";
    document.getElementById('nom').value = '';
    document.getElementById('Prenom').style.display = "none";
    document.getElementById('prenom').value = '';
    document.getElementById('Email').style.display = "none";
    document.getElementById('email').value = '';
}

function anoNon() {
    document.getElementById('Nom').style.display = "flex";
    document.getElementById('nom').value = '';
    document.getElementById('Prenom').style.display = "flex";
    document.getElementById('prenom').value = '';
    document.getElementById('Email').style.display = "flex";
    document.getElementById('email').value = '';
}

//SI jamais quelqu'un change le checked de la page la fonction du dessus fera quand meme ce que l'on veut 
if (document.getElementById('Yes').checked)
    anoOui();


function verifNomR(champNomR) {
    if (!regexNomPrenom.test(champNomR.value)) {
        colorError(champNomR,true);
        document.getElementById('errorNomR').innerHTML = nomErr;
        return false;
    }
    else {
     colorError(champNomR,false);
     return true;
    }
}
     //verif Prenom
function verifPrenomR(champPrenomR){
    if (!regexNomPrenom.test(champPrenomR.value)) {
        colorError(champPrenomR,true);
        document.getElementById('errorPrenomR').innerHTML = prenomErr;
        return false;
    }
    else {
        colorError(champPrenomR,false);
        return true;
    }
}
     
     //verif email
function verifEmailR(champEmailR) {
    if (!regexEmail.test(champEmailR.value)) {
        colorError(champEmailR,true);
        document.getElementById('errorEmailR').innerHTML = emailErr;
        return false;
    }
    else {
        colorError(champEmailR,false);
        return true;
    }
}

//Verif form resa
function verifformResa(form) {
    var verifnameresa = verifNomR(form.nomresa)
    var veriffnameresa = verifPrenomR(form.prenomresa)
    var verifemailresa = verifEmailR(form.emailresa)
    if (veriffnameresa && verifnameresa && verifemailresa)
        return true;
    else 
        return false;    
}

let i = 0;
function AjappelImg() {
    document.getElementById('recephoto').style.display = "block";
    i++;
    let request = new XMLHttpRequest()
    request.onreadystatechange = function() {
    if ((this.readyState === XMLHttpRequest.DONE ) && (this.status === 200)) {
        console.log(i);
        JSON.parse(this.responseText).items.forEach(item  => {
            let image = document.createElement('img');
            image.src = `http://ajax.jojotique.fr/img/${item.name}.jpg`;
            document.getElementById('recephoto').appendChild(image);
            image.style.width = "300px";
            image.style.height = "250px";
            image.style.border = "solid";
           });     
    };
}
request.open('GET','http://l2-serveur.jojotique.fr/pictures/' + i);
request.send()
//Enlever bouton , comme ça quand il n'y as plu de photo on a plu de clic 
if (i>3)
    document.getElementById('surprise').style.display = "none";
}


//Bouton de remonter qui s'affiche quand on scroll 
window.onscroll = function() {AfficherRemonter()};

function AfficherRemonter() {
    if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
        document.getElementById('top').style.display = "flex";
        document.getElementById('top_a').style.display = "block";
    } 
    else {
    document.getElementById('top').style.display = "none";
    document.getElementById('top_a').style.display = "none";
  }
}













