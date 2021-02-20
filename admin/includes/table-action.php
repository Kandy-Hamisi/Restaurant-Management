<?php

session_start();

//initializing variables

$tbl_type = "";
$purpose = "";
$status = "Available";
$cid = "NULL";
//Connecting to the database

$mysqli = mysqli_connect('localhost', 'said', '#Password2021', 'Eatery');

if (isset($_POST['add'])) {
    //receiving all input values from the form

    $tbl_type = mysqli_real_escape_string($mysqli, $_POST['tbl-type']);
    $purpose = mysqli_real_escape_string($mysqli, $_POST['purpose']);

    $query = "INSERT INTO alltables(Tabletype, Purpose, status, customer_id) VALUES('$tbl_type', '$purpose', '$status', '$cid' )";

    
    if(mysqli_query($mysqli, $query)){
        echo '<script>window.location="add-table.php"</script>';
        echo '<script>window.alert("Table added Successfully!!")</script>';
    }else{
        echo '<script>window.alert("Failed an error")</script>';
    }
}


?>