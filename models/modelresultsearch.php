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

if (array_key_exists('loading_practical_results', $_POST)) {
//    $test=$_POST['admissionNo'];
    
   if (isset($_POST['admissionNo']) && !empty($_POST['admissionNo']) ) {
       
       $admisionNo = $_POST['admissionNo'];
    $data = $system->prepareSelectQueryForJSON("SELECT
customer_register.admission_no,
practicalexam.examDate,
practicalexam.a,
practicalexam.a_pass_or_fail,
practicalexam.b,
practicalexam.b_pass_or_fail,
practicalexam.bone,
practicalexam.bone_pass_or_fail,
practicalexam.g,
practicalexam.g_pass_or_fail,
practicalexam.d,
practicalexam.d_pass_or_fail,
practicalexam.ce,
practicalexam.ce_pass_or_fail,
uniquecustomerdetails.namewithinitial
FROM
customer_register,
uniquecustomerdetails,
practicalexam
WHERE
practicalexam.customer_register_id = customer_register.id AND
customer_register.uniqueCustomerDetails_id = uniquecustomerdetails.id AND
customer_register.admission_no='$admisionNo'");
    

    
}

   }