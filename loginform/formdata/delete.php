<?php

include 'connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $q = "DELETE FROM form_data WHERE id = ?";

    $stmt = mysqli_prepare($conn, $q);

    if ($stmt) {
        header("Location: ../index.php");
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        echo "Record with ID $id has been deleted successfully.";
    } else{
        echo "Error: " .mysqli_error($conn);
    }
} else{
    echo "no 'id' parameter provided. ";
}