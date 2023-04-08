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

<main class="container-fluid">
<!-- title -->
    <div class="row mt-3 mt-xl-5 mb-xl-4">
        <div class="col-12 text-center">
            <h1 class="ff_andalus"> Menus </h1>
        </div>
    </div>

    <!-- menus list -->
    <section class="container-fluid mb-5">
        <!-- menu 1 -->
            <div class="row justify-content-center bcg_plt_beige">
                <div class="col-10 text-center bcg_plt_brown my-4">
                    <h2 class="ff_arabic"> Menu 1 </h2>
                    <table class="table text-white">
                        <tr>
                            <td> Titre </td>
                            <td> Formule 1: prix </td>
                            <td> Formule 2: prix </td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- menu 2  -->
            <div class="row justify-content-center bcg_plt_beige">
                <div class="col-10 text-center bcg_plt_brown my-4">
                    <h2 class="ff_arabic"> Menu 2 </h2>
                    <table class="table text-white">
                        <tr>
                            <td> Titre </td>
                            <td> Formule 1: prix </td>
                            <td> Formule 2: prix </td>
                        </tr>
                    </table>
                </div>
            </div>
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