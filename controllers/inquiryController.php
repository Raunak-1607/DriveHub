<?php
require_once "../model/employeeModel.php";

if(isset($_GET['action']) && isset($_GET['id'])) {
    $action = $_GET['action'];
    $id = $_GET['id'];
    
    if($action == 'resolve') {
        markInquiryResolved($id);
    }
}

header("Location: ../views/inquiries.php");
?>
