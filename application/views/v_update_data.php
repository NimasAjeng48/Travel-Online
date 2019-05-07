<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Data Pemesan </title>
    <!-- Bootstrap core CSS -->
	<link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/blog-home.css" rel="stylesheet">
	
 
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><h4>Data Pemesan</h4></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url();?>">HOME
              </a>
            </li>
			<li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url();?>/welcome/Tambah">DATA PEMESAN</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
          <h1 class="my-4">
            <small></small>
          </h1>
          <!-- Blog Post -->
          <div class="card mb-4">
            <div class="card-body">
              <p class="card-text">
			  <H1>Edit Data Pemesan</H1>
			  </p>
			  <div class="portlet-body form">
					<!-- BEGIN FORM-->
					<?php echo form_open('Welcome/ubah_data/'.$hasil->id_penumpang); ?>								
						<div class="form-body">
							<div class="form-group">
								<label class="col-md-12 control-label">Id Penumpang</label>
								<div class="col-md-12">
									<textarea class="form-control" rows="1" placeholder="id_penumpang" name="id_penumpang"><?php echo $hasil->id_penumpang; ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-12 control-label">Nama</label>
								<div class="col-md-12">
									<textarea class="form-control" rows="1" placeholder="nama" name="nama"><?php echo $hasil->nama; ?></textarea>
								</div>
							</div>
              <div class="form-group">
                <label class="col-md-12 control-label">Alamat</label>
                <div class="col-md-12">
                  <textarea class="form-control" rows="1" placeholder="alamat" name="alamat"><?php echo $hasil->alamat; ?></textarea>
                </div>
              </div>

               <div class="form-group">
                <label class="col-md-12 control-label">No Hp</label>
                <div class="col-md-12">
                  <textarea class="form-control" rows="1" placeholder="noHp" name="noHp"><?php echo $hasil->noHp; ?></textarea>
                </div>
              </div>

							
                   <div class="col-md">
                    <div class="form-group">
                      <label for="id_label_single">Asal</label>
                      <label for="id_label_single" style="width: 100%;">
                        <select name="asal" class="js-example-basic-single js-states form-control" id="id_label_single" style="width: 100%;">
                          <option value="Banyuwangi">Banyuwangi</option>
                          <option value="Surabaya">Surabaya</option>
                          <option value="Malang">Malang</option>
                          <option value="Tulungagung">Tulungagung</option>
                          <option value="Ponorogo">Ponorogo</option>
                          <option value="Kediri">Kediri</option>
                          <option value="Madiun">Madiun</option>
                          <option value="mgawi">ngawi</option>
                          <option value="surabaya">surabaya</option>
                           <option value="bojonegoro">bojonegoro</option>
                           <option value="tuban">tuban</option>          
                </div>

                   </select>
                      </label>
                    </div>
                  </div>

                  <div class="col-md">
                    <div class="form-group">
                      <label for="id_label_single2">Tujuan</label>
                      <div class="probootstrap_select-wrap">
                        <label for="id_label_single2" style="width: 100%;">
                        <select name="tujuan" class="js-example-basic-single js-states form-control" id="id_label_single2" style="width: 100%;">
                         <option value="Banyuwangi">Banyuwangi</option>
                          <option value="Surabaya">Surabaya</option>
                          <option value="Malang">Malang</option>
                          <option value="Tulungagung">Tulungagung</option>
                          <option value="Ponorogo">Ponorogo</option>
                          <option value="Kediri">Kediri</option>
                          <option value="Madiun">Madiun</option>
                          <option value="mgawi">ngawi</option>
                          <option value="surabaya">surabaya</option>
                           <option value="bojonegoro">bojonegoro</option>
                           <option value="tuban">tuban</option>
                        </select>
                      </label>
                      </div>
                    </div>
                  </div>

             <div class="form-group">
                <label class="col-md-12 control-label">Tanggal Keberangkatan</label>
                <div class="col-md-12">
                <td>
          <input type="date" name="tanggal" size="50" />
        </td>
                </div>
              </div>
							
						<?php echo form_submit('submit', 'Update'); ?>	
						<?php echo form_close(); ?>	
            <button style="text-decoration: none;" ><a href="<?php echo site_url();?>/admin/admin/index">Kembali</button>

					</form>
					<!-- END FORM-->
				</div>
            </div>
      
          </div>
          <!-- Blog Post -->
        </div>

        <!-- Sidebar Widgets Column -->
       

      </div>
      <!-- /.row -->

    </div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- /.container -->

   
    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	
  </body>
</html>