<!-- chart -->
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="dashboard_graph x_panel">
    <div class="x_title">
      <h2>Biểu đồ doanh thu theo tháng năm</h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#" onclick="window.alert('Tính năng đang được cập nhật')">Cài đặt</a>
            </li>
          </ul>
        </li>
        <li><a class="close-link"><i class="fa fa-close"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <canvas id="lineChart"></canvas>
    </div>
  </div>
</div>
<!-- /chart -->

<!-- Chart.js -->
<script>
  Chart.defaults.global.legend = {
    enabled: false
  };

  // Line chart
  var buyers = document.getElementById("lineChart");
  var lineChart = new Chart(buyers, {
    type: 'line',
    data: <?php echo $strJSON ;  ?>,
    options: {
        responsive: true,
        title: {
          //display: true,
          //position:'right',
          //text:'Doanh thu năm 2016'
        },// end title
        scales: {
              xAxes: [{
                display: true,
                scaleLabel: {
                  display: true,
                  labelString: 'Tháng Năm',
                  
                }
              }],
              yAxes: [{
                display: true,
                scaleLabel: {
                  display: true,
                  labelString: 'Trị giá'
                },
                ticks: {
                  suggestedMin: -10,
                  suggestedMax: 250,
                }
              }]
        },
        tooltips: {
          callbacks: {
            label: function(tooltipItem, data) {
              var datasetLabel = data.datasets[tooltipItem.datasetIndex].label || 'Other';
              var label = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];

              //console.log(data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index] + "-" + label);
              return datasetLabel + ': ' + label.toLocaleString('en-IN') + " đ";
            }
          }
        }
    }
  });
</script>
<!-- //Chart.js -->