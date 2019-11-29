Pour le telechargement du fichier je recommande de le cloner avec la clé https 


										Presentation du Projet: Festival du Jeu 

Pour ce projet du 'Festival du Jeu' il a fallu creer son site web sois en multi page sois en onepage
J'ai choisi la onepage malgrès que j'avais dit lors du TP1 que la multipage serait une bonne option.
Donc la onepage car nous n'avons pas beaucoup de contenu et que les pages qui tienne juste sur une taille d'ecran d'ordi
en ne scrollant que très peu c'est un peu special je trouve.
Donc j'ai choisi de faire un header composer du logo APJV noir et blanc sur un fond noir avec le titre principal 
qui decortique l'acronyme APJV.
Puis j'ai mi aussi dans le header la barre de navigation qui contient : 
Une ancre vers l'article qui contient la presentation du festival 
Une ancre vers l'article qui contient la presentation de l'association 
Une ancre vers le formulaire de contacts
Une ancre vers le formulaire de reservation qui lui va s'afficher dans la page que quand on aura cliquer une fois sur lui pas avant et donc quand on clique sur l'ancre
cela nous emmene donc au formulaire de reservation

Chacun des elements de la barre de navigation a effets de changement de couleur quand on le survol 

Pour ce qui es de la suite de la structure j'ai placé le festival en premier car c'est ça que cherche avant tout l'utilisateur
Puis j'ai mi la presentation de l'association juste après car c'est elle qui organise le 'Festival du Jeu'
Ensuite j'ai mi les membres de l'association et enfin les formulaires pusi le boutons qui affiche les images et enfin le footer avec les reseaux sociaux

La structure de l'article sur le festival contient un paragraphe en font roboto puis a gauche la Google Maps avec la Date du festival juste en dessous
puis a droite une liste un peu fantaisiste mais plutot exhaustive de ce qu'on pourrait retrouver dans ce genre d'évenement
La presentation de l'association est juste un paragraphe en roboto aussi 

La presentation des membres quand a elles est composé de 3 balises 'aside' mise les unes a cotés des autres avec a l'interieur l'image de chacun des membres et leurs textes associés

On attaque maintenant la partie interessante c'est à dire les formulaires.
Le premier formulaire, celui de Contacts est donc accesible par ancrage dans la barre de navigation et par scroll car il n'est pas caché lors du chargement de la page
Il est donc composé d'un champ nom, prenom, mail, question , message et 'Rester anonyme ?' 
Tout ces champs sont inclus dans des divs et sont inscrits dans des labels
Les champs nom, prenom et mail sont des inputs 
Le message est un textarea , le 'question' est un choix par selection donc avec une boite de selection qui comporte : question, reservation et remarque
Le champ 'Rester anonyme' est une radio box donc sois c'est oui sois c'est non. De base quand la page se charge se sera non qui sera 'checked'
Quand on veut ne peut a etre anonyme on va voir apparaitre les champs nom,prenom et mail et donc les voir disparaitre quand on veut etre anonyme.

A chaque fois que l'on change l'état de la radio box les inputs sont remis a 'null' 

