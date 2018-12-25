<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <font color="#0099FF"><h4 align="center"><?php echo $this->session->flashdata('message');?></h4></font>
    <title>SB Admin - Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url(''); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(''); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url(''); ?>assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(''); ?>assets/css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    
      <div id="content-wrapper">

        <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="home">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Data Anggota</li>
          </ol>

          <!-- DataTables Example -->

          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Edit Data Anggota </div>
              <div class="card-body">
              <div class="table-responsive">

			<?php echo form_open('perpus/update_anggota') ?>
			  

			   <div class="form-group">
			    <label for="text">Id Anggota</label>
			    <input type="text" name="id_anggota" value="<?php echo $anggota->id_anggota ?>" class="form-control" placeholder="Masukkan Id Anggota">
			  </div>


			  <div class="form-group">
			    <label for="text">NIK</label>
			    <input type="text" name="nik" value="<?php echo $anggota->nik ?>" class="form-control" placeholder="Masukkan NIK">
			  </div>

			  <div class="form-group">
			    <label for="text">Nama</label>
			    <input type="text" name="nama" value="<?php echo $anggota->nama ?>" class="form-control" placeholder="Masukkan Nama">
			  </div>

			  <div class="form-group">
			    <label for="text">No Handphone</label>
			    <input type="text" name="no_hp" value="<?php echo $anggota->no_hp ?>" class="form-control" placeholder="Masukkan No_Handphone">
			  </div>

			  <div class="form-group">
			    <label for="text">Email</label>
			    <input type="text" name="email" value="<?php echo $anggota->email ?>" class="form-control" placeholder="Masukkan Email" >
			  </div>

			  <div class="form-group">
			    <label for="text">Alamat</label>
			    <input type="text" name="alamat" value="<?php echo $anggota->alamat ?>" class="form-control">
			  </div>

			  <button type="submit" class="btn btn-md btn-success">Update</button>
			  <button type="reset" class="btn btn-md btn-warning">reset</button>
			<?php echo form_close() ?>
             </div>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

          <p class="small text-center text-muted my-5">
            <em>More table examples coming soon...</em>
          </p>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
         <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright Perpustakaan Cilebut 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?php echo site_url('perpus') ?>">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(''); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(''); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(''); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url(''); ?>assets/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url(''); ?>assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(''); ?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(''); ?>assets/js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="<?php echo base_url(''); ?>assets/js/demo/datatables-demo.js"></script>
    <script src="<?php echo base_url(''); ?>assets/js/demo/chart-area-demo.js"></script>

  </body>

</html>
                  