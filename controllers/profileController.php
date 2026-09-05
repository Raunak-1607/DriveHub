<?php
require_once "../model/employeeModel.php";

// Simple mock user ID for now since session isn't fully implemented
$userId = 1;

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['action'])) {
        $action = $_POST['action'];
        
        if($action == 'edit_profile') {
            $name = $_POST['name'] ?? '';
            $email = $_POST['email'] ?? '';
            $phone = $_POST['phone'] ?? '';
            
            // Basic validation
            if(!empty($name) && !empty($email)) {
                $result = updateProfile($userId, $name, $email, $phone);
                // Redirect back to profile page on success
                header("Location: ../views/profile.php?msg=profile_updated");
                exit();
            } else {
                // Redirect back to edit page with error
                header("Location: ../views/edit_profile.php?err=empty_fields");
                exit();
            }
        } 
        else if($action == 'change_password') {
            $currentPass = $_POST['current_password'] ?? '';
            $newPass = $_POST['new_password'] ?? '';
            $confirmPass = $_POST['confirm_password'] ?? '';
            
            if(!empty($currentPass) && !empty($newPass) && !empty($confirmPass)) {
                if($newPass === $confirmPass) {
                    // Update password (in a real app, verify current password first and hash the new one)
                    $result = updatePassword($userId, $newPass);
                    header("Location: ../views/profile.php?msg=password_updated");
                    exit();
                } else {
                    header("Location: ../views/change_password.php?err=password_mismatch");
                    exit();
                }
            } else {
                header("Location: ../views/change_password.php?err=empty_fields");
                exit();
            }
        }
    }
}

// Fallback redirect
header("Location: ../views/profile.php");
exit();
?>
