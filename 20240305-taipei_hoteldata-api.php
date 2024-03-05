<?php
header("Access-Control-Allow-Origin:*");
$servername = "localhost";
$username = "id21959951_fiiluo";
$password = "@Kit20711";
$dbname = "id21959951_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("連線錯誤" . mysqli_connect_error());
}

$sql = "SELECT * FROM hoteldata";
$result = mysqli_query($conn, $sql);

$jsonData = array();
while ($row = mysqli_fetch_assoc($result)) {
    // echo $row["name"]."<br>";
    $jsonData[] = $row;
}
echo json_encode($jsonData);

mysqli_close($conn);