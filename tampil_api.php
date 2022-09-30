<?php 

require_once ('connect.php');

$result = mysqli_query($conn,"SELECT * FROM todolist ORDER BY id ASC");

if ($result ){

    $tampil = array();
    while ($row = mysqli_fetch_array ($result)){
        array_push($tampil, array(
            'id' => $row['id'],
            'todo' => $row['todo'],
        ));

    }
    echo json_encode ($tampil);
}

?>