Pour l'exécution en local:
Mettre l'ensemble des fichiers dans Xampp et modifier si besoin les variables locales dans les fichiers "connexion_at_db.php" dans le dossier "Back".

Pour l'administrateur:
Un compte admin a déjà été créé au nom du responsable donné dans la consigne.
Email administrateur: ArnaudMichant@gmail.com
Mot de passe: CornicheRioTouristes
Pour crééer un autre administrateur il sera nécessaire de passer par le fichier "restaurant.sql", à ouvrir avec Heidi.sql.
Il faudra alors insérer un nouvel utilisateur ou en modifier un à partir d'une requête sql afin de lui ajouter le "type" "Admin" (attentionà la majuscule)
Aussi, le mot de passe choisit, s'il est créé un nouvel utilisateur à partir d'une reqête, devra être convertie en md5 (grâce à un générateur trouvable
sur internet).