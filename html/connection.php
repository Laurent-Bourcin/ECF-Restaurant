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

<main class="container-fluid">
    <div class="row">
        <div class="col-12 text-center mb-5">
            <h2> Connection </h2>
        </div>
    </div>

    <!-- Connect -->
    <section class="container-fluid mb-5">
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
                <input type="text" name="form_connect_pwd" id="form_connect_pwd" required>
            </div>
        </div>
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

</body>
<script src="../Bootstrap/js/bootstrap.bundle.js"></script>
</html>