<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $po = $_POST['po'];
   $location = $_POST['location'];
   $vendor = $_POST['vendor'];
   $description = $_POST['description'];
   $date = $_POST['date'];
   $receivedby = $_POST['receivedby']; 
   $remarks = $_POST['remarks'];

   $sql = "INSERT INTO `bill`(`serial`,`po`,`location`, `vendor`, `description`, `date`, `receivedby`, `remarks`) VALUES (NULL , '$po', '$location', '$vendor', '$description', '$date', '$receivedby', '$remarks')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=New record created successfully");
   } else {
      if (mysqli_warning_count($conn)) {
         echo "Failed: Duplicate 'po' entered. Please enter a unique 'po'.";
      } else {
         echo "Failed: " . mysqli_error($conn);
      }
   }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>Bill Tracking</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
      Bill Tracking
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Add New Bill</h3>
         <p class="text-muted">Complete the form below to add a Bill</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" onsubmit="return validateForm()" style="width:200vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Bill/Po Number:</label>
                  <input type="text" class="form-control" name="po" id="po" placeholder="Ex:1400000217">
               </div>
               <div class="col">
                  <label class="form-label">Location:</label>
                  <input type="text" class="form-control" name="location" id="location" placeholder="Ex:Rangpur Depot">
               </div>
               <div class="col">
                  <label class="form-label">Vendor:</label>
                  <input type="text" class="form-control" name="vendor" id="vendor" placeholder="Ex:Alif Tech">
               </div>
               <div class="col">
                  <label class="form-label">Description:</label>
                  <input type="text" class="form-control" name="description" id="description" placeholder="write description">
               </div>
               <div class="col">
                  <label class="form-label">Date:</label>
                  <input type="date" class="form-control" name="date" id="date" placeholder="date">
               </div>
               <div class="col">
                  <label class="form-label">Received_by:</label>
                  <input type="text" class="form-control" name="receivedby" id="receivedby" placeholder="Write your name">
               </div>
               <div class="col">
                  <label class="form-label">Remarks:</label>
                  <input type="text" class="form-control" name="remarks" id="remarks" placeholder="">
               </div>
            </div>
            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

   <script>
      function validateForm() {
         var po = document.getElementById("po").value;
         var location = document.getElementById("location").value;
         var vendor = document.getElementById("vendor").value;
         var description = document.getElementById("description").value;
         var date = document.getElementById("date").value;
         var receivedby = document.getElementById("receivedby").value;
         var remarks = document.getElementById("remarks").value;

         if (po == "" || location == "" || vendor == "" || description == "" || date == "" || receivedby == "" || remarks == "") {
            alert("Please fill out all fields");
            return false;
         }

         // You can add more specific validations for each field here if needed

         return true;
      }
   </script>

</body>

</html>
