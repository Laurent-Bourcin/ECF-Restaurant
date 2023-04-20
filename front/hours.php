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
    <title>ECF_Restaurant_Hours</title>
</head>
<body>

<!-- header -->
<?php include 'header.php'; ?>

<?php 
// Connection at db
$mysqli = mysqli_connect("localhost:3307", "root", "", "restaurant");
?>

<main class="container-fluid">
    <!-- title -->
    <div class="row mt-3 mt-xl-5 mb-xl-4">
        <div class="col-12 text-center">
            <h1 class="ff_andalus"> Horaires </h1>
        </div>
    </div>

    <!-- hours list -->
    <section class="container-fluid mb-5">
    <!-- Loop for each days -->
    <?php
    $result_days = $mysqli->query("SELECT * FROM days");
    while($data = mysqli_fetch_array($result_days)) { 
    ?>
        <div class="row justify-content-center bcg_plt_beige">
            <div class="col-10 text-center bcg_plt_brown my-4">
                <h2 class="ff_arabic"> <?php echo $data['title'] ?> </h2>
                <table class="table text-white">
                    <tr>
                        <td> Midi </td>
                        <td> 12h - 14h30 </td>
                    </tr>
                    <tr>
                        <td> Soir </td>
                        <td> 19h30 - 22h30 </td>
                    </tr>
                </table>
            </div>
        </div>
    <?php
    // End of days loop
    }
    ?>
    </section>
</main>

<?php
    // Admin buttons
    if (isset($_SESSION['name'])) {
        if ($_SESSION['type']==='Admin') {
            ?>
            <!-- Days -->
            <div class="row mt-2 mb-5">
                <!-- Modify days -->
                <div class="col-4 text-center">
                    <button class="btn bcg_plt_beige plt_golden" 
                            onclick="window.location.href='./admin/day_modify.php'"> 
                            Modifier jour
                    </button>
                </div>

                <!-- Add hours -->
                <div class="col-4 text-center">
                    <button class="btn bcg_plt_beige plt_golden" 
                            onclick="window.location.href='./admin/day_add.php'"> 
                            Ajouter jour
                    </button>
                </div>

                <!-- Remove hours -->
                <div class="col-4 text-center">
                    <button class="btn bcg_plt_beige plt_golden" 
                            onclick="window.location.href='./admin/day_remove.php'"> 
                            Supprimer jour
                    </button>
                </div>
            </div>

            <!-- Hours -->
            <div class="row mt-2 mb-5">
                <!-- Modify hours -->
                <div class="col-4 text-center">
                    <button class="btn bcg_plt_beige plt_golden" 
                            onclick="window.location.href='./admin/hours_modify.php'"> 
                            Modifier heures
                    </button>
                </div>

                <!-- Add hours -->
                <div class="col-4 text-center">
                    <button class="btn bcg_plt_beige plt_golden" 
                            onclick="window.location.href='./admin/hours_add.php'"> 
                            Ajouter heures
                    </button>
                </div>

                <!-- Remove hours -->
                <div class="col-4 text-center">
                    <button class="btn bcg_plt_beige plt_golden" 
                            onclick="window.location.href='./admin/hours_remove.php'"> 
                            Supprimer heures
                    </button>
                </div>
            </div>

            <!-- Max seaters -->
            <div class="row mt-2 mb-5">
                <div class="col-12 text-center">
                    <button class="btn bcg_plt_beige plt_golden" 
                            onclick="window.location.href='./admin/seaters_modify.php'"> 
                            Modifier nombre de places
                    </button>
                </div>
            </div>
        <?php
        }
    }
    ?>

<!-- footer -->
<?php include 'footer.php'; ?>

</body>
<script src="../Bootstrap/js/bootstrap.bundle.js"></script>
</html>