<?php



$result = mysqli_query($conexion, $query);

$temp = array();

while($row = mysqli_fetch_array($result)) {
    $temp[] = $row;
}

echo json_encode($temp);
?>
