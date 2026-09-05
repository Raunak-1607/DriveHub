<?php
require_once "../model/employeeModel.php";

if(isset($_GET['action']) && isset($_GET['id'])) {
    $action = $_GET['action'];
    $id = $_GET['id'];
    
    if($action == 'approve') {
        updateTestDriveStatus($id, 'Approved');
    } else if($action == 'reject') {
        updateTestDriveStatus($id, 'Rejected');
    }
}

header("Location: ../views/test_drive_schedule.php");
?>
