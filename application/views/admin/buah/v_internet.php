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
                    echo form_open(base_url('admin/internet/tambah'),' class="form-horizontal"');
                    ?>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Tahun</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Tahun" name="tahun" value="<?php echo set_value('tahun') ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Jumlah</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="Jumlah" name="jumlah" value="<?php echo set_value('jumlah') ?>" required>
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
                    <h3 class="card-title">Tabel Pengguna Internet</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tahun</th>
                                <th>Jumlah <small>(juta)</small></th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($internet as $internet ) { ?>
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $internet->tahun ?></td>
                                    <td><?php echo $internet->jumlah ?></td>
                                    <td>

                                     <a type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modalEdit<?php echo $internet->id;?>" data-whatever="@mdo"><i class="fa fa-edit"></i>Edit</a>

                                     <div class="modal fade" id="modalEdit<?php echo $internet->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>admin/internet/update/<?php echo $internet->id;?>">                                   

                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Tahun</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tahun" value="<?php echo $internet->tahun ?>" required>

                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4">Jumlah</label>
                                                                <input type="text" class="form-control" id="inputEmail4" placeholder="Data 1" name="jumlah" value="<?php echo $internet->jumlah ?>" required>
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

                                    <a href="<?php echo base_url('admin/internet/delete/'.$internet->id) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus data ini ?') "><i class="fas fa-trash-o"></i>Hapus</a>
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
    <h3 class="card-title">Pie Chart</h3>

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



<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Bar Chart</h3>

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
              <canvas id="myChartbar"></canvas>
          </div>

      </div>
  </div>
</div>
</div>


<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Line Chart</h3>

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
              <canvas id="myChartline"></canvas>
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
foreach ($internet1 as $internet1) {
	# code...
 $tahun[] = $internet1->tahun;
 $jumlah[] = $internet1->jumlah;
}
$alldata = array_merge( $tahun);
?>
<script>
 var ctx = document.getElementById('myChart').getContext('2d');
 var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'pie',

    // The data for our dataset
    data: {
    	labels: <?php echo json_encode($tahun);?>,
    	datasets: [{
    		label: 'Jumlah',
    		// backgroundColor: 'rgba(60,141,188,0.9)',
            backgroundColor: [
              'rgba(255, 99, 132, 0.5)',
            'rgba(54, 162, 235, 0.5)',
            'rgba(255, 206, 86, 0.5)',
            'rgba(75, 192, 192, 0.5)',
            'rgba(153, 102, 255, 0.5)',
            'rgba(255, 159, 64, 0.5)'
            ],
            borderColor: [
            'rgba(255,99,132,0.3)',
            'rgba(54, 162, 235, 0.3)',
            'rgba(255, 206, 86, 0.3)',
            'rgba(75, 192, 192, 0.3)',
            'rgba(153, 102, 255, 0.3)',
            'rgba(255, 159, 64, 0.3)'
            ],
            // borderColor: 'rgb(60,141,188,0.8',
            pointRadius : false,
            pointColor : '#3b8bba',
            pointStrokeColor : 'rgba(60,141,188,1)',
            pointHightlightFill : '#fff',
            // pointHightStroke : 'rgba(60,141,188,1)',
            data: <?php echo json_encode($jumlah);?>
        },

        ]
    },
    

    // Configuration options go here
    
});
</script>

 <script>
   var ctx = document.getElementById('myChartbar').getContext('2d');
   var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
      labels: <?php echo json_encode($tahun);?>,
      datasets: [{
        label: 'Jumlah (juta)',
        // backgroundColor: 'rgba(60,141,188,0.9)',
        backgroundColor: [
        'rgba(255, 99, 132, 0.5)',
        'rgba(54, 162, 235, 0.5)',
        'rgba(255, 206, 86, 0.5)',
        'rgba(75, 192, 192, 0.5)',
        'rgba(153, 102, 255, 0.5)',
        'rgba(255, 159, 64, 0.5)'
        ],
        borderColor: [
        'rgba(255,99,132,0.3)',
        'rgba(54, 162, 235, 0.3)',
        'rgba(255, 206, 86, 0.3)',
        'rgba(75, 192, 192, 0.3)',
        'rgba(153, 102, 255, 0.3)',
        'rgba(255, 159, 64, 0.3)'
        ],
            // borderColor: 'rgb(60,141,188,0.8',
            pointRadius : false,
            pointColor : '#3b8bba',
            pointStrokeColor : 'rgba(60,141,188,1)',
            pointHightlightFill : '#fff',
            pointHightStroke : 'rgba(60,141,188,1)',
            data: <?php echo json_encode($jumlah);?>
          }, 



          ], 
        },


    // Configuration options go here
    options: {
      responsive: true,
      scales: {
        yAxes: [{
          stacked:true,
          ticks: {
            beginAtZero:true
          }
        }],
        xAxes: [{
          barPercentage: 0.8, 
        }],
      }
    }
  });
</script>


<script>
 var ctx = document.getElementById('myChartline').getContext('2d');
 var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
      labels: <?php echo json_encode($tahun);?>,
      datasets: [{
        label: 'Jumlah (juta)',
        lineTension: 0.3,
        fill: false,
        borderColor: 'red',
        pointHoverBackgroundColor: "rgba(203, 222, 225, 0.9)",
        pointHoverBorderColor: 'black',
        data: <?php echo json_encode($jumlah);?>
      },

      ]
    },


    // Configuration options go here
    options: {
      barValueSpacing: 20,
      scales: {
        yAxes: [{
          stacked:true,
          ticks: {
            min: 0,
          }
        }],
        xAxes: [{
         gridLines: {
          color: "rgba(0, 0, 0, 0)",
        }
      }],
    }
  }
});
</script>



