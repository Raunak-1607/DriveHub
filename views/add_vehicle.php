<?php // Admin - Add Vehicle ?>
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
        <h1 class="page-title">Add Vehicle</h1>

        <div class="table-container" style="max-width:700px;">
            <?php
            if (isset($_GET['err']) && $_GET['err'] == 'empty_fields') {
                echo "<p style='color:#EF4444; margin-bottom:15px;'>Brand and Model are required.</p>";
            }
            ?>

            <form action="../controllers/adminController.php" method="POST">
                <input type="hidden" name="action" value="add_vehicle">

                <div class="form-row">
                    <div class="form-group">
                        <label>Brand</label>
                        <input type="text" name="brand" required>
                    </div>
                    <div class="form-group">
                        <label>Model</label>
                        <input type="text" name="model" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Year</label>
                        <input type="number" name="year" required>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" name="price" step="0.01" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Fuel Type</label>
                        <select name="fuel_type">
                            <option value="Petrol">Petrol</option>
                            <option value="Diesel">Diesel</option>
                            <option value="Electric">Electric</option>
                            <option value="Hybrid">Hybrid</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Transmission</label>
                        <select name="transmission">
                            <option value="Automatic">Automatic</option>
                            <option value="Manual">Manual</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group full-width">
                        <label>Engine</label>
                        <input type="text" name="engine" placeholder="e.g. 3.0L Twin-Turbo Inline-Six">
                    </div>
                </div>

                <div class="modal-actions">
                    <a class="btn-cancel" href="vehicle_inventory.php">Cancel</a>
                    <button type="submit" class="btn-save">Save Vehicle</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
