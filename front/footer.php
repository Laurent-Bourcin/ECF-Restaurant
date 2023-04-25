<?php
require "../Back/footer_display_hours.php";
?>

<footer class="container-fluid">    

<?php
/*

            <p> <?php echo $footer_open ?> </p>
            <p> <?php displayHours() ?> </p>  
        </div>
    </div>
*/
?>

<?php
// If today restaurant is open
$footer_open = '';
$footer_title = [];
$footer_hours = [];
if(in_array($date_french, $footer_days_exist)) {
?>
    <div class="row">
        <div class="col-12 bg-dark plt_beige text-center">
            <p> Le restaurant est ouvert aujourd'hui </p>
        </div>
    </div>

    <?php
    // Search hours of day
        $footer_hours_db = $mysqli->query("SELECT * FROM hours WHERE day='$date_french'");
        while($footer_hours_array = mysqli_fetch_array($footer_hours_db)) {
    ?>
            <!-- If restaurant is open -->
            <div class="row">
                <div class="col-12 bg-dark plt_beige text-center">
                    <p> <?php 
                    echo $footer_hours_array["title"]. ': '. $footer_hours_array["hours"] 
                    ?> </p>
                </div>
            </div>
        <?php
        }
    } else {
        ?>
        <!-- If restaurant is closed -->
        <div class="row">
        <div class="col-12 bg-dark plt_beige text-center">
            <p> Le restaurant est fermé aujourd'hui </p>
        </div>
    </div>

    <?php
    }
?>

</footer>