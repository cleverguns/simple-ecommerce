<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lohikal | Category</title>

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
          <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="admin/dashboard/" class="nav-link">
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
              <a href="billings.php" class="nav-link bg-gradient-primary active">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Billings
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="report.php" class="nav-link">
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
              <h1 class="m-0">Billings</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Billings</li>
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
                  <button class="btn btn-primary" data-toggle="modal" data-target="#add-billing"><i class="fa fa-plus-circle"></i> - Add Billings</button>
                </div>
                <div class="card-body table-responsive">
                  <table id="table" class="table table-bordered table-striped text-center">
                    <thead>
                      <tr>
                        <th style="white-space: nowrap;">#</th>
                        <th style="white-space: nowrap;">Full Name</th>
                        <th style="white-space: nowrap;">Contacts</th>
                        <th style="white-space: nowrap;">Address 1</th>
                        <th style="white-space: nowrap;">Address 2</th>
                        <th style="white-space: nowrap;">Postal Code</th>
                        <th style="white-space: nowrap;">Tools</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php
                     $tbl_billings = $conn->query("SELECT * FROM tbl_billings");
                     $counter = 0;
                     foreach($tbl_billings as $row){
                      echo('
                      <tr>
                        <td style="white-space: nowrap;">'.++$counter.'</td>
                        <td style="white-space: nowrap;" class="text-left">'.$row['full_name'].'</td>
                        <td style="white-space: nowrap;" class="text-left">'.$row['contact'].'</td>
                        <td style="white-space: nowrap;" class="text-left">'.$row['address_1'].'</td>
                        <td style="white-space: nowrap;" class="text-left">'.$row['address_2'].' 7</td>
                        <td style="white-space: nowrap;" class="text-left">'.$row['postal_code'].'</td>
                        <td style="white-space: nowrap;">
                          <button data-id="'.$row['billing_id'].'" class="btn btn-success mr-2 btn-edit"><i class="fa fa-edit"></i> - Edit</button>
                          <button data-id="'.$row['billing_id'].'" class="btn btn-danger btn-delete"><i class="fa fa-trash-alt"></i> - Delete</button>
                        </td>
                      </tr>
                      ');
                     }
                     ?>

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

    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2023-2023 <a href="https://facebook.com">Lohikal</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0
      </div>
    </footer>
  </div>
  <!-- ./wrapper -->

  <div class="modal fade" id="add-billing" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add Billing</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="php/add.php" enctype="multipart/form-data" method="post">
          <div class="modal-body">
            <div class="form-group">
              <label for="full_name">Full Name</label>
              <input type="text" class="form-control" name="full_name" required />
            </div>
            <div class="form-group">
              <label for="contact">Contact</label>
              <input type="text" class="form-control" name="contact" required />
            </div>
            <div class="form-group">
              <label for="address_1">Address 1</label>
              <input type="text" class="form-control" name="address_1" required />
            </div>
            <div class="form-group">
              <label for="address_2">Address 2</label>
              <input type="text" class="form-control" name="address_2" required />
            </div>
            <div class="form-group">
              <label for="Postal_code">Postal Code</label>
              <input type="text" class="form-control" name="postal-code" required />
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button class="btn btn-danger" data-dismiss="modal">Close</button>
            <button name="new-account" class="btn btn-primary" type="submit">Save</button>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <div class="modal fade" id="edit-billing" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Billing</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="php/add.php" enctype="multipart/form-data" method="post">
          <div class="modal-body">
            <div class="form-group">
              <label for="full_name">Full Name</label>
              <input type="text" class="form-control" name="full_name" required />
            </div>
            <div class="form-group">
              <label for="contact">Contact</label>
              <input type="text" class="form-control" name="contact" required />
            </div>
            <div class="form-group">
              <label for="address_1">Address 1</label>
              <input type="text" class="form-control" name="address_1" required />
            </div>
            <div class="form-group">
              <label for="address_2">Address 2</label>
              <input type="text" class="form-control" name="address_2" required />
            </div>
            <div class="form-group">
              <label for="Postal_code">Postal Code</label>
              <input type="text" class="form-control" name="postal-code" required />
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button class="btn btn-danger" data-dismiss="modal">Close</button>
            <button name="new-account" class="btn btn-primary" type="submit">Save</button>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <?php require_once("scripts.php") ?>
  <script>
    $(document).on('click', '.btn-edit', function() {
      $("#edit-billing").modal('show');
      /*let record_id = $(this).data("id");
      $.ajax({
        url: "php/edit.php",
        method: "POST",
        data: {
          dead_record: record_id
        },
        dataType: "json",
        success: function (data) {
          if (data == "error") {
            console.error("Something went wrong");
          } else {
            $(".record_id").val(data.id);
            $(".name").val(data.name);
            $(".description").val(data.description);
            $("#edit-record").modal('show');
          }
        }
      
      })*/
    });

    $(document).on('click', '.btn-delete', function(e) {
      e.preventDefault();
      let id = $(this).data("id");
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'Cancel',
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: 'Success!',
            text: "Successfully Deleted!",
            icon: 'success',
            showConfirmButton: false,
            timer: 1500
          })
          setTimeout(function() {
            window.location.href = "php/delete.php?delete_record=" + id;
          }, 1500);
        }
      })
    });
  </script>
</body>

</html>