# Ptut - Récap Réunion n°1 - Olivier



Récap réunion : Pour recontextualiser la médiathèque : elle fait partie du CE (comité d'entreprise), elle regroupe plusieurs média : 
vidéothèque, musithèque, bibliothèque. Nous leur transmettrons notre projet final et ils décideront si il veulent l'utiliser ou non. 

Notre site internet permet dans un premier temps à une communauté d'emprunteur d'accéder à plusieurs fonctionnalités.
En premier, on doit pouvoir visualiser ce qui est dispo. 
Il y a en tous 10 000 articles toutes catégories confondus dont 5 à 10 000 pour la bibliothèque, quelques miliers musique / vidéo, 500 jeux vidéo.
On doit pouvoir consulter ce qu'il y a donc on va avoir une base de donnée. Il nous a montré des exemple de site de médiathèque :
- médiathèque Brest : site moche, pas très clair
- médiathèque metalorgie.com : clair et précis + recherche d'un mot et suggestion qui apparait directement dans une liste déroulante

Donc => moteur de recherche avancée à faire

Pour un utilisateur lampda, on doit pouvoir faire des réservation d'articles, montré si il sont emprunté ou non. Mettre en place un système de réservation
d'article, si plusieurs personnes veulent réserver un article.
Pour un administrateur, il doit pouvoir avoir un compte rendu des réservations pour pouvoir mettre de coté des articles.
L'utilisateur doit s'engager a venir prendre le livre pendant un tps défini et pas infini.

Il y a aussi une catégorie nouveauté dans la médiathèque : mettre une limite de réservation sur les nouveautés par personne

Fonctionnalités secondaires : pouvoir mettre des avis/ commentaires, possibilité de faire un forum également

Important : avoir beaucoup d'informations sur les articles sur le site : résumé, titre ...
Concernant les musiques : avoir des extraits des albums et possibilité de visualié des vidéos youtubes => aspect interessant
Ce sont les administrateurs qui mettront les infos et vidéos et mettre des liens vers d'autres sites => site officiel des artistes
Pour les films : bande annonce, site : allociné
Pour les livres : mettre les plaches d'une bande dessinée (à revoir) => voir pour la légalité : droit image

Pour les administrateurs, ils peuvent modifier la base de données, créer des articles, modifier articles, détruire articles pour place/trop vieux
Ils peuvent faire des bilans statistiques/rapports, exemple : cmb d'articles sur 6 derniers mois / emprunteur visé => chaque transaction enregistrée

Il faut sauvegarder les données régulièrement, pouvoire exporter les données pour éviter les crashs

Ajd : fichiers excel sur 4 machines sur serveur dans l'entreprise (possibilité de récup de ces fichiers)
formats CSV => pouvoir être ingérer dans la bdd

Il faut avoir le code achat dans la bdd

2 bases de données : 1 pour article et 1 pour utilisateur
Les emprunteur : compte nominatif + mdp
Les administrateurs : + de fonctionnalités

On peut réserver les articles et mettre dans un panier puis valider le panier:
Pouvoir recevoir une notification mail, téléphone de la personne pour la commande enregistrée

Chartre graphique : pas obligatoire d'utliser les couleurs de Thales => chartres graphique entièrement libre
Un logo de la médiathèque existe. Il faudra soumettre la chartre graphique avant de coder

Concernant les articles, lorsque l'administrateur pourra les modifier : forme universelle déja mis en place et à respecter
L'administrateur peut ajouter un article depuis le site

Il y a des regles à respecter : 
On peut emprunté 10 médias pendant 2/3 semaines / pas plus de 2 nouveauté parmis les 10

Les règles sont différentes selon les médias/typologie d'article
L'administrateur peut modifier ses règles

Un système de relance par mail ou telephone a mettre en place

L'administrateur gère les nouveaux emprunteurs

Le site a un seul aspect : connexion

Titre de la médiathèque : médiathèque Thalès Brest
On peut trouver un autre titre

Dans la bdd : on peut enlever des champs si inutiles/on peut en rajouter aussi => fortement conseillé

Concernant le forums : permettre aux emprunteurs de créer des conversations

Il faut pouvoir voir combien d'utilisateur sont connectés actuellement. On doit pouvoir gérer l'aspect multiutilisateur

Faire un système de messagerie, parler avec tel ou tel personne

On doit avoir un module contact sur le site pour contacter la médiathèque/les admin

Si application mobile : top du top