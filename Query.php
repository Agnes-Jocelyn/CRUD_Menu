<?php

include 'Process.php';

$id = 0;
$name = '';
$stock = '';
$price = '';
$update = false;

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $stock = $_POST['stock'];
    $price = $_POST['price'];

    mysqli_query(
        $mysqli,
        "INSERT INTO menu ( name, stock, price) VALUES ('$name','$stock','$price') "
    );

    header('location:Index.php');
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($mysqli, "DELETE FROM menu WHERE id=$id");

    header('location:Index.php');
}

// if (isset($_GET['edit'])) {
//     $id = $_GET['edit'];
//     $update = true;
//     $result = mysqli_query($mysqli, "SELECT * FROM menu WHERE id=$id");
//     print_r($result);

//     if ($result->num_rows) {
//         $row = $result->fetch_array();
//         $name = $row['name'];
//         $stock = $row['stock'];
//         $price = $row['price'];
//     }
// }

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $stock = $_POST['stock'];
    $price = $_POST['price'];

    mysqli_query(
        $mysqli,
        "UPDATE menu SET name='$name', stock='$stock', price='$price' WHERE id=$id"
    );
    header('location:index.php');
}
