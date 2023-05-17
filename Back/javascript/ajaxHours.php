<?php 
// Connection at db
require "../connexion_at_db.php"
?>

<?php
// Add options for 2ond select after the first
$dayChoice = $_POST['day'];
echo "<select name='hours_choice'>";
$result_hours = $mysqli->query("SELECT * FROM hours WHERE day='$dayChoice'");
    ?>
    <?php while ($row = mysqli_fetch_array($result_hours)) { 
        // Configure display of hours
                    $data_hours_start = $row['hours_start'];
                    $data_hours_start = substr($data_hours_start, 0, 2). 'h'. 
                        substr($data_hours_start, 2, 4);

                    $data_hours_end = $row['hours_end'];
                    $data_hours_end = substr($data_hours_end, 0, 2). 'h'. 
                    substr($data_hours_end, 2, 4);
    ?>
        <option value="<?php echo $row['hours_start'] ?>"> 
            <?php echo $data_hours_start. '-'. $data_hours_end ?> 
        </option>
    <?php };
?>