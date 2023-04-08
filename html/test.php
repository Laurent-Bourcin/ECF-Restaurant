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
    <title>TEST</title>
</head>
<body>

<!-- header -->
<?php include 'header.php'; ?> 

<!-- TEST -->
<div>
<?php
$scandir = scandir("../Images/carousel/");
foreach ($scandir as $file) {
    echo "$file<br>";
}
?>
</div>

<main class="container-fluid mt-5">
    <!-- carousel -->
    <section class="row">
        <div class="col-12">
            <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img 
                            src="../Images/carousel/fondue.png" 
                            class="d-block w-100" 
                            alt="Fondue">
                    </div>
                    <div class="carousel-item">
                        <img 
                            src="../Images/carousel/raclette.png" 
                            class="d-block w-100" 
                            alt="Raclette">
                    </div>
                    <div class="carousel-item">
                        <img 
                            src="../Images/carousel/tartiflette.png" 
                            class="d-block w-100" 
                            alt="Tartiflette">
                    </div>
                </div>
                <button 
                    class="carousel-control-prev" 
                    type="button" 
                    data-bs-target="#carousel" 
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button 
                    class="carousel-control-next" 
                    type="button" 
                    data-bs-target="#carousel" 
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <?php
    // Admin buttons
    if (isset($_SESSION['name'])) {
        if ($_SESSION['type']==='Admin') {
            ?>
            <div class="row mt-2 mb-5">
            <!-- Modify image -->
                <div class="col-4 text-center">
                    <button class="btn bcg_plt_beige plt_golden" 
                            onclick="window.location.href='./admin/image_modify.php'"> 
                            Modifier rrr
                    </button>
                </div>

                <!-- Add image -->
                <div class="col-4 text-center">
                    <button class="btn bcg_plt_beige plt_golden" 
                            onclick="window.location.href='./admin/image_add.php'"> 
                            Ajouter 
                    </button>
                </div>

                <!-- Remove image -->
                <div class="col-4 text-center">
                    <button class="btn bcg_plt_beige plt_golden" 
                            onclick="window.location.href='./admin/image_remove.php'"> 
                            Supprimer 
                    </button>
                </div>
            </div>
        <?php
        }
    }
    ?>

    <!-- reservation buton -->
    <div class="row mt-2 mb-5">
        <div class="col-12 text-center">
            <button class="btn bcg_plt_beige plt_golden" 
                    onclick="window.location.href='./reservation.php'"> 
                    Réserver 
            </button>
        </div>
    </div>
</main>

<!-- footer -->
<?php include 'footer.php'; ?>

</body>
<script src="../Bootstrap/js/bootstrap.bundle.js"></script>
</html>