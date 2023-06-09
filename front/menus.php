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
    <title>ECF_Restaurant_Menus</title>
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
            <h1 class="ff_andalus"> Menus </h1>
        </div>
    </div>

    <!-- menus list -->
    <section class="container-fluid mb-5">

    <?php
    // Loop for each menus in db
    $result_menu = $mysqli->query("SELECT * FROM menu");
    while($data = mysqli_fetch_array($result_menu)) { 
    ?>
        <!-- menu model -->
        <div class="row justify-content-center bcg_plt_beige">
            <div class="col-10 text-center bcg_plt_brown my-4">
                <h2 class="ff_arabic"> <?php echo $data['title'] ?> </h2>
                <table class="table text-white">
                <?php
                // Loop for each form in db
                $menu = $data['title'];
                $result_form = $mysqli->query("SELECT * FROM form WHERE menu='$menu'");
                while($data_form = mysqli_fetch_array($result_form)) { 
                ?>
                    <tr>
                        <td class=" col-4 text-start"> <?php echo $data_form['title'] ?> </td>
                        <td class="col-3 text-start"> <?php echo $data_form['description'] ?> </td>
                        <td class="col-3 text-end"> <?php echo $data_form['price'] ?> </td>
                    </tr>
                    <?php 
                // End of form loop
                } 
                ?>
                </table>
            </div>
        </div>

    <?php 
    // End of menu loop
    } 
    ?>

    </section>
</main>

<?php
    // Admin buttons
    if (isset($_SESSION['name'])) {
        if ($_SESSION['type']==='Admin') {
            ?>
            <!-- Menu -->
            <div class="row mt-2 mb-5">
                <!-- Modify menu -->
                <div class="col-4 text-center">
                    <button class="btn bcg_plt_beige plt_golden" 
                            onclick="window.location.href='./admin/menu_menu_modify.php'"> 
                            Modifier menu
                    </button>
                </div>

                <!-- Add menu -->
                <div class="col-4 text-center">
                    <button class="btn bcg_plt_beige plt_golden" 
                            onclick="window.location.href='./admin/menu_menu_add.php'"> 
                            Ajouter menu
                    </button>
                </div>

                <!-- Remove menu -->
                <div class="col-4 text-center">
                    <button class="btn bcg_plt_beige plt_golden" 
                            onclick="window.location.href='./admin/menu_menu_remove.php'"> 
                            Supprimer menu
                    </button>
                </div>
            </div>

            <!-- Form -->
            <div class="row mt-2 mb-5">
                <!-- Modify form -->
                <div class="col-4 text-center">
                    <button class="btn bcg_plt_beige plt_golden" 
                            onclick="window.location.href='./admin/menu_form_modify.php'"> 
                            Modifier formule
                    </button>
                </div>

                <!-- Add form -->
                <div class="col-4 text-center">
                    <button class="btn bcg_plt_beige plt_golden" 
                            onclick="window.location.href='./admin/menu_form_add.php'"> 
                            Ajouter formule
                    </button>
                </div>

                <!-- Remove form -->
                <div class="col-4 text-center">
                    <button class="btn bcg_plt_beige plt_golden" 
                            onclick="window.location.href='./admin/menu_form_remove.php'"> 
                            Supprimer formule
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