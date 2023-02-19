<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lohikal | Products</title>

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
              <a href="products.php" class="nav-link bg-gradient-primary active">
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
              <h1 class="m-0">Products</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Products</li>
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
                  <button class="btn btn-primary" data-toggle="modal" data-target="#add-product"><i class="fa fa-plus-circle"></i> - Add Product</button>
                </div>
                <div class="card-body table-responsive">
                  <table id="table" class="table table-bordered table-striped text-center">
                    <thead>
                      <tr>
                        <th style="white-space: nowrap;">#</th>
                        <th style="white-space: nowrap;">Photo</th>
                        <th style="white-space: nowrap;">Name</th>
                        <th style="white-space: nowrap;">Description</th>
                        <th style="white-space: nowrap;">Prize</th>
                        <th style="white-space: nowrap;">Stock</th>
                        <th style="white-space: nowrap;">Tools</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $tbl_products = $conn->query("SELECT * FROM tbl_products");
                      $counter = 0;
                      foreach ($tbl_products as $row) {
                        echo ('
                        <tr>
                          <td style="white-space: nowrap;">' . ++$counter . '</td>
                          <td style="white-space: nowrap;">
                            <img src="../../wp-images/products/' . $row['product_photo'] . '" class="text-center border" style="width: 50px;" alt="product-photo">
                          </td>
                          <td style="white-space: nowrap;">' . $row['name'] . '</td>
                          <td style="white-space: nowrap;">' . $row['description'] . '</td>
                          <td style="white-space: nowrap;">' . $row['prize'] . '</td>
                          <td style="white-space: nowrap;">' . $row['stock'] . '</td>
                          <td style="white-space: nowrap;">
                            <button data-id="' . $row['product_id'] . '" class="btn btn-success mr-2 btn-edit"><i class="fa fa-edit"></i> - Edit</button>
                            <button data-id="' . $row['product_id'] . '" class="btn btn-danger btn-delete"><i class="fa fa-trash-alt"></i> - Delete</button>
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

  <div class="modal fade" id="add-product" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add Product</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form id="frm_product" action="../wp-actions/addProduct.php" enctype="multipart/form-data" method="post">
        <input type="text" name="csrf_token" value="<?=$_SESSION['csrf_token']?>" hidden>  
        <div class="modal-body">
            <div class="form-group">
              <label for="photo">Photo</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="photo" class="custom-file-input" id="photo">
                  <label class="custom-file-label" for="photo">Choose file</label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" />
            </div>
            <div class="form-group">
              <label for="category">Category</label>
              <select name="category" class="form-control">
                <?php
                $category = $conn->query("SELECT * FROM tbl_category");
                foreach($category as $cat_row){
                  echo('
                  <option value="'.$cat_row['category_id'].'">'.$cat_row['category_name'].'</option>
                  ');
                }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea type="text" class="form-control" style="resize: none;" name="description" rows="5"></textarea>
            </div>
            <div class="form-group">
              <label for="prize">Prize</label>
              <input type="text" class="form-control" name="prize" />
            </div>
            <div class="form-group">
              <label for="stock">Stock</label>
              <input type="text" class="form-control" name="stock" />
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button class="btn btn-danger" data-dismiss="modal">Close</button>
            <button name="add-product" class="btn btn-primary" type="submit">Save</button>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <div class="modal fade" id="edit-product" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Product</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form id="frm_edit" action="php/add.php" enctype="multipart/form-data" method="post">
          <div class="modal-body">
            <div class="form-group">
              <label for="photo">Photo</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="photo" class="custom-file-input" id="photo">
                  <label class="custom-file-label" for="photo">Choose file</label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" />
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea type="text" class="form-control" style="resize: none;" name="description" rows="5"></textarea>
            </div>
            <div class="form-group">
              <label for="prize">Prize</label>
              <input type="text" class="form-control" name="prize" />
            </div>
            <div class="form-group">
              <label for="stock">Stock</label>
              <input type="text" class="form-control" name="stock" />
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
    $("#frm_product").validate({
      rules: {
        photo: {
          required: true,
        },
        name: {
          required: true,
        },
        description: {
          required: true,
        },
        stock: {
          required: true,
          number: true,
        },
        prize: {
          required: true,
          number: true,
        },
      },
      messages: {
        stock: {
          required: "*Required.",
          number: "Please enter a valid number."
        },
        prize: {
          required: "*Required.",
          number: "Please enter a valid number."
        },
        photo,
        name,
        description: {
          required: "*Required."
        },
      },

      errorElement: 'span',
      errorPlacement: function(error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
    });

    $("#frm_edit").validate({
      rules: {
        name: {
          required: true,
        },
        description: {
          required: true,
        },
        stock: {
          required: true,
          number: true,
        },
        prize: {
          required: true,
          number: true,
        },
      },
      messages: {
        stock: {
          required: "*Required.",
          number: "Please enter a valid number."
        },
        prize: {
          required: "*Required.",
          number: "Please enter a valid number."
        },
        name,
        description: {
          required: "*Required."
        },
      },

      errorElement: 'span',
      errorPlacement: function(error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
    });


    $(document).on('click', '.btn-edit', function() {
      $("#edit-product").modal('show');
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
      // let id = $(this).data("id");
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
            //  window.location.href = "php/delete.php?delete_record=" + id;
          }, 1500);
        }
      })
    });
  </script>
</body>

</html>