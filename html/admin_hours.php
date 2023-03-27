<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">
    <title>ECF_Restaurant_Hours_admin</title>
</head>
<body>

<!-- header -->
<?php include 'header.php'; ?> 

<main class="container-fluid">
<!-- title -->
    <div class="row">
        <div class="col-12">
            <h1> Hours </h1>
        </div>
    </div>

    <!-- hours list -->
    <section class="row">
        <div class="col-12">
        <!-- week -->
            <div class="row">
                <div class="col-10">
                    <h2> Lundi au Vendredi </h2>
                    <table>
                        <tr>
                            <td> Midi </td>
                            <td> 12h - 14h30 </td>
                            <td><a href="#"><img src="../Images/icon_garbage.png"></a></td>
                            <td><a href="#"><img src="../Images/icon_modify.png"></a></td>
                        </tr>
                        <tr>
                            <td> Soir </td>
                            <td> 19h30 - 22h30 </td>
                            <td><a href="#"><img src="../Images/icon_garbage.png"></a></td>
                            <td><a href="#"><img src="../Images/icon_modify.png"></a></td>
                        </tr>
                    </table>
                </div>
                <div class="col-2">
                    <a href="#"><img src="../Images/icon_add.png"></a>
                </div>
            </div>

            <!-- week-end -->
            <div class="row">
                <div class="col-10">
                    <h2> Samedi </h2>
                    <table>
                        <tr>
                            <td> Midi </td>
                            <td> 12h - 14h30 </td>
                            <td><a href="#"><img src="../Images/icon_garbage.png"></a></td>
                            <td><a href="#"><img src="../Images/icon_modify.png"></a></td>
                        </tr>
                        <tr>
                            <td> Soir </td>
                            <td> 19h00 - 23h00 </td>
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

    <!-- choice cutlerys number -->
    <div class="row">
        <div class="col-12">
            <p> 
                Places disponibles: 
                <span> 12 </span>
            </p>
            <a href="#"><img src="../Images/icon_modify.png"></a>
        </div>
    </div>
</main>

<!-- footer -->
<?php include 'footer.php'; ?>

</body>
<script src="../Bootstrap/js/bootstrap.bundle.js"></script>
</html>