Le second formulaire , celui de Reservation est donc accessible par ancrage dans la barre de navigation mais pas par scroll a moins d'avoir cliqué au moins une fois sur 
le lien dans la barre de navigation qui est contenu dans la case 'Reservation'.
Il est donc composé d'un champ nom, prenom et mail
Tout ces champs sont inclus dans des divs et sont inscrits dans des labels
Ces 3 doivent etre obligatoirement non null pour pouvoir soumettre le formulaire (mais attention a ne pas mettre n'importe quoi dedans)
J'ai donc pour cela utilisé aria-required pour ne pas soumettre quand ils sont nuls , et des fonctions javascript avec des regex pour controler 
ce que l'utilisateur va mettre dans les champs et donc ce qu'il veut que j'insere dans ma base de données.

Des messages d'erreurs seront affichés dans les formulaires si jamais cela ne respecte pas les validités classiques d'un prenom , d'un nom et d'un email.
Et donc aussi quand le formulaire de Contacts est dans le mode non anonyme.

Après les formulaires j'ai mis en place un bouton pour l'affichage par AJAX (c'est a dire l'appel d'image qui se trouve sur un serveur distant au mien) 
Les images sont appelées par groupe de 5 , le serveur d'image en contient 18 donc après 4 clique le bouton va s'effacer

Enfin le footer contient 3 lien 'blank' (blank sert a afficher un site web sur un autre onglet de notre navigateur web) 
qui dirige respectivement vers les pages d'acceuil/d'inscription de facebook , twitter et instagram (en attente peut etre de page de reseau social au nom de l'association)

Voila pour ce qui est du HTML 

Pour le CSS j'ai fait usage d'un peut d'opacité sur mes couleurs et sur mon fond html car sinon les couleurs étaient trop vives et cela donne une certaine douceur a ces couleurs.
Chaque article est donc séparé d'un titre avec pour background la couleur argent 
A la fin de l'article sur le festival j'ai voulu faire apparaitre une couleur qui ressemble un peu au rouge pour répondre aux envies du client avec du marron opacifié qui ressemble un peu au rouge

Le CSS m'a permit de m'amuser un peu avec des jeux de couleurs (j'ai peut etre mi un peu trop de couleur mais cela donne un certain style a la page).
Pour le placement des elements j'ai utilisé des flex pour l'article 1 et 2 puis des floats pour le placement des membres et j'ai donc effacé l'effet du float par après avec le selecteur section:after
a la ligne 179-182
 
Enfin parlons un peu du Media-Queries qui est ici très important.
Pourquoi je dit que cela est important ? 
Car notre cible est bien une personne qui utilise bien un ordinateur pour aller sur internet mais si jamais cette personne a un petit fils et que ce petit fils veut l'inscrire au festival alors 
on va permettre au petit fils de le faire par smartphone donc sur un ecran plus petit. Le media querie nous permet celà j'ai ici choisi de modifier le placement de la quasi totalité de mes elements 
dès que l'on passe sous la barre des 600px en horizontal.
Donc une fois que l'on est sous cette barre l'utilisateur va voir s'afficher tout les elements en vertical , les uns en dessous des autres, celà va du header au footer. Je n'ai pas changé les couleurs
par rapport a la page au dessus des 600px.

Enfin vous vous dites qu'on a parler de tout les elements de la page est bien non il en manque un.
Il s'agis du bouton de remonté. Je l'es creer dans mon html juste après les formulaires mais comme il est fixé on ne sais pas trop où est ce qu'il est ecrit dans le code html
Cette ancre va donc permettre de remonter au header de la page juste quand on clique dessus. Et cette div qui sert de bouton de remonter va apparaitre que lorsque l'on scroll la page vers le bas
et disparait une fois que l'on es de nouveau tout en haut de la page. Vous remarquerez que si vous passer avec votre souris (ou votre doigt , smartphone ou tablette) j'ai ajouter un leger 
effet de transition qui montre bien que l'on passe dessus avec notre pointeur de souris.

Vous trouverez dans le JS toutes les fonctions et les regex qui me permettent de gerer la validité des données entrées dans les champs de formulaires.

Enfin parlons du PHP.
Il va nous permettre de recuperer les données et de pouvoir les traiter, les analyser , les controler et aussi faire le lien avec une base de données.
J'ai d'abord implementer une fonction qui va corriger la faille XSS sur les données de formulaires. Puis dans mes verifications de données j'ai inclus le fait que l'utilisateur sois anonyme ou non 
Si on es anonyme je controle juste le textarea message et les autres champs seront a null et je les initialise a No dans la base de données
Quand on n'est pas anonyme je verifie toutes les données qui me sont transmises et met No dans la base de données quand la valeur peut etre null c'est a dire qu'elle n'est pas obligatoire.

Puis ensuite une fois controle j'accede a mon fichier .db avec lequel je fait le lien car j'utilise le systeme de base de données sqlite
Puis donc je creer ma table dans ce fichier si elle n'existe pas encore puis j'insere les valeurs et enfin je retire les valeurs qui ont étaient entrées dans la base afin d'experimenter la recuperation 
de données a partir de la base puis je les affiche au dessus  du bouton d'image qui me permet d'afficher les images qui proviennent du Serveur d'image distant.

SI c'est ce n'est pas le bouton 'Envoyer' du formulaire Contacts qui est pressé alors c'est peut etre celui du formulaire de Reservation.
Et donc si c'est le cas on va verifier tout les champs et ici ils ne peuvent pas etre null donc tout les champs de ma table sont remplis a chaque insertion.
Et donc on fait la meme chose que dans la partie Contacts , on va creer la table si elle n'existe pas puis inserer les valeurs , puis les recuperer et les afficher dans le html 
au dessus du bouton d'appel des images.


J'espere que vous avez eu le courage de lire tout ça , je vous en remercie.
Je vous souhaite un bon test de ma page WEB sur le projet 'Festival du Jeu'.




