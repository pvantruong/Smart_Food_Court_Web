<?php

require_once("conection.php");
header("location:orderCook.php");

$id = isset($_POST['id']) ? $_POST['id'] : '';

$sql = "SELECT * FROM dishqueue WHERE id = $id";


$result = mysqli_query($conn, $sql);
if ($row = mysqli_fetch_assoc($result)) {
    if ($row['process'] == 0) {
        $sqlchange = "UPDATE dishqueue
        SET
            process = 1
        WHERE
            id = $id;";
    }
    else if ($row['process'] == 1){
        $sqlchange = "DELETE FROM dishqueue WHERE id = $id";
    }
    mysqli_query($conn, $sqlchange);
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    
}

mysqli_close($conn);
?>