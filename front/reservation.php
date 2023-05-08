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
    <script type="text/javascript" src="../Back/javascript/display_select_moment.js"></script>
    <title>ECF_Restaurant_Reservation</title>
</head>
<body>

<?php 
// Connection at db
$mysqli = mysqli_connect("localhost:3307", "root", "", "restaurant");
?>

<section class="container-fluid">
    <form action="reservation-hours.php" method="post">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2> Réservation </h2>
            </div>
        </div>

        <!-- date -->
        <div class="row mb-2 text-center">
            <div class="col-6 text-end">
                <label for="date_select"> Date </label>
            </div>

            <?php
            $today = date("Y-m-d");
            ?>

            <div class="col-6 text-start">
                <input type="date" name="date_select" id="date_select" min="<?php echo $today ?>" 
                onchange="displaySelectMoment()" required>
            </div>
        </div>

        <!-- display select moment -->
        <section id="display_select_moment" class="text-center">
        </section>

        <!-- envoyer / annuler -->
        <div class="row text-center">
            <div class="col-12">
                <button 
                    class="btn btn-sm bcg_plt_golden px-md-5" 
                    type="submit" 
                    value ="submit"> 
                    Continuer
                </button>
            </div>
        </div>
    </form>
        <div class="row text-start">
            <div class="col-12">
                <button 
                    class="btn btn-sm bcg_plt_golden px-md-5" 
                    onclick="window.location.href='./index.php'"> 
                    Annuler 
                </button>
            </div>
        </div>
</section>

</body>
<script src="../Bootstrap/js/bootstrap.bundle.js"></script>
</html>