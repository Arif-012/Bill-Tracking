<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bill";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// if(isset($_POST['query'])){
//   $search = $_POST['query'];
//   $sql = "SELECT * FROM bill WHERE po LIKE '%$search%'";
//   $result = $conn->query($sql);

//   if ($result->num_rows > 0) {
//       while($row = $result->fetch_assoc()) {
//           echo "<p>" . $row["po"] . "</p>";
//       }
//   } else {
//       echo "No results found";
//   }
// }

function searchPO($key){
  // database connection
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "bill";
  
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  

  $sql = "SELECT * FROM `bill` WHERE po LIKE '%$key%'";
  $result = mysqli_query($conn, $sql);

  return $result;
}

function searchVendor($key){
  // database connection
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "bill";
  
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  

  $sql = "SELECT * FROM `bill` WHERE vendor LIKE '%$key%'";
  $result = mysqli_query($conn, $sql);

  return $result;
}

function searchLocation($key){
  // database connection
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "bill";
  
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  

  $sql = "SELECT * FROM `bill` WHERE `location` LIKE '%$key%'";
  $result = mysqli_query($conn, $sql);

  return $result;
}
?>