<?php
//connexion at db:
$BDD = array();
$BDD['host'] = "localhost:3307";
$BDD['user'] = "root";
$BDD['pass'] = "";
$BDD['db'] = "restaurant";
$mysqli = mysqli_connect($BDD['host'], $BDD['user'], $BDD['pass'], $BDD['db']);
if(!$mysqli) {
    echo "Connexion non établie.";
    exit;
}

// By default, display form
$displayForm=1;
$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";

// Form
// Request if all necessary form aren't empty
if(isset(  $_POST['form_create_email'],$_POST['form_create_pwd'],$_POST['form_create_surname'],
$_POST['form_create_name'])){
    // Email
    if(empty($_POST['form_create_email'])){
        echo "Le champ Email est vide.";
    } elseif(!preg_match($pattern ,$_POST['form_create_email'])){
        echo "L'adresse email n'est pas valide";
        // Same email in db ?
    } elseif(mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM users WHERE email=
    '".$_POST['form_create_email']."'"))==1){
        echo "Cet email est déjà enregistré.";
    // Password
    } elseif(empty($_POST['form_create_pwd'])){
        echo "Le champ Mot de passe est vide.";
    // Surname
    } elseif(empty($_POST['form_create_surname'])){
        echo "Le champ Nom est vide.";
    } elseif(strlen($_POST['form_create_surname'])>25){
        echo "Le nom est trop long, il dépasse 25 caractères.";
    // Name
    } elseif(empty($_POST['form_create_name'])){
        echo "Le champ Prénom est vide.";
    } elseif(strlen($_POST['form_create_name'])>25){
        echo "Le prénom est trop long, il dépasse 25 caractères.";
    } else {
// All form is ok, so registration
        if(!mysqli_query($mysqli,"INSERT INTO users SET email='".$_POST['form_create_email']."',
         password='".md5($_POST['form_create_pwd'])."', 
         surname='".$_POST['form_create_surname']."',
         name='".$_POST['form_create_name']."'
         ")){
            echo "Une erreur s'est produite: ".mysqli_error($mysqli);
        } else {
            echo "Vous êtes inscrit avec succès!";
            // stop display form
            $displayForm=0;
            
            ?>
            <div class="row mt-2 mb-5">
                <div class="col-12 text-center">
                    <button class="btn bcg_plt_beige plt_golden" 
                            onclick="window.location.href='./index.php'"> 
                            Accueil 
                    </button>
                </div>
            </div>

            <?php
        }
    }
}