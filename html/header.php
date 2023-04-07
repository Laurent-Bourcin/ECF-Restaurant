<header class="container-fluid">
    <!-- Connect buton -->
    <div class="row mb-3">
        <div class="col-12 text-end">

            <!-- If connect -->
            <?php
            if (isset($_SESSION['name'])) {
                if ($_SESSION['type']==='Admin') {
                    echo 'Admin ';
                }
                echo $_SESSION['name']. " ". $_SESSION['surname'];
                ?>
                <button 
                    class="btn btn-sm bcg_plt_beige mt-1 plt_golden"
                    onclick="window.location.href='./logout.php'">
                    <span class="ff_arabic_btn"> Déconnexion </span>
                </button>
            <?php
            } else {
            ?>
                <button 
                    class="btn btn-sm bcg_plt_beige mt-1 plt_golden"
                    onclick="window.location.href='./connection.php'">
                    <span class="ff_arabic_btn"> Connexion </span>
                </button>
            <?php 
            } ?>

        </div>
    </div>
    
    <!-- Logo Le Quai Antique-->
    <div class="row">
        <div class="col-12 text-center mb-5">
            <img src="../Images/logos/Logo.png" alt="Logo Le Quai Antique" class="img-fluid">
        </div>
    </div>

    <!-- Navbar -->
    <div class="row text-center mt-md-3">
        <div class="col mb-1">
            <button 
                class="btn btn-sm bcg_plt_golden px-md-5" 
                onclick="window.location.href='./index.php'">
                <span class="ff_arabic_btn"> Accueil </span>
            </button>
        </div>

        <div class="col">
            <button 
                class="btn btn-sm bcg_plt_golden px-md-5" 
                onclick="window.location.href='./food_list.php'">
                <span class="ff_arabic_btn"> Carte </span>
            </button>
        </div>

        <div class="col">
            <button 
                class="btn btn-sm bcg_plt_golden px-md-5" 
                onclick="window.location.href='./menus.php'">
                <span class="ff_arabic_btn"> Menus </span>
            </button>
        </div>

        <div class="col">
            <button 
                class="btn btn-sm bcg_plt_golden px-md-5" 
                onclick="window.location.href='./hours.php'">
                <span class="ff_arabic_btn"> Horaires </span>
            </button>
        </div>
    </div>
</header>