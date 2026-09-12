<?php // Admin - Overview ?>
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
            <a class="nav-item active" href="overview_admin.php">
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
            <a class="nav-item" href="admin_profile.php">
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

        <div class="cards-grid" id="cardsGrid">
            <?php
            require_once "../model/adminModel.php";
            $stats = getShowroomReportStats();

            if (empty($stats)) {
                echo "<p>No stats available.</p>";
            } else {
                echo "<div class='stat-card'><h2 class='stat-number' style='color:#F59E0B'>" . htmlspecialchars($stats['total_vehicles']) . "</h2><p class='stat-label'>Total Vehicles</p></div>";
                echo "<div class='stat-card'><h2 class='stat-number' style='color:#22C55E'>" . htmlspecialchars($stats['available_vehicles']) . "</h2><p class='stat-label'>Available Vehicles</p></div>";
                echo "<div class='stat-card'><h2 class='stat-number' style='color:#8B5CF6'>" . htmlspecialchars($stats['total_sales']) . "</h2><p class='stat-label'>Vehicles Sold</p></div>";
                echo "<div class='stat-card'><h2 class='stat-number' style='color:#3B82F6'>" . htmlspecialchars($stats['total_employees']) . "</h2><p class='stat-label'>Employees</p></div>";
            }
            ?>
        </div>
    </div>
</body>

</html>
