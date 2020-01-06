 <section class="content">
 	<div class="container-fluid">


<!-- <p>
  <a class="btn btn-primary" data-toggle="" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
   Lihat Tabel
  </a>
</p> -->

<!-- tambah collapse -->
<div class="" id="collapseExample">
  <div class="card card-body">
    
<button type="button" class="btn btn-sm btn-primary mb-2" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="width: 100px">Tambah Data</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Baru</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <?php 
                            echo validation_errors('<div class="alert alert-warning">','</div>');
        //form open
                            echo form_open(base_url('admin/buah/tambah'),' class="form-horizontal"');
                            ?>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Bulan</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan bulan" name="bulan" value="<?php echo set_value('bulan') ?>" required>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Data 1</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Data 1" name="data1" value="<?php echo set_value('data1') ?>" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Data 2</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder="Data 2" name="data2" value="<?php echo set_value('data2') ?>" required>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>



        <?php
// Notifikasi
        if($this->session->flashdata('sukses')) {
            echo '<p class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
            echo $this->session->flashdata('sukses');
            echo '</div>';
        }
        ?>


        <!-- Tampilan Tabel -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabel Penjualan</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Bulan</th>
                                    <th>Data 1</th>
                                    <th>Data 2</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; foreach ($buah as $buah ) { ?>
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $buah->bulan ?></td>
                                        <td><?php echo $buah->data1 ?></td>
                                        <td><?php echo $buah->data2 ?></td>
                                        <td>

                                           <a type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modalEdit<?php echo $buah->id;?>" data-whatever="@mdo"><i class="fa fa-edit"></i>Edit</a>

                                           <div class="modal fade" id="modalEdit<?php echo $buah->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
<form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>admin/buah/update/<?php echo $buah->id;?>">                                   

                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Bulan</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="bulan" value="<?php echo $buah->bulan ?>" required>

                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4">Data 1</label>
                                                                <input type="text" class="form-control" id="inputEmail4" placeholder="Data 1" name="data1" value="<?php echo $buah->data1 ?>" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputPassword4">Data 2</label>
                                                                <input type="text" class="form-control" id="inputPassword4" placeholder="Data 2" name="data2" value="<?php echo $buah->data2 ?>" required>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <a href="<?php echo base_url('admin/buah/delete/'.$buah->id) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus data ini ?') "><i class="fas fa-trash-o"></i>Hapus</a>
                                    </td>
                                    </tr>

                                    <?php $no++; } ?>

                                </tbody>
                            </tbody>
                            
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div><!-- /.row -->














  </div>
</div>


 			
 		<!-- Tampilan Tabel -->
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Area Chart</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
 			<br />
 			<div class="chart-container">
 				<div class="bar-chart-container">
 					<canvas id="myChart"></canvas>
 				</div>

 			</div>
            </div>
            </div>
            </div>
            </div>

 		</div>
 	</section>
 	<script src ="<?php echo base_url() ?>assets/plugins/chart.js/Chart.min.js">

 	</script>

 	<!--Load chart js-->
 	<!-- <script type="text/javascript" src="<?php?>"></script> -->
 	<?php 
 	foreach ($buah1 as $buah1) {
	# code...
 		$data1[] = $buah1->data1;
 		$data2[] = $buah1->data2;
 		$bulan[] = $buah1->bulan;
 	}
 	$alldata = array_merge( $data1, $data2 );
 	?>
 	<script>
 		var ctx = document.getElementById('myChart').getContext('2d');
 		var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
    	labels: <?php echo json_encode($bulan);?>,
    	datasets: [{
    		label: 'Data 1',
    		backgroundColor: 'rgba(60,141,188,0.9)',
            borderColor: 'rgb(60,141,188,0.8',
            pointRadius : false,
            pointColor : '#3b8bba',
            pointStrokeColor : 'rgba(60,141,188,1)',
            pointHightlightFill : '#fff',
            pointHightStroke : 'rgba(60,141,188,1)',
            data: <?php //echo json_encode($data1); 
            echo json_encode($data1);?>
        },

        {
        	label: 'Data 2',
        	backgroundColor: 'red',
        	borderColor: 'rgb(255, 99, 130)',
            data: <?php //echo json_encode($data1); 
            echo json_encode($data2);?>

        },
        ]
    },
    

    // Configuration options go here
    options: {}
});
</script>
