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
    <link rel="stylesheet" href="../../Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../css/style.css">
    <title>ECF_Restaurant_Hours</title>
</head>
<body>

<?php
// Verification Admin
if (isset($_SESSION['name'])) {
    if ($_SESSION['type']==='Admin') {
        ?>

<?php 
// Connection at db
$mysqli = mysqli_connect("localhost:3307", "root", "", "restaurant");
?>

<main class="container-fluid">
    <!-- title -->
    <div class="row mt-3 mt-xl-5 mb-xl-4">
        <div class="col-12 text-center">
            <h1 class="ff_andalus"> Réservations enregistrées </h1>
        </div>
    </div>

    <!-- reservation list -->
    <section class="container-fluid mb-5">
    <?php
    // Loop for each date reservation in db
    $result_reservation_date = $mysqli->query("SELECT * FROM table_reservation ORDER BY date");
    while($data = mysqli_fetch_array($result_reservation_date)) { 
    ?>
        <!-- reservation model -->
        <div class="row justify-content-center bcg_plt_beige">
            <div class="col-10 text-center bcg_plt_brown my-4">
                <h2 class="ff_arabic"> <?php echo $data['date'] ?> </h2>
                <table class="table text-white">
                <?php
                // Loop for each info of reservations in db
                $date = $data['date'];
                $result_reservation_info = $mysqli->query("SELECT * FROM table_reservation WHERE 
                date='$date'");
                while($data_reserv = mysqli_fetch_array($result_reservation_info)) { 
                ?>
                    <tr>
                        <td class=" col-2 text-start"> <?php echo $data_reserv['name'] ?> </td>
                        <td class="col-2 text-start"> <?php echo $data_reserv['surname'] ?> </td>
                        <td class="col-2 text-end"> 
                            <?php echo $data_reserv['seats']. ' places' ?> 
                        </td>
                        <td class="col-2 text-end"> <?php echo $data_reserv['moment'] ?> </td>
                        <td class="col-2 text-end"> <?php echo $data_reserv['hours'] ?> </td>
                        <td class="col-2 text-end"> <?php echo $data_reserv['allergy'] ?> </td>
                    </tr>
                    <?php 
                // End of info reservation loop
                } 
                ?>
                </table>
            </div>
        </div>

    <?php 
    // End of reservation date loop
    } 
    ?>
    </section>

    <!-- Remove reservation -->
    <section class="container-fluid mb-5">
        <form action="reservation_remove.php" method="post">
            <div class="row mt-3 mt-xl-5 mb-xl-4">
                <div class="col-4 text-center">
                    <label class="ff_arabic" for="select_reservation"> 
                        Suppression d'une réservation 
                    </label>
                </div>

            <!-- select reservation -->
                <div class="col-4 text-center">
                    <select id="select_reservation" name="select_reservation">
                        <option value=''> Sélectionner une réservation </option>
                        <?php // Loop for optgroup
                        $result_reservation_date = $mysqli->query("SELECT * FROM table_reservation 
                        ORDER BY date");
                        while($data = mysqli_fetch_array($result_reservation_date)) {
                            echo '<optgroup label="'.$data['date']. '">';
                            // Loop for each reservations at date in optgroup
                            $date = $data['date'];
                            $result_reservation_info = $mysqli->query("SELECT * FROM 
                            table_reservation WHERE date='$date'");
                            while($data_reserv = mysqli_fetch_array($result_reservation_info)) {
                                // Rewrite info of each reservation into 2 variables 
                                // (for Post and display)
                                $value = $data['date']. '/'. $data_reserv['name']. '/'. 
                                $data_reserv['surname']. '/'. $data_reserv['moment']. '/'. 
                                $data_reserv['hours'];

                                $value_display = $data['date']. ': '. $data_reserv['name']. ' '. 
                                $data_reserv['surname']. ' le '. $data_reserv['moment']. ' à '. 
                                $data_reserv['hours'];
                                // Display each reservation into an option
                                echo '<option value="'. $value. '"> '. $value_display. '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="col-4 text-center">
                    <button class="btn bcg_plt_golden" type="submit" name="remove" value="remove"> 
                        Supprimer 
                    </button>
                </div>
        </form>
    </section>

    <div class="row text-start">
            <div class="col-12">
                <button 
                    class="btn btn-sm bcg_plt_golden px-md-5" 
                    onclick="window.location.href='../index.php'"> 
                    Retour 
                </button>
            </div>
        </div>

</main>

<?php
// End admin verification
    }
}
?>
</body>
</html>