    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Hotel management</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

        <!-- Your CSS -->
        <link rel="stylesheet" href="style/Style.css">
    </head>

    <body>

        <!-- SIDEBAR -->
        <div class="sidebar">

            <!-- Logo -->
            <div class="logo">
                <i class="bi bi-house-door"></i>
                <span>Hotel Management</span>
            </div>

            <!-- Menu -->
            <ul class="nav flex-column">

                <li class="nav-item">
                    <a href="index.php" class="nav-link active">
                        <i class="bi bi-speedometer2"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link nav-dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#roomMenu"
                        aria-expanded="false">
                        <i class="bi bi-house-door"></i>
                        <span>Room Management</span>
                        <i class="bi bi-chevron-down dropdown-indicator"></i>
                    </a>
                    <div class="collapse" id="roomMenu">
                        <ul class="nav flex-column sub-menu">
                            <li><a href="addroom.php">Add Room</a></li>
                            <li><a href="room_list.php">Room List</a></li>
                            <li><a href="room_types.php">Room Types</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link nav-dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#staffMenu"
                        aria-expanded="false">
                        <i class="bi bi-people-fill"></i>
                        <span>Staff Management</span>
                        <i class="bi bi-chevron-down dropdown-indicator"></i>
                    </a>
                    <div class="collapse" id="staffMenu">
                        <ul class="nav flex-column sub-menu">
                            <li><a href="staff_add.php">Add Staff</a></li>
                            <li><a href="staff_list.php">Staff List</a></li>
                            <li><a href="staff_roles.php">Roles</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="booking.php" class="nav-link">
                        <i class="bi bi-calendar-check"></i>
                        <span>Booking/Reservation</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="expenses.php" class="nav-link">
                        <i class="bi bi-wallet2"></i>
                        <span>Expenses</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link nav-dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#reportsMenu"
                        aria-expanded="false">
                        <i class="bi bi-bar-chart"></i>
                        <span>Reports</span>
                        <i class="bi bi-chevron-down dropdown-indicator"></i>
                    </a>
                    <div class="collapse" id="reportsMenu">
                        <ul class="nav flex-column sub-menu">
                            <li><a href="reports_daily.php">Daily</a></li>
                            <li><a href="reports_monthly.php">Monthly</a></li>
                            <li><a href="reports_financial.php">Financial</a></li>
                        </ul>
                    </div>
                </li>

                <hr>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-gear"></i>
                        <span>Settings</span>
                    </a>
                </li>
   <li class="nav-item">
                <a href="#" class="nav-link logout">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Logout</span>
                </a>
            </li>

            </ul>

        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    </body>

    </html>