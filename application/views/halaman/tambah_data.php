<!DOCTYPE html>
<html>
<head>
	<link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/blog-home.css" rel="stylesheet">
	<title></title>
</head>
<body>
	<br>
	<h1> &nbspTambah Data Pemesan</h1>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container"><i class="fa fa-home"></i>
       <a class="navbar-brand" href="#"><h4>Data Pemesan</h4></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
			<li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url();?>/admin/admin/index">HOME</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url();?>/welcome/tambah">ADD DATA
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
          <br>
<form action="<?php echo site_url();?>/welcome/tambah_data" class="form-horizontal" method="post">							
						<div class="form-body">
							<div class="form-group">
								<label class="col-md-12 control-label">Id Penumpang</label>
								<div class="col-md-12">
									<td>
										<input type="input" name="id_penumpang" size="50" />
									</td>
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-12 control-label">Nama Lengkap</label>
								<div class="col-md-12">
								<td>
									<input type="input" name="nama" size="50" />
								</td>
								</div>
							</div>

              <div class="form-group">
                <label class="col-md-12 control-label">Alamat Lengkap</label>
                <div class="col-md-12">
                <td>
                  <input type="text" name="alamat" size="50" />
                </td>
                </div>
              </div>

               <div class="form-group">
                <label class="col-md-12 control-label">No Hp</label>
                <div class="col-md-12">
                <td>
                  <input type="text" name="noHp" size="50" />
                </td>
                </div>
              </div>

							
              <div class="col-md">
                <div class="form-group">
                  <label for="id_label_single">Asal</label>
                    <div class="probootstrap_select-wrap">
                      <label for="id_label_single">
                            <select name="asal" class="js-example-basic-single js-states form-control" id="id_label_single">
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
                  </label>
                </div>
              </div>
                  <div class="col-md">
                    <div class="form-group">
                      <label for="id_label_single2">Tujuan</label>
                      <div class="probootstrap_select-wrap">
                        <label for="id_label_single2"">
                        <select name="tujuan" class="js-example-basic-single js-states form-control" id="id_label_single2" ">
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
              
						<div class="modal-footer">
							<button type="reset" value="reset" class="btn red">Reset</button>
							<button type="submit" class="btn red">Submit</button>
              </div>
							</div>
						</div>
					</form>

</body>
</html>