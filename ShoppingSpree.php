<?php
$servername = "localhost";
$username = "root";
$password = "hh2olobtg19730zs1";
$dbname = "shop";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully\n";


  $sql = "CREATE DATABASE shop";
if ($conn -> query($sql) == TRUE){
  echo "Database created successfully";
} else{
  echo "Error creating databse: " . $conn ->error;
}

$sql = "CREATE TABLE items(
    itemName VARCHAR(30) NOT NULL,
    price VARCHAR(10) NOT NULL,
    itemDesc CHAR(255) NOt NULL)";
  
    if ($conn -> query($sql) === TRUE){
      echo "Table items created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
  
    $conn->close();
    
    

$stmt = $conn->prepare("INSERT INTO items (itemName, price, itemDesc) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $itemName, $price, $itemDesc);

$itemName = "Gap NFT";
$price = "2BTC";
$itemDesc = "This one of a kind rare computer security NFT, not only is it majestic\n
but it also provides complete 100% security at all times so nobody steals your bored ape";
$stmt->execute();

$itemName = "NFT Brown";
$price = "420BTC";
$itemDesc = "One of the first NFT's ever created, hand crafted by one of the most skiled\n
programmers in all of history, each etching carved with extreme precision. This is the most unique and glorious NFT";
$stmt->execute();

$itemName = "Ugene NFT";
$price = "0.1BTC";
$itemDesc = "Think of this NFT as an old rusty corolla, it is breaking down and on its last legs\n
however, sometimes it surprises you by getting you from point A to point B, it is something you should use as a last resort";
$stmt->execute();

echo "New items created successfully";

$stmt->close();
$conn->close();







?>