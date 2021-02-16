
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

    var areaChartData = {
      labels  : ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
      datasets: [
        {
          label               : 'total niños',
          backgroundColor     : 'rgba(210, 214, 222, 1)',/*rgba(60,141,188,0.9)*/
          borderColor         : '#6c757d',/*rgba(60,141,188,0.8)*/
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [<?php echo $enero1; ?>, <?php echo $febrero1; ?>, <?php echo $marzo1; ?>, <?php echo $abril1; ?>, <?php echo $mayo1; ?>, <?php echo $junio1; ?>, <?php echo $julio1; ?>, <?php echo $agosto1; ?>, <?php echo $septiembre1; ?>, <?php echo $octubre1; ?>, <?php echo $noviembre1; ?>, <?php echo $diciembre1; ?>]
        },
        {
          label               : 'Total niñas',
          backgroundColor     : '#e83e8c',/*rgba(210, 214, 222, 1)*/
          borderColor         : '#e83e8d',/*rgba(210, 214, 222, 1)*/
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [<?php echo $enero2; ?>, <?php echo $febrero2; ?>, <?php echo $marzo2; ?>, <?php echo $abril2; ?>, <?php echo $mayo2; ?>, <?php echo $junio2; ?>, <?php echo $julio2; ?>, <?php echo $agosto2; ?>, <?php echo $septiembre2; ?>, <?php echo $octubre2; ?>, <?php echo $noviembre2; ?>, <?php echo $diciembre2; ?>]
        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    var areaChart       = new Chart(areaChartCanvas, { 
      type: 'line',
      data: areaChartData, 
      options: areaChartOptions
    })

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
    var lineChartOptions = jQuery.extend(true, {}, areaChartOptions)
    var lineChartData = jQuery.extend(true, {}, areaChartData)
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, { 
      type: 'line',
      data: lineChartData, 
      options: lineChartOptions
    })

    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels  :/*'Kinder4', 'Kinder5',  'Prepa6',*/['Primero', 'Segundo', 'Tercero', 'cuarto', 'Quinto', 'Sexto', 'Septimo', 'Octavo', 'Noveno', 'Bto1', 'Bto2', 'Bto3'],
      datasets: [
        { /*<?php //echo $KINDER4; ?>, <?php //echo $KINDER5; ?>, <?php //echo $PREPA6; ?>,*/
          data: [<?php echo $primero; ?>, <?php echo $segundo; ?>, <?php echo $tercer0; ?>, <?php echo $cuarto; ?>, <?php echo $quinto; ?>, <?php echo $sexto; ?>, <?php echo $septimo; ?>, <?php echo $octavo; ?>, <?php echo $noveno; ?>, <?php echo $bto1; ?>, <?php echo $bto2; ?>, <?php echo $bto3; ?>],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de', '#6610f2', '#e83e8c', '#fd7e14', '#f012be', '#20c997', '#17a2b8', '#343a40', '#2b388f', '#ffc107'], /*#ffc107*/
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions      
    })

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = donutData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions      
    })

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = jQuery.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var barChart = new Chart(barChartCanvas, {
      type: 'bar', 
      data: barChartData,
      options: barChartOptions
    })

    //---------------------
    //- STACKED BAR CHART -
    //---------------------
    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
    var stackedBarChartData = jQuery.extend(true, {}, barChartData)

    var stackedBarChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }

    var stackedBarChart = new Chart(stackedBarChartCanvas, {
      type: 'bar', 
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })
  })
</script>