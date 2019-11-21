<?php include 'Contact.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet"/>
    <link rel="stylesheet" 
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" 
          rel="stylesheet">
    <title>Page du Site </title>
</head>
    
<body>
    <header id="H">
        <img src="Images_projet/apjv_logo_nb_vide.png">
        <h2 style="color:white;">Association pour la promotion du Jeux Video</h2>
        <nav>
            <a href="#A1">L'evenement</a>
            <a href="#A2">L'association</a>
            <a onclick="document.getElementById('R').style.display='block';" href="#R">Reservation</a>
            <a href="#C">Contacts</a>
        </nav>
    </header>



    <section>
        <h2>Présentation du festival </h2>
        <article id="A1">
                <p>
                Le Festival du Jeu est un évènement bisannuel qui permet de
                faire le pont entre les jeunesgénérations et nos aîné(e)s. Il
                permettra aux petits-enfants de faire découvrir l’univers des
                jeux-vidéos à leurs grands-parents.À travers un large panel de
                jeux, anciens comme récents, on pourra couvrir l’ensemble de la
                sphère vidéoludique. Il permet également, avec la réalité 
                virtuelle et l’utilisation de manettes adaptées, d’ouvrir 
                l’action aux personnes âgées avec des troubles de la mobilité 
                pour qu’ils puissent participer pleinement à l’évènement. Venez
                en famille à cet évènement sous le symbole de la rencontre et 
                du partage.
                </p>
            <div class="container2">
                <aside id="carte">
                    <h4>Lieu</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2638.8762425083573!2d7.6849244514398505!3d48.59306842720325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796b7b7fa93a565%3A0x10a183f609a4fe1c!2sZ%C3%A9nith%20de%20Strasbourg!5e0!3m2!1sfr!2sfr!4v1571332477621!5m2!1sfr!2sfr">
                    </iframe>
                    <h4>Date</h4>
                    <p>Du 23 au 24 Novembre</p>
                </aside>
                <aside id="prog">
                    <h4>Programme</h4>
                        <h4>23 Novembre</h4>
                            <ul>
                                <li>10h: Presentation de l'histoire du 
                                    Jeu Video
                                </li>

                                <li>12h: Grand repas festif avec des animations
                                    presenter par notre equipe
                                </li>
                                <li>14h: Intervention d'un des fondateurs de 
                                    Nintendo
                                </li>
                                <li>16h: Projection sur grand ecran du film 
                                    "Pixels"
                                </li>
                                <li>18h: Plusieurs parties de Jeux d'arcades 
                                    jouées par des champions de France
                                </li>
                                <li>19h: Distribution de souvenirs et de 
                                    tombola
                                </li>
                                <li>20h: Resultat de la tombola et buvette</li>
                            </ul>
                        <h4>24 Novembre</h4>
                            <ul>
                                <li>10h: Accueil de la part de notre equipe 
                                    avec des cadeaux pour tout le monde 
                                </li>
                                <li>12h: Grand repas festif avec des animations
                                    presenter par notre equipe
                                </li>
                                <li>14h: Atelier deguisement et maquillage pour
                                    vous glisser dans la peau de vos personnages préférés
                                </li>
                                <li>16h: Intervention d'un grand patron du Jeu
                                     Video en France
                                </li>
                                <li>18h: Intervention de notre equipe et de 
                                    passionés reunis ici par leur passion commune
                                </li>
                                <li>20h: Fermeture du festival avec dedicaces 
                                    et autographe avec nos intervenants du 
                                    week end
                                </li>
                            </ul>
                </aside>
            </div>
        </article>
        <h2>Présentation de l’association</h2>
        <article id="A2">
            <p>
            L’association APJV est une association privée à but non lucratif
            pour la promotion des jeux-vidéos. Elle organise régulièrement des
            évènements pour faire découvrir ou redécouvrir le monde 
            vidéoludique aux gamers comme aux néophytes.À travers son action, 
            elle souhaite toucher de nombreux publiques : enfants, personnes 
            âgées, adultes isolés... et ainsi faire grandir la communauté du
            gaming français pour une plus grande inclusion. Elle souhaite aussi
            , en travaillant avec des personnes en situation de handicap, 
            permettre l’évolution du matériel et des façon de créer pour une 
            plus grande accessibilite
            </p>
        </article>
        <h2>Présentation des membres</h2>
            <div class="container">
                <aside>
                    <h4>G4m3ur</h4>
                    <img src="Images_projet/G4m3ur.jpg">
                        <p>
                        Président de l’association. La manette est presque 
                        devenue une extension de son corps. Son habilité
                        aux FPS frise le super pouvoir. Il a été dit qu’on
                         l’aurait aperçu une fois en dehors de sa cave.
                        </p>
                </aside>
                <aside>
                    <h4>Steampunkette</h4>
                    <img src="Images_projet/Steampunkette.jpg">
                    <p>
                    Trésorière de l’association. Fan de l’univers steampunk, de
                    cyberpunk et de cosplay. Pour elle l’important c’est le 
                    fun. Elle souhaite que le monde vidéoludique soit plus 
                    ouvert et plus accessible à tous.
                    </p>
                </aside>
                <aside>
                    <h4>Gandoulf</h4>
                    <img src="Images_projet/Gandoulf.jpg">
                    <p>
                    Simple mortel de l’association. Il essaye de faire croire
                    que sa barbe est vraie, même si personnen’est dupe. Fan de
                    jeux de rôle sur plateau comme à l’écran, il connaît tous 
                    les sorts de Donjons et Dragons par coeur !
                    </p>
                </aside>
            </div>
    </section>

    <h2>Nous contacter</h2>
    <form name="contacts" id="C" method="POST" onsubmit="return verifform(this)">
        <fieldset>
            <div id="Nom">
                <label for="nom">Nom</label>
                <input  id="nom" 
                        type="text" 
                        name="nom" 
                        aria-labelledby="nom">
                <span class="error" id="errorNom"></span>
                <span class="error"> <?php echo $nomErr;?></span>
            </div>
            <div id="Prenom">
                <label for="prenom">Prenom</label>
                <input id="prenom" 
                       type="text" 
                       name="prenom" 
                       aria-labelledby="prenom">
                <span class="error" id="errorPrenom"></span>
                <span class="error"> <?php echo $prenomErr;?></span>
            </div>
            <div id="Email">
                <label for="email">Mail</label>
                <input id="email" 
                       type="text" 
                       name="email" 
                       aria-labelledby="email">
                <span class="error" id="errorEmail"></span>
                <span class="error"> <?php echo $emailErr;?></span>
            </div>
            <div>
                <label for="sujetmessage">Sujet du message</label>
                <select name="sujetmessage"  aria-labelledby="sujetmessage">
                    <option value="question">Question</option>
                    <option value="reservaion">Reservation</option>
                    <option value="remarque">Remarque</option>
                </select>
            </div>
            <div>
                <label for="message">Message</label>
                <textarea name="message"  aria-labelledby="message"></textarea>
            </div>
            <div>
                <label for="anonyme">Rester Anonyme ?</label>
                <input id="Yes" 
                       class="radio_input" 
                       type="radio" 
                       name="anonyme" 
                       value="oui" 
                       onclick="anoOui()"  
                       aria-labelledby="anonyme" checked>Oui
                <input id="No" 
                       class="radio_input" 
                       type="radio" 
                       name="anonyme" 
                       value="non"  
                       onclick="anoNon()"  
                       aria-labelledby="anonyme ">Non
            </div>
            <button name="submitcontact"
              type="submit" value="Envoyercontacts">Envoyer</button>
        </fieldset>
    </form>
    <form name="resa" id="R" method="POST" 
          onsubmit="return veriffromResa(this)">
        <fieldset>
            <h2>Reserver</h2>
            <div>
                <label for="nomresa">Nom</label>
                <input name="nomresa" 
                       type="text" 
                       onblur="verifNom(this)"  
                       aria-labelledby="nomresa"
                       required aria-required="true">
                <span class="error" id="errorNomResa"></span>
                <span class="error"> <?php echo $nomresaErr;?></span>
            </div>
            <div>
                <label for="prenomresa">Prenom</label>
                <input name="prenomresa" 
                       type="text" 
                       onblur="verifPrenom(this)"  
                       aria-labelledby="prenomresa"
                       required aria-required="true">
                <span class="error" id="errorPrenomResa"></span>
                <span class="error"><?php echo $prenomresaErr;?></span>
            </div>
            <div>
                <label for="emailresa">Mail</label>
                <input name="emailresa" 
                       type="text" 
                       onblur="verifEmail(this)"  
                       aria-labelledby="emailresa"
                       required aria-required="true">
                <span class="error" id="errorEmailResa"></span>
                <span class="error"> <?php echo $emailresaErr;?></span>
            </div>
            <div>
                <label for="joursreserver">Jour(s) reservé(s)</label>
                    <select name="joursreserver"  
                            aria-labelledby="joursreserver">
                        <option value="23 Novembre">23 Novembre</option>
                        <option value="24 Novembre">24 Novembre</option>
                        <option value="23/24 Novembre">23/24 Novembre</option>
                    </select>
             </div>
             <button name="submitresa" 
                    type="submit" value="Envoyer_resa">Envoyer</button>
        </fieldset>
    </form>
    
    <div id="top">
        <a id="top_a" href="#H">
            <i id="top_a_i" class="material-icons">expand_less</i>
        </a>
    </div>
    <button name="surprise" 
            id="surprise" 
            type="submit" 
            value="Surprise" 
            onclick="AjappelImg()">Photos des precedents festivals
    </button>
    <p id="recephoto"></p>
                    
    <footer>
        <span>Nos Reseaux Sociaux</span>
        <br>
        <a href="http://www.facebook.com" target="_blank" title="Facebook">
        <!--_blank sert a ouvrir la page facebook sur un autre onglet-->
            <i class="fa fa-facebook-square" style="font-size:40px;"></i>
        </a>
        <a href="http://www.twitter.com" target="_blank" title="Twitter">
        <!--_blank sert a ouvrir la page facebook sur un autre onglet-->
            <i class="fa fa-twitter-square" style="font-size:40px;"></i>
        </a>
        <a href="http://www.instagram.com" target="_blank" title="Instagram">
        <!--_blank sert a ouvrir la page facebook sur un autre onglet-->
            <i class="fa fa-instagram" style="font-size:40px"></i>
        </a>
    </footer>
    <script src="mon_js.js"></script>
</body>
</html>