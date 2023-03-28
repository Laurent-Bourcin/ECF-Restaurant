<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>ECF_Restaurant_Connection_Create_Account</title>
</head>
<body>

<main class="container-fluid">
    <div class="row">
        <div class="col-12 text-center mb-5">
            <h2> Créer un compte </h2>
        </div>
    </div>

    <section class="container-fluid mb-5">
        <!-- Email -->
        <div class="row mb-3 text-center">
            <div class="col-4 text-end">
                <label for="form_create_email"> Email </label>
            </div>
            <div class="col-8">
                <input type="text" name="form_create_email" id="form_create_email" required>
            </div>
        </div>

        <!-- Password -->
        <div class="row text-center mb-3">
            <div class="col-4 text-end">
                <label for="form_create_pwd"> Mot de passe </label>
            </div>
            <div class="col-8">
                <input type="text" name="form_create_pwd" id="form_create_pwd" required>
            </div>
        </div>

        <!-- Surname -->
        <div class="row text-center mb-3">
            <div class="col-4 text-end">
                <label for="form_create_surname"> Nom </label>
            </div>
            <div class="col-8">
                <input type="text" name="form_create_surname" id="form_create_surname" required>
            </div>
        </div>

        <!-- Name -->
        <div class="row text-center mb-3">
            <div class="col-4 text-end">
                <label for="form_create_name"> Prénom </label>
            </div>
            <div class="col-8">
                <input type="text" name="form_create_name" id="form_create_name" required>
            </div>
        </div>

        <!-- Number of seats -->
        <div class="row text-center mb-3">
            <div class="col-4 text-end">
                <label for="form_create_seat"> Couverts </label>
            </div>
            <div class="col-8">
                <select name="form_create_seat" id="form_create_seat">
                    <option value=""> Sélectionner </option>
                </select>
            </div>
        </div>

        <!-- Allergy -->
        <div class="row text-center mb-3">
            <div class="col-4 text-end">
                <label for="form_create_allergy"> Allergies (ctrl si plusieurs) </label>
            </div>
            <div class="col-8">
                <select name="form_create_allergy" id="form_create_allergy">
                    <option value=""> Sélectionner </option>
                </select>
            </div>
        </div>
    </section>

    <!-- Cancel -->
        <div class="col-12 text-center">
            <button 
                class="btn btn-sm bcg_plt_golden px-md-5" 
                onclick="window.location.href='./connection.php'">
                <span class="ff_arabic_btn"> Annuler </span>
            </button>
        </div>
</section>
</main>

</body>
<script src="../Bootstrap/js/bootstrap.bundle.js"></script>
</html>