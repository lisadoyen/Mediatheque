#-----------------------------------------------------------------------------#
# Transformation de la table bibliotheque                                     #
#                                                                             #
## 1. Importer les données dans la base :                                     #
#                                                                             #
# * Exporter le fichier exel en CSV :                                         #
#    * fiel delimited ","                                                     #
#    * Quote all text cells                                                   #
#                                                                             #
# * Importer le fichier comme nouvelle table (phpmyadmin par exemple):        #
#    * si phpmyadmin cocher la case "La première ligne du fichier contient    #
#         le nom des colonnes de la table".                                   #
#    * exécuter.                                                              #
#    * patienter lors de l'importation de la base.                            #
#                                                                             #
## 2. Transfomation de la base :                                              #
#                                                                             #
# Exécuter le présent script pour appliquer les modifications.                #
# /!\ `mediatheque` doit être le nom de la BDD sinon il faut le changer.      #
#-----------------------------------------------------------------------------#

# Renommer la table
RENAME TABLE `mediatheque`.`TABLE 1` TO `mediatheque`.`bibliotheque`;

#Supprimer les champs inutiles
ALTER TABLE `bibliotheque` DROP `Code Groupe de thèque`, DROP `Code thèque`, DROP `Libellé thèque`, DROP `Sortie / Entrée / Réservé`, DROP `O si désactivé`;
ALTER TABLE `bibliotheque` DROP `Code commission`, DROP `Libellé commission`;
UPDATE `bibliotheque` SET `Libellé Support`="Article à déclasser" WHERE `Libellé Support` ="" and `Code support` ="POUBELLE";
ALTER TABLE `bibliotheque` DROP `Code support`;

