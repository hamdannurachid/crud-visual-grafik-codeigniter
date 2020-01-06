    <div class="row">
      <div class="col-md-12 blog-main">
        <h3 class="pb-4 mb-4 font-italic border-bottom">
          Data Pengguna Internet Tahun 2013-2017 <span class="badge badge-success">Bar Chart</span>
        </h3>
      </div>

      <!-- Tampilan Tabel -->
      <div class="col-md-8">
        <div class="card card-primary">
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
      <div class="col-md-4">

        <div class="card text-white bg-light mb-3">
          <div class="card-header">Pengguna Internet</div>
          <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">Penetrasi pengguna internet di Indonesia tahun 2018 <b>naik 10,12%</b> dari tahun sebelumnya. Kenaikan ini <u>mencapai 27 juta pengguna</u>. “Artinya, ada 171,17 juta jiwa pengguna internet dari total 246,16 juta jiwa penduduk Indonesia berdasarkan data BPS (Badan Pusat Statistik)</p>
            <br>
            <small>Sumber: katadata.co.id</small>

          </div>
        </div>

      </div>

    </div><!-- /.blog-main -->

     <div class="row">
      <div class="col-md-12 blog-main">
        <h3 class="pb-4 mb-4 font-italic border-bottom">
          Data Pengguna Internet Tahun 2013-2017 <span class="badge badge-danger">Line Chart</span>
        </h3>
      </div>

      <!-- Tampilan Tabel -->
      <div class="col-md-8">
        <div class="card card-primary">
          <div class="card-body">
            <div class="chart">
              <br />
              <div class="chart-container">
                <div class="bar-chart-container">
                  <canvas id="myChart2"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="col-md-4">

        <div class="card text-white bg-light mb-0">
          <div class="card-header">Tim</div>
          </div>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Hamdan Nurachid
              <span class="badge badge-primary badge-pill">A2.1600074</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Faisal Muhamad Gupron
              <span class="badge badge-success badge-pill">A2.1600062</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Wilda Ainun Nisa
              <span class="badge badge-secondary badge-pill">A2.1600141</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Fernando Tanudjaya
              <span class="badge badge-danger badge-pill">A2.1600067</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Dicky Purnama
              <span class="badge badge-light badge-pill">A2.1600048</span>
            </li>
          </ul>
       
      
      

    </div><!-- /.blog-main -->





  <script src ="<?php echo base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>



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
 var ctx = document.getElementById('myChart2').getContext('2d');
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
