<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">
    <title>ECF_Restaurant_Menus_admin</title>
</head>
<body>

<!-- header -->
<?php include 'header.php'; ?> 

<main class="container-fluid">
<!-- title -->
    <div class="row">
        <div class="col-10">
            <h1> Menus </h1>
        </div>
        <div class="col-2">
                    <a href="#"><img src="../Images/icon_add.png"></a>
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
                            <td><a href="#"><img src="../Images/icon_garbage.png"></a></td>
                            <td><a href="#"><img src="../Images/icon_modify.png"></a></td>
                        </tr>
                    </table>
                </div>
                <div class="col-2">
                    <a href="#"><img src="../Images/icon_add.png"></a>
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
                            <td><a href="#"><img src="../Images/icon_garbage.png"></a></td>
                            <td><a href="#"><img src="../Images/icon_modify.png"></a></td>
                        </tr>
                    </table>
                </div>
                <div class="col-2">
                    <a href="#"><img src="../Images/icon_add.png"></a>
                </div>
            </div>
    </section>
</main>

<!-- footer -->
<?php include 'footer.php'; ?>

</body>
<script src="../Bootstrap/js/bootstrap.bundle.js"></script>
</html>