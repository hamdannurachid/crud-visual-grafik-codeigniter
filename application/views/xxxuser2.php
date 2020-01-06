    <div class="row">
      <div class="col-md-12 blog-main">
        <h3 class="pb-4 mb-4 font-italic border-bottom">
          Data Pengguna Internet Tahun 2013-2017
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
        <div class="card card-header">
          Keterangan
        </div>
        <div class="card-body" style="border:1px solid grey">
          penetrasi pengguna internet di Indonesia tahun 2018 naik 10,12% dari tahun sebelumnya. Kenaikan ini mencapai 27 juta pengguna. “Artinya, ada 171,17 juta jiwa pengguna internet dari total 246,16 juta jiwa penduduk Indonesia berdasarkan data BPS (Badan Pusat Statistik),

        </div>
      </div>
      

    </div><!-- /.blog-main -->

  </div><!-- /.row -->

  <section class="content">
    <div class="container-fluid">


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
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255,99,132,1)',
            pointRadius : false,
            borderWidth: 1,
            pointColor : '#3b8bba',
            pointStrokeColor : 'rgba(60,141,188,1)',
            pointHightlightFill : '#fff',
            pointHightStroke : 'rgba(60,141,188,1)',
            data: <?php //echo json_encode($data1); 
            echo json_encode($data1);?>
              },

              {
                label: 'Data 2',
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1,
                data: <?php //echo json_encode($data1); 
                echo json_encode($data2);?>

              },
              ],



            },


        // Configuration options go here
        options: {}
      });

    </script>


    <script>
      $(function () {
    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [
    {
      value    : 700,
      color    : '#f56954',
      highlight: '#f56954',
      label    : 'Chrome'
    },
    {
      value    : 500,
      color    : '#00a65a',
      highlight: '#00a65a',
      label    : 'IE'
    },
    {
      value    : 400,
      color    : '#f39c12',
      highlight: '#f39c12',
      label    : 'FireFox'
    },
    {
      value    : 600,
      color    : '#00c0ef',
      highlight: '#00c0ef',
      label    : 'Safari'
    },
    {
      value    : 300,
      color    : '#3c8dbc',
      highlight: '#3c8dbc',
      label    : 'Opera'
    },
    {
      value    : 100,
      color    : '#d2d6de',
      highlight: '#d2d6de',
      label    : 'Navigator'
    }
    ]
    var pieOptions     = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke    : true,
      //String - The colour of each segment stroke
      segmentStrokeColor   : '#fff',
      //Number - The width of each segment stroke
      segmentStrokeWidth   : 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps       : 100,
      //String - Animation easing effect
      animationEasing      : 'easeOutBounce',
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate        : true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale         : false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive           : true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio  : true,
      //String - A legend template
      legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions)

  </script>