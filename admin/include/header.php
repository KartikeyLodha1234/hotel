<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Management · Add Room</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div class="demo-wrapper">
        <!-- ===== SIDE NAV ===== -->
        <nav class="side-nav" id="sideNav">
            <div class="brand">
                <span><i class="fas fa-hotel me-2"></i>Hotel Management</span>
                <button class="menu-toggle" id="menuToggle" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
            </div>

            <div class="nav-collapse-wrap" id="navCollapse">
                <div class="nav-section">
                    <div class="nav-label">Main</div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php"><i class="fas fa-chart-pie"></i> Dashboard</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="reservationsDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-calendar-check"></i> Reservations
                                <i class="fas fa-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="reservationsDropdown">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-clock"></i> Upcoming
                                        Reservations</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-plus-circle"></i> New Booking</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-times-circle"></i>
                                        Cancellations</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="guestsDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-users"></i> Guests
                                <i class="fas fa-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="guestsDropdown">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-list"></i> Guest List</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-crown"></i> VIP Guests</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle show" href="#" id="roomsDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="true">
                                <i class="fas fa-bed"></i> Rooms
                                <i class="fas fa-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu show" aria-labelledby="roomsDropdown">
                                <li><a class="dropdown-item active" href="#"><i class="fas fa-tag"></i> Room
                                        Types</a></li>
                                <li>
                                    <a class="dropdown-item active" href="addroom.php">
                                        <i class="fas fa-plus"></i> Add Room
                                    </a>
                                </li>

                                <li><a class="dropdown-item" href="#"><i class="fas fa-info-circle"></i> Room Status</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="bookingsDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-book-open"></i> Bookings
                                <i class="fas fa-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="bookingsDropdown">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-list"></i> All Bookings</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-clock"></i> Pending</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-check-circle"></i> Confirmed</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="housekeepingDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-broom"></i> Housekeeping
                                <i class="fas fa-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="housekeepingDropdown">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-clipboard-list"></i> Tasks</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-user"></i> Staff Schedule</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-check-double"></i> Completed</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="staffDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user-tie"></i> Staff Management
                                <i class="fas fa-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="staffDropdown">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-users"></i> All Staff</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-user-plus"></i> Add Staff</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-calendar-alt"></i> Shifts</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="reportsDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-file-alt"></i> Reports
                                <i class="fas fa-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="reportsDropdown">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-chart-line"></i> Revenue
                                        Report</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-bed"></i> Occupancy Report</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-users"></i> Guest Report</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="settingsDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-cog"></i> Settings
                                <i class="fas fa-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="settingsDropdown">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-building"></i> Hotel Info</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-credit-card"></i> Payment
                                        Settings</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-bell"></i> Notifications</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-lock"></i> Security</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <hr class="divider">

                <div class="side-footer">
                    <div><span class="status-dot"></span> Online · v2.5.0</div>
                    <div class="mt-1"><i class="far fa-clock me-1"></i> last sync 2 min ago</div>
                </div>
            </div>
        </nav>