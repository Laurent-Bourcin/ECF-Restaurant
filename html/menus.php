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
    <div class="row mt-3 mt-xl-5">
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

<!-- footer -->
<?php include 'footer.php'; ?>

</body>
<script src="../Bootstrap/js/bootstrap.bundle.js"></script>
</html>