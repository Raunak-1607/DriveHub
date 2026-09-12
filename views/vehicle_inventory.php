<?php // Admin - Vehicle Inventory ?>
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
            <a class="nav-item active" href="vehicle_inventory.php">
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

        <div class="table-container">
            <div class="section-header">
                <div>
                    <h2 class="section-title">Vehicle Inventory</h2>
                    <p class="section-subtitle">Add, edit, or remove vehicles from the showroom.</p>
                </div>
                <a class="btn-new-sale" href="add_vehicle.php">+ Add Vehicle</a>
            </div>

            <?php
            if (isset($_GET['msg'])) {
                if ($_GET['msg'] == 'vehicle_added') echo "<p style='color:#22C55E; margin-bottom:10px;'>Vehicle added successfully.</p>";
                if ($_GET['msg'] == 'vehicle_updated') echo "<p style='color:#22C55E; margin-bottom:10px;'>Vehicle updated successfully.</p>";
            }
            ?>

            <table id="vehicleTable">
                <tr>
                    <th>BRAND</th>
                    <th>MODEL</th>
                    <th>YEAR</th>
                    <th>PRICE</th>
                    <th>STATUS</th>
                    <th>ACTIONS</th>
                </tr>
                <?php
                require_once "../model/adminModel.php";
                $vehicles = getAllVehicles();

                if (!empty($vehicles)) {
                    foreach ($vehicles as $v) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($v['brand']) . "</td>";
                        echo "<td>" . htmlspecialchars($v['model']) . "</td>";
                        echo "<td>" . htmlspecialchars($v['year']) . "</td>";
                        echo "<td><span class='amount-text'>$" . htmlspecialchars(number_format($v['price'])) . "</span></td>";

                        $badgeClass = ($v['availability_status'] === 'Available') ? 'badge-approved' : 'badge-sold';
                        echo "<td><span class='" . $badgeClass . "'>&#9679; " . htmlspecialchars($v['availability_status']) . "</span></td>";

                        echo "<td><div class='actions-cell'>";
                        echo "<a class='btn-view action-btn' href='edit_vehicle.php?id=" . urlencode($v['car_id']) . "'>Edit</a>";
                        echo "<a class='btn-reject action-btn' href='../controllers/adminController.php?action=delete_vehicle&id=" . urlencode($v['car_id']) . "' onclick=\"return confirm('Delete this vehicle?');\">Delete</a>";
                        echo "</div></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No vehicles found.</td></tr>";
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>
