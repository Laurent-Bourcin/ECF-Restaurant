<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../css/style.css">
    <title>ECF_Restaurant_Admin_Image_Ajouter</title>
</head>

<body>

<?php
// Verification Admin
if (isset($_SESSION['name'])) {
    if ($_SESSION['type']==='Admin') {
?>

<!-- Add img -->
<?php
// Verify upload and add variables
if(isset($_FILES['file'])){
    $tmpName = $_FILES['file']['tmp_name'];
    $name = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];

    // Choice extension
    $tabExtension = explode('.', $name);
    $extension = strtolower(end($tabExtension));
    $extensions = ['jpg', 'png', 'jpeg', 'gif'];

    // Choicec maxSize
    $maxSize = 4000000;

    // Verification
    if (in_array($extension, $extensions) && $size <= $maxSize && $error == 0){
        move_uploaded_file($tmpName, '../../Images/carousel/'.$name);

        // Modify size of img
        // Variables
        $image_path = '../../Images/carousel/'.$name;
        $info = getimagesize($image_path);
        $mime = $info['mime'];

        // Switch case
        switch ($mime) {
            case 'image/jpeg':
                $image_create_func = 'imagecreatefromjpeg';
                $image_save_func = 'imagejpeg';
                break;
            case 'image/png':
                $image_create_func = 'imagecreatefrompng';
                $image_save_func = 'imagepng';
                break;
            case 'image/jpg':
                $image_create_func = 'imagecreatefromjpg';
                $image_save_func = 'imagejpg';
                break;
            default: 
                throw new Exception('Unknown image type.');
        }

        // Modify img
        list($width, $height) = getimagesize($image_path);
        $modwidth = 2000;
        $modheight = 1000;
        $tn = imagecreatetruecolor($modwidth, $modheight) ;
        $image = $image_create_func($image_path) ;
        imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ;
        $image_save_func($tn, $image_path) ;
    
        $image_upload = true;
    } else {
        echo "Une erreur est survenue. Vérifiez la taille du fichier et son extension";
    }
}
?>

<main class="container-fluid">
    <div class="row">
        <div class="col-12 text-center mb-5">
            <h2> Ajouter une image </h2>
        </div>
    </div>

<!-- form -->
    <section class="container-fluid mb-5">
        <form action="image_add.php" method="post" enctype="multipart/form-data">
            <div class="row mb-3 text-center">
                <div class="col-12 text-center">
                    <label for="file">Fichier</label>
                    <input type="file" name="file">
                        <button type="submit">Enregistrer</button>
                </div>
            </div>

            <div class="row mb-3 text-center">
                <div class="col-12 text-center">
                    <?php
                    if (isset($image_upload)) {
                        echo "Votre image a bien été ajoutée sur la page principale";
                    }
                    ?>
                </div>
            </div>
        </form>
    </section>

<!-- Back -->
<div class="col-6">
    <button 
        class="btn btn-sm bcg_plt_golden px-md-5" 
        onclick="window.location.href='../index.php'">
        <span class="ff_arabic_btn"> Retour </span>
    </button>
</div>

<?php
    }
};
?>

</body>