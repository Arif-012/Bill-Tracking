<?php
// Database Connection 
include "db_conn.php";

if(isset($_POST['donorSearchName'])){
 
    $donorSearchName = $_POST['donorSearchName'];
    if($donorSearchName != null){
        
        $result = searchBill($donorSearchName); // Probable error occurrence
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){

                echo "<tr>";
                echo    "<td>". $row["serial"] . "</td>";
                echo    "<td>". $row["po"] . "</td>";
                echo    "<td>". $row["location"] . "</td>";
                echo    "<td>". $row["vendor"] . "</td>";
                echo    "<td>". $row["description"] . "</td>";
                echo    "<td>". $row["date"] . "</td>";
                echo    "<td>". $row["receivedby"] . "</td>";
                echo    "<td>". $row["remarks"] . "</td>";
                echo    "<td>";
                echo        "<a href='edit.php?serial=". $row["serial"] . "' class='link-dark'><s class='fa-solid fa-pen-to-square fs-5 me-3'></s></a>";
                echo        "<a href='delete.php?serial=". $row["serial"] . "' class='link-dark'><i class='fa-solid fa-trash fs-5'></i></a>";
                echo    "</td>";
                echo "</tr>";
            }
        }
        else{
            echo "<font color='red'>Not found your entered data </font>";
        }
    }
    else{
        // Handle case where $donorSearchName is null

        $sql = "SELECT * FROM bill";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){

                echo "<tr>";
                echo    "<td>". $row["serial"] . "</td>";
                echo    "<td>". $row["po"] . "</td>";
                echo    "<td>". $row["location"] . "</td>";
                echo    "<td>". $row["vendor"] . "</td>";
                echo    "<td>". $row["description"] . "</td>";
                echo    "<td>". $row["date"] . "</td>";
                echo    "<td>". $row["receivedby"] . "</td>";
                echo    "<td>". $row["remarks"] . "</td>";
                echo    "<td>";
                echo        "<a href='edit.php?serial=". $row["serial"] . "' class='link-dark'><s class='fa-solid fa-pen-to-square fs-5 me-3'></s></a>";
                echo        "<a href='delete.php?serial=". $row["serial"] . "' class='link-dark'><i class='fa-solid fa-trash fs-5'></i></a>";
                echo    "</td>";
                echo "</tr>";
            }
        }
        else{
            echo "Not found your entered data";
        }

    }
}
?>
