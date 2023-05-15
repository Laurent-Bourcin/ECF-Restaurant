<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../Back/javascript/script_hours.js"></script> 
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>ECF_Restaurant_Hours</title>
</head>
<body>

<!-- header -->
<?php include 'header.php'; ?>

<?php 
// Connection at db
require "../Back/connexion_at_db.php"
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
    <?php
    // Search all days in db hours table and put them into a new array
    $days_db = $mysqli->query("SELECT day FROM hours ORDER BY field(day, 
        'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche')");
    $days_exist = [];
    while($days_array = mysqli_fetch_array($days_db)) {
        if(!in_array($days_array['day'], $days_exist)){
                    array_push($days_exist, $days_array['day']);
        }
    }
    // Loop for each days in db
    foreach($days_exist as $day) { 
    ?>
        <div class="row justify-content-center bcg_plt_beige">
            <div class="col-10 text-center bcg_plt_brown my-4">
                <h2 class="ff_arabic"> <?php echo $day ?> </h2>
                <table class="table text-white">
                <?php
                // Loop for each hours in db
                $result_hours = $mysqli->query("SELECT * FROM hours WHERE day='$day'");
                while($data_hours = mysqli_fetch_array($result_hours)) {
                    // Configure display of hours
                    $data_hours_start = $data_hours['hours_start'];
                    $data_hours_start = substr($data_hours_start, 0, 2). 'h'. 
                        substr($data_hours_start, 2, 4);

                    $data_hours_end = $data_hours['hours_end'];
                    $data_hours_end = substr($data_hours_end, 0, 2). 'h'. 
                    substr($data_hours_end, 2, 4);
                    ?>
                    <tr>
                        <td class=" col-6 text-center"> <?php echo $data_hours['title'] ?> </td>
                        <td class="col-6 text-center"> <?php 
                        echo $data_hours_start. '-'. $data_hours_end ?> </td>
                    </tr>
                    <?php
                    }
                    ?>
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
                    <?php
                    // Search in db max seats
                    $result_seats = $mysqli->query("SELECT seats FROM max_seats");
                    while($seats = mysqli_fetch_array($result_seats)) {
                    ?>
                    <p> Nombre de clients maximal: 
                        <strong> <?php echo $seats['seats'] ?> </strong>
                    </p>
                    <?php
                    }
                    ?>

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