<?php
//header("Content-type: text/xml");
include '../DB/db.php';

$admisionnum = $_POST['adnum'];

$sql = "SELECT
details.admissionNo,
details.`name`,
details.vclass,
details.examDate,
details.`status`
FROM
details
WHERE
details.admissionNo ='".$admisionnum."'";


echo "<tr><th>Admission No</th><th>Name</th><th>VClass</th><th>Exam Date</th></tr>";
foreach ($db->query($sql )as $row ){
   echo "<tr><td>"."test"."</td><td>".$row['name']."</td><td>".$row['vclass']."</td><td>".$row['examDate']."</td></tr>";
   


//$xml;

//foreach ($db->query($sql)as $row) {
//    
//    $xml="<details>";
//    
//    $xml .= "<admissionNo>".$row['admissionNo']. "</admissionNo>";
//    $xml .= "<name>".$row['name']. "</name>";
//    $xml .= "<vclass>".$row['vclass']. "</vclass>";
//    $xml .= "<examDate>".$row['examDate']. "</examDate>";
//    $xml .= "<status>".$row['status']. "</status>";
//    
//    
//    $xml.="</details>";
    
    
    
    
//    echo $row['count'];
//    if ($row['count'] == 0) {
//
////        $sql = "INSERT INTO customer(type_id,name,type,contactinfo) VALUES(" . $typeid . ",'" . $name . "','" . $type . "','" . $contacinfo . "')";
////        if (!mysqli_query($db, $sql)) {
////            die('Query failed ERROR: ' . mysqli_error($db));
////            echo mysqli_error($db);
////        } else {
////            // header("location:branch.php");
////        }
//        echo '1';
//    } else {
//
//        echo '0';
//    }
//    


}
//echo $xml;







