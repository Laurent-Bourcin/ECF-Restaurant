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

<main class="container-fluid">
<!-- title -->
    <div class="row mt-3 mt-xl-5 mb-xl-4">
        <div class="col-12 text-center">
            <h1 class="ff_andalus"> Horaires </h1>
        </div>
    </div>

    <!-- hours list -->
    <section class="container-fluid mb-5">
        <!-- week -->
            <div class="row justify-content-center bcg_plt_beige">
                <div class="col-10 text-center bcg_plt_brown my-4">
                    <h2 class="ff_arabic"> Lundi au Vendredi </h2>
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

            <!-- week-end -->
            <div class="row justify-content-center bcg_plt_beige">
                <div class="col-10 text-center bcg_plt_brown my-4">
                    <h2 class="ff_arabic"> Samedi </h2>
                    <table class="table text-white">
                        <tr>
                            <td> Midi </td>
                            <td> 12h - 14h30 </td>
                        </tr>
                        <tr>
                            <td> Soir </td>
                            <td> 19h00 - 23h00 </td>
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