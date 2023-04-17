<?php
// include("../../config/config.php");
// $dept_id = $_REQUEST['dept_id'];
// $value = $_REQUEST['value'];
// $key = $_REQUEST['key'];

// if ($conn) {
//     $delete_query = "UPDATE `department_details` SET `$key` = '$value' where dept_id = '$dept_id';";
//     $row = mysqli_query($conn, $delete_query);
//     if ($row) {
//         echo ("Department detail is updated");
//     } else {
//         echo ("Query not run");
//     }
// } else {
//     echo ("connection not established");
// }



class update
{
    // private $dept_id = $_REQUEST['dept_id'];
    // private $value = $_REQUEST['value'];
    // private $key = $_REQUEST['key'];
    public function __construct($conn, $dept_id, $value, $key)
    {
        if ($conn) {
            $update_query = "UPDATE `department_details` SET `$key` = '$value' where dept_id = '$dept_id';";
            $row = mysqli_query($conn, $update_query);
            if ($row) {
                echo ("Department detail is updated");
            } else {
                echo ("Query not run");
            }
        } else {
            echo ("connection not established");
        }
    }
}

$dept_id = $_REQUEST['dept_id'];
$value = $_REQUEST['value'];
$key = $_REQUEST['key'];

require_once("../../config/config.php");
$conn = new conn();
$conn = $conn->conn();

$create = new update($conn, $dept_id, $value, $key);
