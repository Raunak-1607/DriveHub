<?php // Admin - Profile ?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="js/script.js" defer></script>
</head>

<body>
    <div class="sidebar">
        <div class="logo">
            <div class="logo-icon"><i class="fa-solid fa-car"></i></div>
            <span class="logo-text">DRIVE<span class="logo-hub">HUB</span></span>
        </div>

        <div class="user-profile">
            <div class="avatar">AD</div>
            <div class="user-info">
                <span class="user-name">Admin User</span>
                <span class="user-role-badge">&#9679; Admin</span>
            </div>
        </div>

        <hr class="sidebar-divider">

        <nav class="nav-menu">
            <a class="nav-item" href="overview_admin.php">
                <span class="nav-icon"><i class="fa-solid fa-table-cells-large"></i></span> Dashboard
            </a>
            <a class="nav-item" href="vehicle_inventory.php">
                <span class="nav-icon"><i class="fa-solid fa-car-side"></i></span> Vehicle Inventory
            </a>
            <a class="nav-item" href="employee_accounts.php">
                <span class="nav-icon"><i class="fa-solid fa-users"></i></span> Employee Accounts
            </a>
            <a class="nav-item" href="showroom_reports.php">
                <span class="nav-icon"><i class="fa-solid fa-chart-line"></i></span> Showroom Reports
            </a>
            <a class="nav-item active" href="admin_profile.php">
                <span class="nav-icon"><i class="fa-solid fa-user"></i></span> Profile
            </a>
        </nav>

        <hr class="sidebar-divider bottom-divider">
        <a class="nav-item logout-btn" href="#">
            <span class="nav-icon"><i class="fa-solid fa-right-from-bracket"></i></span> Logout
        </a>
    </div>

    <div class="main-content">
        <span class="kicker">ADMIN PANEL</span>
        <h1 class="page-title">Management Dashboard</h1>

        <?php
        require_once "../model/adminModel.php";
        // Mock admin id for now, same approach as the employee side
        $adminId = 1;
        $profile = getUserProfile($adminId);

        $name = htmlspecialchars($profile['name'] ?? 'Admin User');
        $email = htmlspecialchars($profile['email'] ?? 'admin@drivehub.com');
        $phone = htmlspecialchars($profile['phone'] ?? '');
        $status = htmlspecialchars($profile['account_status'] ?? 'Active');
        ?>

        <div class="profile-card">
            <?php
            if (isset($_GET['msg'])) {
                if ($_GET['msg'] == 'profile_updated') echo "<p style='color: green; margin-bottom:15px;'>Profile updated successfully!</p>";
                if ($_GET['msg'] == 'password_updated') echo "<p style='color: green; margin-bottom:15px;'>Password changed successfully!</p>";
            }
            ?>
            <div class="profile-header">
                <div class="profile-avatar">AD</div>
                <div class="profile-info">
                    <h2 class="profile-name"><?php echo $name; ?></h2>
                    <span class="profile-badge">&#9679; Administrator</span>
                </div>
            </div>

            <hr class="profile-divider">

            <div class="profile-row">
                <span class="profile-label">Email</span>
                <span class="profile-value"><?php echo $email; ?></span>
            </div>
            <div class="profile-row">
                <span class="profile-label">Phone</span>
                <span class="profile-value"><?php echo $phone; ?></span>
            </div>
            <div class="profile-row">
                <span class="profile-label">Role</span>
                <span class="profile-value">Administrator</span>
            </div>
            <div class="profile-row">
                <span class="profile-label">Account Status</span>
                <span class="profile-value"><?php echo $status; ?></span>
            </div>

            <hr class="profile-divider">

            <div class="profile-actions">
                <a href="edit_admin_profile.php" class="btn-edit" style="text-decoration:none; display:inline-block; text-align:center;">Edit Profile</a>
                <a href="change_admin_password.php" class="btn-change-pass" style="text-decoration:none; display:inline-block; text-align:center;">Change Password</a>
                <a href="#" class="btn-delete" style="text-decoration:none; display:inline-block; text-align:center;">Delete Account</a>
            </div>
        </div>
    </div>
</body>

</html>
