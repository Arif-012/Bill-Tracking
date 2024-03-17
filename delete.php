<?php
include "db_conn.php";
$serial = $_GET["serial"];
$sql = "DELETE FROM `bill` WHERE serial = $serial";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: index.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
