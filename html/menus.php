<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./style.css">
    <title>ECF_Restaurant_Menus</title>
</head>
<body>

<!-- header -->
<?php include 'header.php'; ?> 

<main class="container-fluid">
<!-- title -->
    <div class="row mt-5">
        <div class="col-12 text-center">
            <h1> Menus </h1>
        </div>
    </div>

    <!-- menus list -->
    <section class="row">
        <div class="col-12">
        <!-- menu 1 -->
            <div class="row">
                <div class="col-10">
                    <h2> Menu 1 </h2>
                    <table>
                        <tr>
                            <td> Titre </td>
                            <td> Formule 1: prix </td>
                            <td> Formule 2: prix </td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- menu 2  -->
            <div class="row">
                <div class="col-10">
                    <h2> Menu 2 </h2>
                    <table>
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