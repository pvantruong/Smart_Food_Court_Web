<?php
header("location:cookHome.php");
require("conection.php");

$sql = "SELECT id, Avb FROM menu";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        if(isset($_POST[$row['id']])){
            $idx = $row[id];
            $sqlchange = "UPDATE menu
            SET
                Avb = 1
            WHERE
                id = $idx;";
        }
        else{
            $idx = $row[id];
            $sqlchange = "UPDATE menu
            SET
                Avb = 0
            WHERE
                id = $idx;";
        }
        mysqli_query($conn, $sqlchange);
    }
    exit;
}   else {
        echo "no dish in database";
}

mysqli_close($conn);
?>