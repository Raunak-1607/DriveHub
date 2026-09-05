<?php // Employee - Inquiry Response ?>
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
            <a class="nav-item active" href="inquiries.php">
                <span class="nav-icon"><i class="fa-solid fa-comments"></i></span> Customer Inquiries
            </a>
            <a class="nav-item" href="test_drive_schedule.php">
                <span class="nav-icon"><i class="fa-solid fa-calendar-days"></i></span> Test Drive Schedule
            </a>
            <a class="nav-item" href="sales_transactions.php">
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
            <h2 class="section-title">Respond to Inquiry</h2>
            <p class="section-subtitle">Review the customer and vehicle, write your response, then mark the inquiry Resolved.</p>

            <div class="form-row">
                <div class="form-group">
                    <label>Customer</label>
                    <input type="text" id="inquiryCustomer" value="Sofia Andersson" readonly>
                </div>
                <div class="form-group">
                    <label>Vehicle</label>
                    <input type="text" id="inquiryVehicle" value="Audi RS7 Sportback" readonly>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group full-width">
                    <label>Customer Message</label>
                    <input type="text" id="inquiryMessage" value="Is a colour customization option available for this car, and does it affect the delivery timeline?" readonly>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group full-width">
                    <label>Your Response</label>
                    <textarea id="inquiryResponse" placeholder="Write a helpful response to the customer..."></textarea>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group full-width">
                    <label>Inquiry Status</label>
                    <select id="inquiryStatus">
                        <option value="Pending">Pending</option>
                        <option value="Resolved">Resolved</option>
                    </select>
                </div>
            </div>

            <div class="modal-actions">
                <a class="btn-cancel" href="inquiries.php">Cancel</a>
                <button class="btn-save">Save Response</button>
            </div>
        </div>
    </div>
</body>
</html>
