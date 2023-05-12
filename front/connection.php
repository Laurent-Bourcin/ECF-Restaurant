<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>ECF_Restaurant_Connection</title>
</head>
<body>

<?php
$displayForm = 1;

// if connexion button clicked
if(isset($_POST['submit'])){
    // if form aren't empty
    if(empty($_POST['form_connect_email'])){
        echo "Le champ Email est vide.";
    } else {
        if(empty($_POST['form_connect_pwd'])){
            echo "Le champ Mot de passe est vide.";
        } else {
            // Security of datas
            $email = htmlentities($_POST['form_connect_email'], ENT_QUOTES, "UTF-8"); 
            $pwd = htmlentities($_POST['form_connect_pwd'], ENT_QUOTES, "UTF-8");

            // Connection at db
            $mysqli = mysqli_connect("localhost:3307", "root", "", "restaurant");
            if(!$mysqli){
                echo "Erreur de connexion à la base de données.";
            } else {
                // Request to db
                $Requete = mysqli_query($mysqli,"SELECT * FROM users WHERE 
                email = '".$email."' AND password = '".md5($pwd)."'");

                // if no result
                if(mysqli_num_rows($Requete) == 0) {
                    echo "Le pseudo ou le mot de passe est incorrect, 
                    le compte n'a pas été trouvé.";
                } else {

                    // open session
                    $datas[] = mysqli_fetch_array($Requete);
                    $_SESSION['name'] = $datas[0]['name'];
                    $_SESSION['surname'] = $datas[0]['surname'];
                    $_SESSION['type'] = $datas[0]['type'];
                    $_SESSION['seats'] = $datas[0]['seats'];
                    $_SESSION['allergy'] = $datas[0]['allergy'];
                    echo "Vous êtes à présent connecté !";
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
    }
}
?>

<?php if($displayForm==1){
    ?>

<main class="container-fluid">
    <div class="row">
        <div class="col-12 text-center mb-5">
            <h2> Connexion </h2>
        </div>
    </div>

    <!-- Connect -->
    <section class="container-fluid mb-5">
        <form action="connection.php" method="post">
            <div class="row mb-3 text-center">
                <div class="col-4 text-end">
                    <label for="form_connect_email"> Email </label>
                </div>
                <div class="col-8">
                    <input type="text" name="form_connect_email" id="form_connect_email" required>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-4 text-end">
                    <label for="form_connect_pwd"> Mot de passe </label>
                </div>
                <div class="col-8">
                    <input type="password" name="form_connect_pwd" id="form_connect_pwd" required>
                </div>
            </div>

            <div class="col-4 text-end mt-4">
                    <button 
                        type="submit"
                        class="btn btn-sm bcg_plt_beige plt_golden px-md-5"
                        name="submit">
                        <span class="ff_arabic_btn"> Se connecter </span>
                    </button>
                </div>
        </form>
    </section>

    <!-- Create account -->
    <section class="row text-center mb-5">
        <div class="col-6">
            <button 
                class="btn btn-sm bcg_plt_golden px-md-5" 
                onclick="window.location.href='./connection_create_account.php'">
                <span class="ff_arabic_btn"> Créer un compte </span>
            </button>
        </div>

    <!-- Cancel -->
        <div class="col-6">
            <button 
                class="btn btn-sm bcg_plt_golden px-md-5" 
                onclick="window.location.href='./index.php'">
                <span class="ff_arabic_btn"> Annuler </span>
            </button>
        </div>
</section>
</main>

<?php
}
?>

</body>
<script src="../Bootstrap/js/bootstrap.bundle.js"></script>
</html>