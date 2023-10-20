<?php
include('conn.php');
$array1=$_POST['title'];
$array2=$_POST['url'];
$sql = "INSERT INTO jobdetails (title, joburl) VALUES (?, ?)";
$stmt = $conn->prepare($sql);


foreach ($array1 as $value1) {
    $stmt->bind_param("ss", $value1, $value2);
    $value2 = array_shift($array2);
    if ($stmt->execute()) {
        header('location:display.php');
    } else {
        echo "Error: " . $stmt->error;
    }
}

$conn->close();



?>