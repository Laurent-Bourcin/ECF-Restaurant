<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">
    <title>ECF_Restaurant_Food_List_admin</title>
</head>
<body>

<!-- header -->
<?php include 'header.php'; ?> 

<main class="container-fluid">
    <!-- title -->
    <div class="row">
        <div class="col-12">
            <h1> Carte </h1>
        </div>
    </div>

    <!-- food_list -->
    <section class="row">
        <div class="col-12">
            <!-- entrees -->
            <div class="row">
                <div class="col-10">
                    <h2> Entrées </h2>
                    <table>
                        <tr>
                            <td>titre</td>
                            <td>description</td>
                            <td>prix</td>
                            <td><a href="#"><img src="../Images/icon_garbage.png"></a></td>
                            <td><a href="#"><img src="../Images/icon_modify.png"></a></td>
                        </tr>
                    </table>
                </div>
                <div class="col-2">
                    <a href="#"><img src="../Images/icon_add.png"></a>
                </div>
            </div>

            <!-- dishes -->
            <div class="row">
                <div class="col-10">
                    <h2> Plats </h2>
                    <table>
                        <tr>
                            <td>titre</td>
                            <td>description</td>
                            <td>prix</td>
                            <td><a href="#"><img src="../Images/icon_garbage.png"></a></td>
                            <td><a href="#"><img src="../Images/icon_modify.png"></a></td>
                        </tr>
                    </table>
                </div>
                <div class="col-2">
                    <a href="#"><img src="../Images/icon_add.png"></a>
                </div>
            </div>

            <!-- desserts -->
            <div class="row">
                <div class="col-10">
                    <h2> Desserts </h2>
                    <table>
                        <tr>
                            <td>titre</td>
                            <td>description</td>
                            <td>prix</td>
                            <td><a href="#"><img src="../Images/icon_garbage.png"></a></td>
                            <td><a href="#"><img src="../Images/icon_modify.png"></a></td>
                        </tr>
                    </table>
                </div>
                <div class="col-2">
                    <a href="#"><img src="../Images/icon_add.png"></a>
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