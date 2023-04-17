<?php
// include("../../config/config.php");
// $dept_id = $_REQUEST['dept_id'];
// if ($conn) {
//     $delete_query = "DELETE FROM `department_details` WHERE `dept_id` = '$dept_id';";
//     $row = mysqli_query($conn, $delete_query);
//     if ($row) {
//         echo ("Record with Department ID ".$dept_id." is deleted");
//     } else {
//         echo ("Query not run");
//     }
// } else {
//     echo ("connection not established");
// }

// class delete
// {
//     // private $dept_id = $_REQUEST['dept_id'];
//     // private $value = $_REQUEST['value'];
//     // private $key = $_REQUEST['key'];
//     public function __construct($conn, $dept_id)
//     {
//         if ($conn) {
//             $delete_query = "DELETE FROM `department_details` WHERE `dept_id` = '$dept_id';";
//             $row = mysqli_query($conn, $delete_query);
//             if ($row) {
//                 echo ("Record with Department ID ".$dept_id." is deleted");
//             } else {
//                 echo ("Query not run");
//             }
//         } else {
//             echo ("connection not established");
//         }
//     }
// }

// $dept_id = $_REQUEST['dept_id'];

// require_once("../../config/config.php");
// $conn = new conn();
// $conn = $conn->conn();

// $delete = new delete($conn, $dept_id);



class delete
{
    public function __construct($conn, $dept_id)
    {
        if ($conn) {
            $delete = "DELETE FROM `department_details` WHERE `dept_id` = '$dept_id';";
            $row = mysqli_query($conn, $delete);
            if ($row) {
                echo ("Record with Department ID " . $dept_id . " is deleted");
            } else {
                echo ("Query not run");
            }
        } else {
            echo ("connection not established");
        }
    }
}
require("../../config/config.php");
$conn = new conn();
$conn = $conn->conn();

$dept_id = $_REQUEST['dept_id'];

$delete = new delete($conn, $dept_id);