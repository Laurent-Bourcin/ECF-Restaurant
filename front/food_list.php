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
    <title>ECF_Restaurant_Food_List</title>
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
            <h1 class="ff_andalus"> Carte </h1>
        </div>
    </div>

    <!-- food_list -->
    <section class="container-fluid mb-5">
        <!-- entrees -->
        <div class="row justify-content-center bcg_plt_beige">
            <div class="col-10 text-center bcg_plt_brown my-4">
                <h2 class="ff_arabic"> Entrées </h2>
                <table class="table text-white">
                <?php
                $result = $mysqli->query("SELECT * FROM food WHERE type='starter'");
                    while($data = mysqli_fetch_array($result)) { 
                ?>
                        <tr>
                            <td class=" col-4 text-start"> <?php echo $data['title']; ?> </td>
                            <td class="col-3 text-start"> <?php echo $data['description']; ?> </td>
                            <td class="col-3 text-end"> <?php echo $data['price']; ?> </td>
                        </tr>
                    <?php 
                    }
                ?>
                </table>
            </div>
        </div>

        <!-- main -->
        <div class="row justify-content-center bcg_plt_beige">
            <div class="col-10 text-center bcg_plt_brown my-4">
                <h2 class="ff_arabic"> Plats </h2>
                <table class="table text-white">
                <?php
                $result = $mysqli->query("SELECT * FROM food WHERE type='main'");
                    while($data = mysqli_fetch_array($result)) { 
                ?>
                        <tr>
                            <td class="col-4 text-start"> <?php echo $data['title']; ?> </td>
                            <td class="col-3 text-start"> <?php echo $data['description']; ?> </td>
                            <td class="col-3 text-end"> <?php echo $data['price']; ?> </td>
                        </tr>
                    <?php 
                    }
                ?>
                </table>
            </div>
        </div>

        <!-- desserts -->
        <div class="row justify-content-center bcg_plt_beige">
            <div class="col-10 text-center bcg_plt_brown my-4">
                <h2 class="ff_arabic"> Desserts </h2>
                <table class="table text-white">
                <?php
                $result = $mysqli->query("SELECT * FROM food WHERE type='dessert'");
                    while($data = mysqli_fetch_array($result)) { 
                ?>
                        <tr>
                            <td class=" col-4 text-start"> <?php echo $data['title']; ?> </td>
                            <td class="col-3 text-start"> <?php echo $data['description']; ?> </td>
                            <td class="col-3 text-end"> <?php echo $data['price']; ?> </td>
                        </tr>
                    <?php 
                    }
                ?>
                </table>
            </div>
        </div>
    </div>

    </section>
</main>

<?php
    // Admin buttons
    if (isset($_SESSION['name'])) {
        if ($_SESSION['type']==='Admin') {
            ?>
            <div class="row mt-2 mb-5">
            <!-- Modify food list -->
                <div class="col-4 text-center">
                    <button class="btn bcg_plt_beige plt_golden" 
                            onclick="window.location.href='./admin/food_modify.php'"> 
                            Modifier 
                    </button>
                </div>

                <!-- Add food list -->
                <div class="col-4 text-center">
                    <button class="btn bcg_plt_beige plt_golden" 
                            onclick="window.location.href='./admin/food_add.php'"> 
                            Ajouter 
                    </button>
                </div>

                <!-- Remove food list -->
                <div class="col-4 text-center">
                    <button class="btn bcg_plt_beige plt_golden" 
                            onclick="window.location.href='./admin/food_remove.php'"> 
                            Supprimer 
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