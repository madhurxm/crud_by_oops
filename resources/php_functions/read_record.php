<?php
class read{
    public function records($conn)
    {
        if($conn)
        {
            $records = array();
            $read_query = "SELECT * FROM `department_details`;";
            $rows = mysqli_query( $conn, $read_query );
            if (mysqli_num_rows( $rows ) >= 0) {
                while( $a_row = mysqli_fetch_assoc( $rows ) ) {
                    $records[] = $a_row;
                }
            }
            else{
                die("NO Record found");
            }
            // echo("<pre>");
            // print_r($records);
            // echo("<pre>");
            return $records;
        }
        else{
            die("Connection not established");
        }
    }

}

require("config/config.php");
$conn = new conn();
$conn = $conn -> conn();
$read = new read();
$rows = $read->records($conn);
// echo("<pre>");
// print_r($rows);
// echo("<pre>");