# Renommer les champs 
ALTER TABLE `bibliotheque` CHANGE `Code article` `code_livre` VARCHAR(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `Titre, Désignation` `titre_designation` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `Code genre` `code_genre` VARCHAR(8) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `Code Sous Genre` `code_sous_genre` VARCHAR(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `Libellé Genre` `libelle_genre` VARCHAR(25) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `Nom auteur` `nom_auteur` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `Prénom auteur` `prenom_auteur` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `Libellé Support` `support_livre` VARCHAR(25) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `Description article` `description_article` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `Date d'achat` `date_achat` VARCHAR(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `Nombre de sorties` `nombre_de_sorties` VARCHAR(5) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `Date de retrait` `date_de_retrait` VARCHAR(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `Ne pas sortir` `ne_pas_sortir` VARCHAR(1) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `Date de création` `date_creation` VARCHAR(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;

# Ajout champs
ALTER TABLE `bibliotheque`  ADD `id_livre` INT NOT NULL AUTO_INCREMENT  FIRST,  ADD   PRIMARY KEY  (`id_livre`);
ALTER TABLE `bibliotheque`  ADD `code_ISBN` VARCHAR(20) NULL  AFTER `code_livre`;


# Changement de type
#Nb sortie en int et val par defaut à 0
UPDATE `bibliotheque` SET `nombre_de_sorties`=0 WHERE `nombre_de_sorties` ="";
ALTER TABLE `bibliotheque` CHANGE `nombre_de_sorties` `nombre_de_sorties` INT(5) NULL DEFAULT NULL;
ALTER TABLE `bibliotheque` CHANGE `nombre_de_sorties` `nombre_de_sorties` INT NULL DEFAULT '0';

# Les dates
UPDATE `bibliotheque` SET `date_achat`="01/01/2100" WHERE `date_achat` ="";
UPDATE `bibliotheque` SET `date_de_retrait`="01/01/2100" WHERE `date_de_retrait` ="";
UPDATE `bibliotheque` SET `date_creation`="01/01/2100" WHERE `date_creation` ="";

UPDATE `bibliotheque` SET 
`date_achat`= DATE_FORMAT(STR_TO_DATE(`date_achat`, '%d/%m/%Y'), '%Y-%m-%d'),
`date_de_retrait`= DATE_FORMAT(STR_TO_DATE(`date_de_retrait`, '%d/%m/%Y'), '%Y-%m-%d'),
`date_creation`= DATE_FORMAT(STR_TO_DATE(`date_creation`, '%d/%m/%Y'), '%Y-%m-%d');

ALTER TABLE `bibliotheque` CHANGE `date_achat` `date_achat` DATE NULL DEFAULT NULL, CHANGE `date_de_retrait` `date_de_retrait` DATE NULL DEFAULT NULL, CHANGE `date_creation` `date_creation` DATE NULL DEFAULT NULL;

UPDATE `bibliotheque` SET `date_achat` =NULL  WHERE `date_achat`="2100-01-01";
UPDATE `bibliotheque` SET `date_de_retrait` =NULL  WHERE `date_de_retrait`="2100-01-01";
UPDATE `bibliotheque` SET `date_creation` =NULL WHERE `date_creation`="2100-01-01";

# ne pas sortir en boolean
UPDATE `bibliotheque` SET  `ne_pas_sortir`= 1 WHERE `ne_pas_sortir` ="O";
UPDATE `bibliotheque` SET  `ne_pas_sortir`= 0 WHERE `ne_pas_sortir` ="N";
UPDATE `bibliotheque` SET  `ne_pas_sortir`= 0 WHERE `ne_pas_sortir` =""; #sans valeur = non par defaut

ALTER TABLE `bibliotheque` CHANGE `ne_pas_sortir` `ne_pas_sortir` BOOLEAN NULL DEFAULT NULL;
ALTER TABLE `bibliotheque` CHANGE `ne_pas_sortir` `ne_pas_sortir` TINYINT(1) NULL DEFAULT '0';

# Déplacements
#Auteur
CREATE TABLE IF NOT EXISTS `mediatheque`.`auteur` ( `id_auteur` INT NOT NULL AUTO_INCREMENT , `nom` VARCHAR(100) NOT NULL , `prenom` VARCHAR(100) NOT NULL , PRIMARY KEY (`id_auteur`)) ENGINE = InnoDB;

INSERT INTO `auteur` (`nom`, `prenom`) 
	SELECT DISTINCT `bibliotheque`.`nom_auteur`, `bibliotheque`.`prenom_auteur`FROM `bibliotheque` ORDER BY `bibliotheque`.`nom_auteur`;

ALTER TABLE `bibliotheque`  ADD `FK_id_auteur` INT NOT NULL  AFTER `date_creation`;
ALTER TABLE `mediatheque`.`bibliotheque` ADD KEY `FK_auteur` (`FK_id_auteur`);

UPDATE `bibliotheque` JOIN `auteur`
ON `bibliotheque`.`nom_auteur` = `auteur`.`nom`
SET `bibliotheque`.`FK_id_auteur` = `auteur`.`id_auteur`
WHERE `auteur`.`nom` = `bibliotheque`.`nom_auteur`;

ALTER TABLE `bibliotheque` DROP `nom_auteur`, DROP `prenom_auteur`; 
ALTER TABLE `bibliotheque` ADD CONSTRAINT `Bibliotheque_auteur_FK` FOREIGN KEY (`FK_id_auteur`)
REFERENCES `auteur`(`id_auteur`);
COMMIT;

## Genre
CREATE TABLE `mediatheque`.`genre` ( `id_genre` INT NOT NULL AUTO_INCREMENT , `libelle_genre` VARCHAR(25) NOT NULL , `code_genre` VARCHAR(8) NOT NULL , `code_sous_genre` VARCHAR(10) NOT NULL , `limite_age` INT(2) NULL DEFAULT NULL , PRIMARY KEY (`id_genre`)) ENGINE = InnoDB; 

UPDATE `bibliotheque` SET `code_genre`="POUBELLE", `libelle_genre` ="POUBELLE" WHERE `code_genre`="POUB" OR `code_genre`="POUBELL";
UPDATE `bibliotheque` SET `libelle_genre`="Inconnu" WHERE `libelle_genre`="" or `code_genre`="";
UPDATE `bibliotheque` SET `code_genre`="Inconnu" WHERE `code_genre`="" ;
UPDATE `bibliotheque` SET `code_genre`="0/3", `libelle_genre` ="0/3 ans" WHERE `code_genre`="0/3 ANS";
UPDATE `bibliotheque` SET `code_genre`="10/13", `libelle_genre` ="10/13 ans" WHERE `code_genre`="10/13 A";
UPDATE `bibliotheque` SET `code_genre`="3/6", `libelle_genre` ="3/6 ans" WHERE `code_genre`="3/6 ANS";
UPDATE `bibliotheque` SET `code_genre`="6/8", `libelle_genre` ="6/8 ans" WHERE `code_genre`="6/8 ANS";
UPDATE `bibliotheque` SET `code_genre`="8/10", `libelle_genre` ="8/10 ans" WHERE `code_genre`="8/10 AN";

INSERT INTO `genre` (`libelle_genre`, `code_genre`, `code_sous_genre`) 
	SELECT DISTINCT `bibliotheque`.`libelle_genre`, `bibliotheque`.`code_genre`, `bibliotheque`.`code_sous_genre` FROM `bibliotheque` ORDER BY `bibliotheque`.`libelle_genre`;

UPDATE `genre` SET `limite_age`="0" WHERE `code_genre`="0/3";
UPDATE `genre` SET `limite_age`="10" WHERE `code_genre`="10/13";
UPDATE `genre` SET `limite_age`="3" WHERE `code_genre`="3/6";
UPDATE `genre` SET `limite_age`="6" WHERE `code_genre`="6/8";
UPDATE `genre` SET `limite_age`="8" WHERE `code_genre`="8/10";

ALTER TABLE `genre` CHANGE `libelle_genre` `libelle_genre` VARCHAR(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'Inconnu', CHANGE `code_genre` `code_genre` VARCHAR(8) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'Inconnu';

ALTER TABLE `bibliotheque`  ADD `FK_id_genre` INT NOT NULL  AFTER `date_creation`;

UPDATE `bibliotheque` JOIN `genre`
ON `bibliotheque`.`libelle_genre` = `genre`.`libelle_genre`
SET `bibliotheque`.`FK_id_genre` = `genre`.`id_genre`
WHERE `genre`.`libelle_genre` = `bibliotheque`.`libelle_genre`;

ALTER TABLE `bibliotheque` DROP `code_genre`, DROP `code_sous_genre`, DROP `libelle_genre`;

# Ajout de la table Emprunt et utilisateur
#Utilisateur
CREATE TABLE `utilisateur` (
  `id_utilisateur` int NOT NULL,
  `nom` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `prenom` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `identifiant` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `mot_de_passe` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(254) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `telephone` int DEFAULT NULL,
  `statut` enum('prestataire','salarie','retraite') CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `role` enum('ROLE_ADMIN','ROLE_BENEVOLE','ROLE_ADHERENT','ROLE_UTILISATEUR') CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'ROLE_NOM'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `prenom`, `identifiant`, `mot_de_passe`, `email`, `telephone`, `statut`, `role`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'NULL', NULL, NULL, 'ROLE_ADMIN'),
(2, 'benevole', 'benevole', 'benevole', 'benevole', 'NULL', NULL, NULL, 'ROLE_BENEVOLE');

ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

#Emprunt
CREATE TABLE `emprunt` (
  `FK_id_utilisateur` int NOT NULL,
  `FK_id_livre` int NOT NULL,
  `date_emprunt` date DEFAULT NULL,
  `date_rendu` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

ALTER TABLE `emprunt`
  ADD PRIMARY KEY (`FK_id_utilisateur`,`FK_id_livre`),
  ADD KEY `FK_bibliotheque_livre` (`FK_id_livre`) USING BTREE, 
  ADD KEY `FK_bibliotheque_utilisateur` (`FK_id_utilisateur`) USING BTREE;;

ALTER TABLE `emprunt`
  ADD CONSTRAINT `Emprunt_bibliotheque0_FK` FOREIGN KEY (`FK_id_livre`) REFERENCES `bibliotheque` (`id_livre`) ON DELETE CASCADE,
  ADD CONSTRAINT `Emprunt_utilisateur_FK` FOREIGN KEY (`FK_id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE CASCADE;
COMMIT;

#------------------------------------
# autres modifications
ALTER TABLE `bibliotheque` ADD `photo` VARCHAR(255) NULL AFTER `titre_designation`; 

ALTER TABLE `bibliotheque` ADD `format` ENUM('papier','numerique') NOT NULL DEFAULT 'papier' AFTER `support_livre`;

ALTER TABLE `bibliotheque` CHANGE `ne_pas_sortir` `inactif` TINYINT(1) NULL DEFAULT '0' COMMENT '1 = Oui et 0 = Non';

ALTER TABLE `bibliotheque` ADD `lien` VARCHAR(255) NULL AFTER `inactif`;

ALTER TABLE `bibliotheque` ADD `disponible` BOOLEAN NOT NULL DEFAULT TRUE AFTER `inactif`; 
UPDATE `bibliotheque` SET `disponible`="1" WHERE `inactif`="0";
UPDATE `bibliotheque` SET `disponible`="0" WHERE `inactif`="1";
ALTER TABLE `bibliotheque` CHANGE `disponible` `disponible` TINYINT(1) NOT NULL DEFAULT '1' COMMENT '1 = Oui et 0 = Non';
# Support livre genre sauf article à déclasser on retrouve cette info dans inactif avec la valeur 1 (article à déclasser = 1)
ALTER TABLE `bibliotheque` DROP `support_livre`;

ALTER TABLE `bibliotheque` ADD `typologie` ENUM('Tome_seul','Serie') NOT NULL DEFAULT 'Tome_seul' AFTER `description_article`;

UPDATE `bibliotheque` SET `typologie`="Serie" WHERE `titre_designation` LIKE "01 NET%";
UPDATE `bibliotheque` SET `typologie`="Serie" WHERE `titre_designation` LIKE "01NET%";
UPDATE `bibliotheque` SET `typologie`="Serie" WHERE `titre_designation` LIKE "01.NET%";
UPDATE `bibliotheque` SET `typologie`="Serie" WHERE `titre_designation` LIKE "60 M%" ;
UPDATE `bibliotheque` SET `typologie`="Serie" WHERE `titre_designation` LIKE "60M%";
UPDATE `bibliotheque` SET `typologie`="Serie" WHERE `titre_designation` LIKE "ALTERNATIVES%";
UPDATE `bibliotheque` SET `typologie`="Serie" WHERE `titre_designation` LIKE "AR MEN %";
UPDATE `bibliotheque` SET `typologie`="Serie" WHERE `titre_designation` LIKE "ASTERIX%";
UPDATE `bibliotheque` SET `typologie`="Serie" WHERE `titre_designation` LIKE "AUTO MOTO %";
UPDATE `bibliotheque` SET `typologie`="Serie" WHERE `titre_designation` LIKE "AVENTURES EN MER ROUGE TOME%";
UPDATE `bibliotheque` SET `typologie`="Serie" WHERE `titre_designation` LIKE "% TOME %" OR `titre_designation` LIKE "% tome %" OR `titre_designation` LIKE "% volume %" OR `titre_designation` LIKE "% VOLUME %" OR `titre_designation` LIKE "% EPISODE %";
UPDATE `bibliotheque` SET `typologie`="Serie" WHERE `titre_designation` LIKE "VOTRE MAISON%" ;
UPDATE `bibliotheque` SET `typologie`="Serie" WHERE `titre_designation` LIKE "%2/2%" 
OR `titre_designation` LIKE "%1/2%" OR `titre_designation` LIKE "%2/2%"
OR `titre_designation` LIKE "%1/3%" OR `titre_designation` LIKE "%2/3%" OR `titre_designation` LIKE "%3/3%" OR `titre_designation` LIKE "%1/4%" OR `titre_designation` LIKE "%2/4%" OR `titre_designation` LIKE "%3/4%" OR `titre_designation` LIKE "%4/4%" OR `titre_designation` LIKE "%3/5%" OR `titre_designation` LIKE "%1/5%" OR `titre_designation` LIKE "%2/5%" OR `titre_designation` LIKE "%4/5%" OR `titre_designation` LIKE "%5/5%" OR `titre_designation` LIKE "%1/6%" OR `titre_designation` LIKE "%2/6%" OR `titre_designation` LIKE "%3/6%" OR `titre_designation` LIKE "%4/6%" OR `titre_designation` LIKE "%5/6%" OR `titre_designation` LIKE "%6/6%" OR `titre_designation` LIKE "%1/7%" OR `titre_designation` LIKE "%2/7%" OR `titre_designation` LIKE "%3/7%" OR `titre_designation` LIKE "%4/7%" OR `titre_designation` LIKE "%5/7%" OR `titre_designation` LIKE "%6/7%" OR `titre_designation` LIKE "%7/7%" OR `titre_designation` LIKE "%1/8%" OR `titre_designation` LIKE "%2/8%" OR `titre_designation` LIKE "%3/8%" OR `titre_designation` LIKE "%4/8%" OR `titre_designation` LIKE "%5/8%" OR `titre_designation` LIKE "%6/8%" OR `titre_designation` LIKE "%7/8%" OR `titre_designation` LIKE "%8/8%" OR `titre_designation` LIKE "%1/9%" OR `titre_designation` LIKE "%2/9%" OR `titre_designation` LIKE "%3/9%"
OR `titre_designation` LIKE "%4/9%" OR `titre_designation` LIKE "%5/9%" OR `titre_designation` LIKE "%6/9%" OR `titre_designation` LIKE "%7/9%" OR `titre_designation` LIKE "%8/9%" OR `titre_designation` LIKE "%9/9%" OR `titre_designation` LIKE "%1/10%" OR `titre_designation` LIKE "%2/10%" OR `titre_designation` LIKE "%3/10%" OR `titre_designation` LIKE "%4/10%" OR `titre_designation` LIKE "%5/10%" OR `titre_designation` LIKE "%6/10%" OR `titre_designation` LIKE "%7/10%" OR `titre_designation` LIKE "%8/10%" OR `titre_designation` LIKE "%9/10%" OR `titre_designation` LIKE "%10/10%";


# FK bibliotheque genre
ALTER TABLE `bibliotheque` ADD INDEX(`FK_id_genre`);

ALTER TABLE `bibliotheque` ADD CONSTRAINT `Bibliotheque_genre_FK` FOREIGN KEY (`FK_id_genre`)
REFERENCES `genre`(`id_genre`);