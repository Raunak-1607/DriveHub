<?php // Employee - New Sale ?>
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
            <div class="avatar">DR</div>
            <div class="user-info">
                <span class="user-name">Daniel Reeves</span>
                <span class="user-role-badge">&#9679; Employee</span>
            </div>
        </div>

        <hr class="sidebar-divider">

        <nav class="nav-menu">
            <a class="nav-item" href="overview.php">
                <span class="nav-icon"><i class="fa-solid fa-table-cells-large"></i></span> Overview
            </a>
            <a class="nav-item" href="inquiries.php">
                <span class="nav-icon"><i class="fa-solid fa-comments"></i></span> Customer Inquiries
            </a>
            <a class="nav-item" href="test_drive_schedule.php">
                <span class="nav-icon"><i class="fa-solid fa-calendar-days"></i></span> Test Drive Schedule
            </a>
            <a class="nav-item active" href="sales_transactions.php">
                <span class="nav-icon"><i class="fa-solid fa-dollar-sign"></i></span> Sales Transactions
            </a>
            <a class="nav-item" href="profile.php">
                <span class="nav-icon"><i class="fa-solid fa-user"></i></span> Profile
            </a>
        </nav>

        <hr class="sidebar-divider bottom-divider">
        <a class="nav-item logout-btn" href="#">
            <span class="nav-icon"><i class="fa-solid fa-right-from-bracket"></i></span> Logout
        </a>
    </div>

    <div class="main-content">
        <span class="kicker">STAFF WORKSPACE</span>
        <h1 class="page-title">Employee Operations</h1>

        <div class="table-container" style="max-width:700px;">
            <h2 class="section-title">New Sale</h2>
            <p class="section-subtitle">Create a sales record. Marking it <span style="color:#EF4444;">Sold</span> updates the vehicle's availability.</p>

            <div class="form-row">
                <div class="form-group">
                    <label>Customer</label>
                    <select id="saleCustomer">
                        <option value="">Select a customer</option>
                        <option value="james">James Harrington</option>
                        <option value="sofia">Sofia Andersson</option>
                        <option value="marcus">Marcus Webb</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Vehicle (available only)</label>
                    <select id="saleVehicle">
                        <option value="">Select a vehicle</option>
                        <option value="porsche">Porsche 911 Carrera S</option>
                        <option value="bmw">BMW M4 Competition</option>
                        <option value="ferrari">Ferrari Roma Spider</option>
                    </select>
                </div>
            </div>

            <div class="availability-banner">
                <span>&#9679; Selected vehicle is currently available</span>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Sale Price</label>
                    <div class="input-with-suffix">
                        <input type="text" id="salePrice" value="112,000">
                        <span class="input-suffix">USD</span>
                    </div>
                </div>
                <div class="form-group">
                    <label>Sale Date</label>
                    <input type="text" id="saleDate" value="2024-08-24">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group full-width">
                    <label>Status</label>
                    <select id="saleStatus">
                        <option value="Pending">Pending</option>
                        <option value="Sold">Sold</option>
                    </select>
                </div>
            </div>

            <div class="modal-actions">
                <a class="btn-cancel" href="sales_transactions.php">Cancel</a>
                <button class="btn-save">Save Sale</button>
            </div>
        </div>
    </div>
</body>

</html>
