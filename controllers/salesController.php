<?php
require_once "../model/employeeModel.php";

if(isset($_GET['action']) && isset($_GET['id'])) {
    $action = $_GET['action'];
    $id = $_GET['id'];
    
    if($action == 'sold') {
        markVehicleSold($id);
    }
}

header("Location: ../views/sales_transactions.php");
?>
