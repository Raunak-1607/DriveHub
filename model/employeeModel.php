<?php
require_once "DbConnect.php";

function getOverviewStats() {
    $conn = dbConnection();
    if($conn) {
        $sql = "SELECT * FROM overview_stats";
        $result = mysqli_query($conn, $sql);
        $data = [];
        if($result && mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
        }
        return $data;
    }
    return [];
}

function getInquiries() {
    $conn = dbConnection();
    if($conn) {
        $sql = "SELECT * FROM inquiries";
        $result = mysqli_query($conn, $sql);
        $data = [];
        if($result && mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
        }
        return $data;
    }
    return [];
}

function getTestDrives() {
    $conn = dbConnection();
    if($conn) {
        $sql = "SELECT * FROM test_drives";
        $result = mysqli_query($conn, $sql);
        $data = [];
        if($result && mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
        }
        return $data;
    }
    return [];
}

function getSales() {
    $conn = dbConnection();
    if($conn) {
        $sql = "SELECT * FROM sales";
        $result = mysqli_query($conn, $sql);
        $data = [];
        if($result && mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
        }
        return $data;
    }
    return [];
}

// Example update functions
function markInquiryResolved($id) {
    $conn = dbConnection();
    if($conn) {
        $sql = "UPDATE inquiries SET status='Resolved' WHERE id=?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        return mysqli_stmt_execute($stmt);
    }
    return false;
}

function updateTestDriveStatus($id, $status) {
    $conn = dbConnection();
    if($conn) {
        $sql = "UPDATE test_drives SET status=? WHERE id=?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, 'si', $status, $id);
        return mysqli_stmt_execute($stmt);
    }
    return false;
}

function markVehicleSold($id) {
    $conn = dbConnection();
    if($conn) {
        $sql = "UPDATE sales SET status='Sold', vehicleSold=1 WHERE id=?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        return mysqli_stmt_execute($stmt);
    }
    return false;
}
function getProfile($userId) {
    $conn = dbConnection();
    if($conn) {
        $sql = "SELECT * FROM users WHERE id=?";
        try {
            $stmt = mysqli_prepare($conn, $sql);
            if ($stmt) {
                mysqli_stmt_bind_param($stmt, 'i', $userId);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if($result && mysqli_num_rows($result) > 0) {
                    return mysqli_fetch_assoc($result);
                }
            }
        } catch (Exception $e) {
            return null;
        }
    }
    // Return dummy data if db fails or not found so UI doesn't break
    return [
        'name' => 'Daniel Reeves',
        'email' => 'd.reeves@drivehub.com',
        'phone' => '+1 (555) 800-1234',
        'role' => 'Employee',
        'status' => 'Active'
    ];
}

function updateProfile($userId, $name, $email, $phone) {
    $conn = dbConnection();
    if($conn) {
        $sql = "UPDATE users SET name=?, email=?, phone=? WHERE id=?";
        try {
            $stmt = mysqli_prepare($conn, $sql);
            if ($stmt) {
                mysqli_stmt_bind_param($stmt, 'sssi', $name, $email, $phone, $userId);
                return mysqli_stmt_execute($stmt);
            }
        } catch (Exception $e) {
            return false;
        }
    }
    return false;
}

function updatePassword($userId, $newPassword) {
    $conn = dbConnection();
    if($conn) {
        $sql = "UPDATE users SET password=? WHERE id=?";
        try {
            $stmt = mysqli_prepare($conn, $sql);
            if ($stmt) {
                mysqli_stmt_bind_param($stmt, 'si', $newPassword, $userId);
                return mysqli_stmt_execute($stmt);
            }
        } catch (Exception $e) {
            return false;
        }
    }
    return false;
}
?>
