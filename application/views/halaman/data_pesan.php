<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Data Yang Anda Pemesan</title>
    <!-- Bootstrap core CSS -->
	<link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/blog-home.css" rel="stylesheet">
      
    </head>
		
	<body>
	
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container"><i class="fa fa-home"></i>
       <a class="navbar-brand" href="#"><h4>Data Yang Anda Pemesan</h4></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
			<li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url();?>/welcome/search">HOME</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-12">
          <h1 class="my-4">
            <small></small>
          </h1>
          <!-- Blog Post -->
		  <h1>Data Yang Anda Pemesan </h1>
		  <div class="table-toolbar">
			
				<div class="modal fade" id="basik" tabindex="-1" role="basic" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content" style="width:600px;">
							<div class="modal-header">
									<h4></h4>
							</div>
				    <div class="modal-body">
					<div class="portlet-body form">
					</div>
					</div>
					</div>				
					</div>		
				</div>			
			    </div>
		  <br>
						<table class="table table-striped table-hover table-bordered">
                        <thead>
                           <tr align="center">
                              <th scope="col">Id Penumpang</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Alamat</th>
                              <th scope="col">No Hp</th>
                              <th scope="col">Asal</th>
                              <th scope="col">Tujuan</th>
                              <th scope="col">Tanggal</th>
                           </tr>
                         <tbody> 
             <?php foreach($data->result() as $row) { ?>
                <tr>
                  <td align="center"><?php echo $row->id_penumpang?></td>
                  <td align="center"><?php echo $row->nama?></td>
                  <td align="center"><?php echo $row->alamat?></td>
                  <td align="center"><?php echo $row->noHp?></td>
                  <td align="center"><?php echo $row->asal?></td>
                  <td align="center"><?php echo $row->tujuan?></td>
                  <td align="center"><?php echo $row->tanggal?></td>
            
                 <button style="text-decoration: none;" ><a href="<?php echo site_url();?>/customer/Dashboard">Kembali</button>
                </tr>   
            </tbody>
            <?php } ?>
                 </table>
        
          
          <!-- Blog Post -->
        </div>

        <!-- Sidebar Widgets Column -->
       

      </div>
      <!-- /.row -->

    </div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- /.container -->

    <!-- Footer -->
    

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  </body>
  
  
</html>