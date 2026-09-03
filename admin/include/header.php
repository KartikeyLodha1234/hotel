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
        <nav class="sidebar" id="sidebarNav">
            <div class="sidebar-brand">
                <i class="bi bi-grid-3x3-gap-fill"></i> Hotel management
            </div>
            <div class="nav flex-column">
                <a href="#" class="nav-link active">
                    <i class="bi bi-speedometer2"></i> Dashboard
                </a>
                <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-people"></i> Room Managements
                </a>

                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="#">Add Room</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">View Rooms</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Room Categories</a>
                    </li>
                </ul>
            </div>
                <a href="#" class="nav-link">
                    <i class="bi bi-bar-chart-line"></i> Report
                </a>
                <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-people"></i> Staff Managements
                </a>

                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="#">Add Staff</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">View Staff</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Staff Roles</a>
                    </li>
                </ul>
            </div>

                <a href="#" class="nav-link">
                    <i class="bi bi-box-seam"></i> Products
                </a>
                <a href="#" class="nav-link">
                    <i class="bi bi-gear"></i> Settings
                </a>
            </div>
        </nav>

        <!-- overlay for mobile -->
        <div class="sidebar-overlay" id="sidebarOverlay"></div>

        <!-- MAIN WRAPPER -->
        <div class="main-wrapper">

            <!-- TOP NAVBAR -->
            <header class="top-navbar">
                <div class="d-flex align-items-center gap-3">
                    <button class="navbar-toggler-side" id="sidebarToggle" type="button">
                        <i class="bi bi-list"></i>
                    </button>
                </div>
                <div class="d-flex align-items-center gap-3">

    <!-- Search -->
    <i class="bi bi-search text-secondary"
       style="font-size: 1.2rem; cursor: pointer;"></i>

    <!-- Notifications -->
    <i class="bi bi-bell text-secondary"
       style="font-size: 1.2rem; cursor: pointer;"></i>

    <!-- Admin Dropdown -->
    <div class="dropdown">
        <button
            class="btn p-0 border-0 bg-transparent d-flex align-items-center gap-2"
            type="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
        >
            <div class="avatar-icon">
                <i class="bi bi-person-fill"></i>
            </div>

            <span class="d-none d-sm-inline text-secondary small">
                Admin
            </span>

            <i class="bi bi-chevron-down text-secondary small"></i>
        </button>

        <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2">

            <li>
                <div class="px-3 py-2">
                    <div class="fw-semibold">Admin</div>
                    <small class="text-muted">Administrator</small>
                </div>
            </li>

            <li><hr class="dropdown-divider"></li>

            <li>
                <a class="dropdown-item" href="/admin/dashboard">
                    <i class="bi bi-speedometer2 me-2"></i>
                    Dashboard
                </a>
            </li>

            <li>
                <a class="dropdown-item" href="/admin/profile">
                    <i class="bi bi-person me-2"></i>
                    My Profile
                </a>
            </li>

            <li>
                <a class="dropdown-item" href="/admin/users">
                    <i class="bi bi-people me-2"></i>
                    Manage Users
                </a>
            </li>

            <li>
                <a class="dropdown-item" href="/admin/settings">
                    <i class="bi bi-gear me-2"></i>
                    Settings
                </a>
            </li>

            <li><hr class="dropdown-divider"></li>

            <li>
                <a class="dropdown-item text-danger" href="/logout">
                    <i class="bi bi-box-arrow-right me-2"></i>
                    Logout
                </a>
            </li>

        </ul>
    </div>
</div>

            </header>

        </div>

        <!-- Bootstrap JS bundle -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripte.js"></script>
    </body>

    </html>