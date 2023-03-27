<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">
    <title>ECF_Restaurant</title>
</head>
<body>

<!-- header -->
<?php include 'header.php'; ?> 

<main class="container-fluid">
    <!-- carousel -->
    <section class="row">
        <div class="col-12">
            <span> Galerie d'image </span>
        </div>
    </section>

    <!-- reservation buton -->
    <div class="row">
        <div class="col-12">
            <button class="btn" 
                    onclick="window.location.href='./reservation.php'"> 
                    Réserver 
            </button>
        </div>
    </div>
</main>

<!-- test -->
<button onclick="window.location.href='./admin_food_list.php'"> TEST </button>

<!-- footer -->
<?php include 'footer.php'; ?>

</body>
<script src="../Bootstrap/js/bootstrap.bundle.js"></script>
</html>