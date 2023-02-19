    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown user-small">
                <a class="nav-link user-panel d-flex align-items-center" data-toggle="dropdown" href="#">
                    <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <span class="text-gray"><?= $user_name ?></span>
                </a>

                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                    <button class="dropdown-item" data-toggle="modal" data-target="#user-settings">
                        <i class="fas fa-cog mr-2"></i>Settings
                    </button>
                    <button class="dropdown-item" data-toggle="modal" data-target="#change-password">
                        <i class="fas fa-user-lock mr-2"></i>Change Password
                    </button>
                    <div class="dropdown-divider"></div>
                    <a href="../../wp-includes/logout.php" class="dropdown-item btn-danger">
                        <i class="fas fa-sign-out-alt mr-2"></i>Logout
                    </a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->