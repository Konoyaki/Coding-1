<?php
// Include the database connection file
require_once("dbConnection.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM users ORDERBY id DESC");
?>

<html>
<head>
    <title>Homepage</title>
</head>

<body>
    <h2>Homepage</h2>
    <p>
        <a href="add.php">Add New Data</a>
    </p>
    <table width='80%' border=0>
        <tr bgcolor='#DDDDDD'>
            <td><strong>Name</strong></td>
            <td><strong>Age</strong></td>
            <td><strong>Email</strong></td>
            <td><strong>Action</strong></td>
        </tr>
        