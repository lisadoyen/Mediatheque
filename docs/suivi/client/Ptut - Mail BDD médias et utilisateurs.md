### Mail médias

J'ai pu récupérer les BDD des 4 types de média.

En fait, on est proche de 50000 articles en tout mais autour de 10000 actifs je pense.

Les 4 BDD sont au même format en terme de champs.

J'ai volontairement laissé tous les champs même si une grosse partie est vide.

Il y en a certainement qui sont inutiles et à supprimer mais cela peut donner des idées sur la structure des nouvelles BDD.

Concernant l'historique des transactions déjà faites, je vais essayer d'extraire  des choses mais sans garantie. Il y a eu environ 600000 mouvements  depuis le début de l'histoire.

Si je n'y arrive pas, on partira sur une base vierge.



### Mail utilisateurs

J'ai récupéré la BDD des personnes avec les infos. J'ai fait un  sérieux tri parmi les champs existants et j'ai conservé ceux importants  (de mon point de vue). J'en ai aussi rajouté quelques uns qui n'étaient  pas présents. Je n'ai pas mis le mot de passe pour l'identification. Je  pense qu'il faut peut-être une table spéciale cryptée ou alors crypter  toute la table des infos sur les personnes. A voir...

J'ai  enlevé toutes les infos sur les personnes existantes et j'ai remplacé  par des infos bidon. Il faudra peut-être en mettre plus pour avoir un  volume cohérent. Pour info, il y a environ 800 lignes dans la BDD  actuelle.

Sinon, je te rajoute aussi des  screenshots des IHMs actuelles pour que vous vous rendiez compte d'où  vous partez. L'idée est de voir aussi si certains menus doivent être  reconduits ou pas.

Demain ou après-demain, je  vais retourner pour sortir la structure actuelle de la table des  transactions pour savoir quels sont les champs existants. Je n'arrive  pas à faire d'extraction pour l'instant.

Ce n'est pas une  urgence de travailler dessus dans les prochains jours à mon avis. De mon côté, je vais regarder le logigramme et faire une esquisse du niveau de détail qui me semble adapté.

