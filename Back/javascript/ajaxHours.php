<?php 
// Connection at db
$mysqli = mysqli_connect("localhost:3307", "root", "", "restaurant");
?>

<?php
// Add options for 2ond select after the first
$dayChoice = $_POST['day'];
echo "<select name='hours_choice'>";
$result_hours = $mysqli->query("SELECT * FROM hours WHERE day='$dayChoice'");
    ?>
    <?php while ($row = mysqli_fetch_array($result_hours)) { ?>
        <option value="<?php echo $row['hours'] ?>"> 
            <?php echo $row['hours'] ?> 
        </option>
    <?php };
?>