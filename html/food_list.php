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
                    <tr>
                        <td>titre</td>
                        <td>description</td>
                        <td>prix</td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- dishes -->
        <div class="row justify-content-center bcg_plt_beige">
            <div class="col-10 text-center bcg_plt_brown my-4">
                <h2 class="ff_arabic"> Plats </h2>
                <table class="table text-white">
                    <tr>
                        <td>titre</td>
                        <td>description</td>
                        <td>prix</td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- desserts -->
        <div class="row justify-content-center bcg_plt_beige">
            <div class="col-10 text-center bcg_plt_brown my-4">
                <h2 class="ff_arabic"> Desserts </h2>
                <table class="table text-white">
                    <tr>
                        <td>titre</td>
                        <td>description</td>
                        <td>prix</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    </section>
</main>

<!-- footer -->
<?php include 'footer.php'; ?>

</body>
<script src="../Bootstrap/js/bootstrap.bundle.js"></script>
</html>