<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lohikal | Reports</title>

  <!-- Header Includes -->
  <?php require_once("headers.php"); ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <?php require_once("navbar.php"); ?>
    <!-- /.navbar -->


    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-primary elevation-1">
      
    <!-- Brand Logo -->
      <?php require_once("logo.php"); ?>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- SidebarSearch Form -->
        <div class="form-inline mt-2">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu"
            data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="/" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="users.php" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Users
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="products.php" class="nav-link">
                <i class="nav-icon fa fa-box"></i>
                <p>
                  Products
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="category.php" class="nav-link">
                <i class="nav-icon fas fa-list"></i>
                <p>
                  Category
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="billings.php" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Billings
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="report.php" class="nav-link bg-gradient-primary active">
                <i class="nav-icon fas fa-clipboard-list"></i>
                <p>
                  Reports
                </p>
              </a>
            </li>

                        
            <li class="nav-item">
              <a href="logs.php" class="nav-link">
                <i class="nav-icon fas fa-history"></i>
                <p>
                  Logs
                </p>
              </a>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Reports</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Reports</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Main row -->
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <button class="btn btn-primary" data-toggle="modal" data-target="#search-report"><i
                      class="fa fa-plus-circle"></i> - Add Report</button>
                </div>
                <div class="card-body table-responsive">
                  <table id="table" class="table table-bordered table-striped text-center">
                    <thead>
                      <tr>
                        <th style="white-space: nowrap;">#</th>
                        <th style="white-space: nowrap;">Name</th>
                        <th style="white-space: nowrap;">Stock</th>
                        <th style="white-space: nowrap;">Date</th>
                        <th style="white-space: nowrap;">Tools</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td style="white-space: nowrap;">1</td>
                        <td style="white-space: nowrap;">bag</td>
                        <td class="text-left">69</td>
                        <td style="white-space: nowrap;">feb 15 2004</td>
                        <td style="white-space: nowrap;">
                          <button class="btn btn-success mr-2"><i class="fa fa-edit"></i> - Edit</button>
                          <button class="btn btn-danger"><i class="fa fa-trash-alt"></i> - Delete</button>
                        </td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- /.row -->
        </div><!--/. container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <div id="search-report" class="modal fade" style="display:none;">
      <div class="modal-dialog">
        <div class="modal-content ">
          <div class="modal-header">
            <h5 class="modal-title">Title</h5>
          </div>
          <div class="modal-body">
            <h3>tite</h3>
          </div>
          <div class="modal-footer">
            <button class="btn btn-danger" data-dismiss="modal">close</button>
          </div>
        </div>
      </div>
    </div>
    < <!-- Main Footer -->
      <footer class="main-footer">
        <strong>Copyright &copy; 2023-2023 <a href="https://facebook.com">Lohikal</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 1.0
        </div>
      </footer>
  </div>
  <!-- ./wrapper -->

  <?php require_once("scripts.php") ?>
</body>

</html>