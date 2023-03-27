<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">
    <title>ECF_Restaurant_Hours</title>
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
                        </tr>
                        <tr>
                            <td> Soir </td>
                            <td> 19h30 - 22h30 </td>
                        </tr>
                    </table>
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