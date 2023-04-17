<?php
include("../../config/config.php");
$dept_id = $_REQUEST['dept_id'];
if ($conn) {
    $delete_query = "DELETE FROM `department_details` WHERE `dept_id` = '$dept_id';";
    $row = mysqli_query($conn, $delete_query);
    if ($row) {
        echo ("Record with Department ID ".$dept_id." is deleted");
    } else {
        echo ("Query not run");
    }
} else {
    echo ("connection not established");
}

?>