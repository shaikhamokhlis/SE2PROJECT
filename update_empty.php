<!-- This php code block is what connects the website to the database via the "connection.php" class -->
<?php

session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST") {

    $query = "SELECT * FROM office WHERE Staff_Name IS NULL  ";
    $result = mysqli_query($con, $query);
    $array_staff_name=$_POST['staff_updated'];
    $counter=0;
    $flag=True;

    if( mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {   
            if ($array_staff_name[$counter]== "") {
                $counter+=1;
                continue;
            }
            else {
                $query="UPDATE office set Staff_Name='$array_staff_name[$counter]' where Office_Number='$row[Office_Number]'";
                $result_2=mysqli_query($con, $query);
                echo "<script> alert('تم التحديث بنجاح'); window.location.href='update.php'; </script>";
                $flag=False;
            }

        $counter+=1;
    }

}

if ($flag) {
    header("Location: update.php"); 
	die;
}

}
?>