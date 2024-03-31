<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Tracking</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
            Bill Tracking
        </nav>
        <div>
            <h2>Search Bill by PO </h2>
            <input name="poSearchName" type="text"  placeholder="Enter PO no..." id="searchByPO" onkeyup="ajaxPOSearch()">
            <input name="vendorSearchName" type="text"  placeholder="Enter Vendor name..." id="searchByVendor" onkeyup="ajaxVendorSearch()">
            <input name="locationSearchName" type="text"  placeholder="Enter Location..." id="searchByLocation" onkeyup="ajaxLocationSearch()">
            <!-- <input type="button" value="Search" id="btn-search"> -->
        </div>

        <!-- Add new button -->
        <br>
        <a href="add-new.php" class="btn btn-dark mb-3">Add New Bill</a>

       <div class="table-area">
       <table id="bill-table" class="table table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Serial</th>
                    <th scope="col">Bill/PO</th>
                    <th scope="col">Location</th>
                    <th scope="col">Vendor</th>
                    <th scope="col">Description</th>
                    <th scope="col">Date</th>
                    <th scope="col">Received_By</th>
                    <th scope="col">Remarks</th>
                </tr>
            </thead>
            
            <tbody id='searchResult'>
                <?php
                $sql = "SELECT * FROM bill";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $row["serial"] ?></td>
                        <td><?php echo $row["po"] ?></td>
                        <td><?php echo $row["location"] ?></td>
                        <td><?php echo $row["vendor"] ?></td>
                        <td><?php echo $row["description"] ?></td>
                        <td><?php echo $row["date"] ?></td>
                        <td><?php echo $row["receivedby"] ?></td>
                        <td><?php echo $row["remarks"] ?></td>
                        <td>
                            <a href="edit.php?serial=<?php echo $row["serial"] ?>" class="link-dark"><s class="fa-solid fa-pen-to-square fs-5 me-3"></s></a>
                            <a href="delete.php?serial=<?php echo $row["serial"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
       </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="ajaxBillSearch.js"></script>
</body>

</html>
