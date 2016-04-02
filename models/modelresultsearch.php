<?php

require_once '../class/ap_funtions.php';
require_once '../config/dbc.php';
require_once '../class/database.php';
require_once '../class/systemSetting.php';
require_once '../class/functionsByKIT.php';
$system = new setting();
$database = new database();
$pasdManage = new MainConfig();





if (array_key_exists('loading_results', $_POST)) {
//    $test=$_POST['admissionNo'];
     $admisionNo = $_POST['admissionNo'];
   if (isset($_POST['admissionNo']) && !empty($_POST['admissionNo']) ) {
       
      
    $data = $system->prepareSelectQueryForJSON("SELECT
writtenexamresult.examDate,
writtenexamresult.writtenResult,
writtenexamresult.passOrFail,
customer_register.vehicle_class,
customer_register.admission_no,
uniquecustomerdetails.namewithinitial
FROM
writtenexamresult ,
customer_register ,
uniquecustomerdetails
WHERE
writtenexamresult.customer_register_id = customer_register.id AND
customer_register.admission_no = '$admisionNo' AND
customer_register.id = writtenexamresult.customer_register_id AND
customer_register.uniqueCustomerDetails_id = uniquecustomerdetails.id");
    
//    mysql_close($database);
    
}
 else {
    
}
   }

