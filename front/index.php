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
    <title>ECF_Restaurant</title>
</head>
<body>

<!-- header -->
<?php include './header.php'; ?> 

<main class="container-fluid mt-5">
    <!-- carousel -->
    <section class="row">
        <div class="col-12">
            <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    $scandir = scandir("../Images/carousel/");
                    $i=0;
                    foreach($scandir as $file){
                        if(preg_match("#\.(jpg|jpeg|png)$#",strtolower($file))){
                            if ($i===0) {
                                $set_ = 'active'; 
                            } else {$set_ = ''; }
                    ?>
                            <div class="carousel-item <?php echo $set_; ?>">
                                <img 
                                    src="../Images/carousel/<?php echo $file ?>" 
                                    class="d-block w-100" 
                                    alt= "<?php $file; ?>">
                                    <?php $name = pathinfo($file); ?>
                                    <div class="carousel-caption d-none d-md-block">
                                        <h2 class="bcg_plt_brown font-weight-bold"> 
                                            <?php echo $name['filename']; ?> 
                                        </h2>
                                    </div>
                            </div>
                    <?php
                            $i++;
                    }};
                    ?>
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
                            Modifier 
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

    <?php
    // Initi variable for know if user is admin or not
    $is_admin = false;
    ?>

    <?php
    // Admin buttons
    if (isset($_SESSION['name'])) {
        if ($_SESSION['type']==='Admin') {
    ?>
            <div class="row mt-2 mb-5">
                <div class="col-12 text-center">
                    <button class="btn bcg_plt_beige plt_golden" 
                        onclick="window.location.href='./admin/reservation_display.php'"> 
                        Réservations enregistrées 
                    </button>
                </div>
            </div>
    <?php
            $is_admin = true;
        }
    }
    ?>
    </div>

    <?php
    // No admin buttons
    if ($is_admin == false) {
    ?>
    <!-- reservation buton -->
    <div class="row mt-2 mb-5">
        <div class="col-12 text-center">
            <button class="btn bcg_plt_beige plt_golden" 
                    onclick="window.location.href='./reservation.php'"> 
                    Réserver 
            </button>
        </div>
        <?php
        };
    ?>
</main>

<!-- footer -->
<?php include './footer.php'; ?>

</body>
<script src="../Bootstrap/js/bootstrap.bundle.js"></script>
</html>