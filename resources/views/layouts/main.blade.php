<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('css/plugins/fontawesome-free/css/all.min.css')}}">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet"
    href="{{ asset('css/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('css/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('css/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('css/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('css/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('css/plugins/summernote/summernote-bs4.min.css')}}">

  <link rel="stylesheet" href="{{ asset('css/plugins/ion-rangeslider/css/ion.rangeSlider.min.css')}}">
  <!-- bootstrap slider -->
  <link rel="stylesheet" href="{{ asset('css/plugins/bootstrap-slider/css/bootstrap-slider.min.css')}}">



  <link rel="stylesheet" href="{{asset('css/plugins/uplot/uPlot.min.css')}}">

  <link rel="stylesheet" href="{{ asset('css/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/plugins/bs-stepper/css/bs-stepper.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/plugins/dropzone/min/dropzone.min.css')}}">


  <link rel="stylesheet" href="{{ asset('css/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

  <link rel="stylesheet" href="{{ asset('css/plugins/jsgrid/jsgrid.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/plugins/jsgrid/jsgrid-theme.min.css')}}">

  <link rel="stylesheet" href="{{ asset('css/plugins/fullcalendar/main.css')}}">

  <link rel="stylesheet" href="{{asset('css/plugins/ekko-lightbox/ekko-lightbox.css')}}">


  <style>
    .color-palette {
      height: 35px;
      line-height: 35px;
      text-align: right;
      padding-right: .75rem;
    }

    .color-palette.disabled {
      text-align: center;
      padding-right: 0;
      display: block;
    }

    .color-palette-set {
      margin-bottom: 15px;
    }

    .color-palette span {
      display: none;
      font-size: 12px;
    }

    .color-palette:hover span {
      display: block;
    }

    .color-palette.disabled span {
      display: block;
      text-align: left;
      padding-left: .75rem;
    }

    .color-palette-box h4 {
      position: absolute;
      left: 1.25rem;
      margin-top: .75rem;
      color: rgba(255, 255, 255, 0.8);
      font-size: 12px;
      display: block;
      z-index: 7;
    }
  </style>

  <style>
    .truncate-cell {
      max-width: 100px;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="{{asset('css/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60"
        width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="/" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="{{ asset('css/dist/img/user1-128x128.jpg')}}" alt="User Avatar"
                  class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="{{ asset('css/dist/img/user8-128x128.jpg')}}" alt="User Avatar"
                  class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="{{ asset('css/dist/img/user3-128x128.jpg')}}" alt="User Avatar"
                  class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
        @if (!auth()->check())
      <li class="nav-item">
        <a class="btn btn-primary mr-2" href="/login">Login</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-warning" href="/register">Register</a>

      </li>
    @else
    <li class="nav-item">
      <form action="/logout" method="POST">
      @csrf
      <button class="btn btn-info" type="submit" class="nav-link">
        logout
      </button>
      </form>
    </li>

    <li class="nav-item">
      <a class="btn btn-warning" href="/profile">Profile</a>

    </li>
  @endif


      </ul>

    </nav>
    <!-- /.navbar -->
    @yield('content')

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="/" class="brand-link">
        <img src="{{ asset('css/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
          class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{ asset('css/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">{{auth()->check() ? auth()->user()->name : 'Alexander Pierce'}}</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            @if (auth()->check())
        <li class="nav-header">EXAMPLES</li>

        @if (auth()->user()->hasPermission('students.index'))
      <li class="nav-item">
        <a href="/students" class="nav-link">
        <i class="nav-icon far fa-calendar-alt"></i>
        <p>
        Students
        <span class="badge badge-info right"></span>
        </p>
        </a>
      </li>
    @endif

        @if (auth()->user()->hasPermission('posts.index'))

      <li class="nav-item">
        <a href="/posts" class="nav-link">
        <i class="nav-icon far fa-calendar-alt"></i>
        <p>
        Posts
        <span class="badge badge-info right"></span>
        </p>
        </a>
      </li>
    @endif
        @if (auth()->user()->hasPermission('cars.index'))

      <li class="nav-item">
        <a href="/cars" class="nav-link">
        <i class="nav-icon far fa-calendar-alt"></i>
        <p>
        Cars
        <span class="badge badge-info right"></span>
        </p>
        </a>
      </li>
    @endif
        @if (auth()->user()->roles->contains('role', 'admin'))
      <li class="nav-item">
        <a href="/roles" class="nav-link">
        <i class="nav-icon far fa-calendar-alt"></i>
        <p>
        Roles
        <span class="badge badge-info right"></span>
        </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/users" class="nav-link">
        <i class="nav-icon far fa-calendar-alt"></i>
        <p>
        Users
        <span class="badge badge-info right"></span>
        </p>
        </a>
      </li>
    @endif

      @endif





          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>



    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const data = [{ x: 'Jan', net: 100, cogs: 50, gm: 50 }, { x: 'Feb', net: 120, cogs: 55, gm: 75 }];
    const cfg = {
      type: 'bar',
      data: {
        labels: ['Jan', 'Feb'],
        datasets: [{
          label: 'Net sales',
          data: data,
          parsing: {
            yAxisKey: 'net'
          }
        }, {
          label: 'Cost of goods sold',
          data: data,
          parsing: {
            yAxisKey: 'cogs'
          }
        }, {
          label: 'Gross margin',
          data: data,
          parsing: {
            yAxisKey: 'gm'
          }
        }]
      },
    };
  </script>


  <!-- jQuery -->
  <script src="{{ asset('css/plugins/jquery/jquery.min.js')}}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{asset('css/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('css/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- ChartJS -->
  <script src="{{asset('css/plugins/chart.js/Chart.min.js')}}"></script>
  <!-- Sparkline -->
  <!-- JQVMap -->
  <script src="{{ asset('css/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
  <script src="{{asset('css/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{ asset('css/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
  <!-- daterangepicker -->
  <script src="{{asset('css/plugins/moment/moment.min.js')}}"></script>
  <script src="{{asset('css/plugins/daterangepicker/daterangepicker.js')}}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{ asset('css/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
  <!-- Summernote -->
  <script src="{{asset('css/plugins/summernote/summernote-bs4.min.js')}}"></script>
  <!-- overlayScrollbars -->
  <script src="{{asset('css/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('css/dist/js/adminlte.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <!-- <script src="{{asset('css/dist/js/demo.js')}}"></script> -->
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{asset('css/dist/js/pages/dashboard.js')}}"></script>


  <!-- Bootstrap -->
  <!-- overlayScrollbars -->
  <!-- AdminLTE App -->

  <!-- PAGE PLUGINS -->
  <!-- jQuery Mapael -->
  <script src="{{asset('css/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
  <script src="{{asset('css/plugins/raphael/raphael.min.js')}}"></script>
  <script src="{{asset('css/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
  <script src="{{asset('css/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
  <!-- ChartJS -->

  <!-- AdminLTE for demo purposes -->
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{asset('css/dist/js/pages/dashboard2.js')}}"></script>



  <!-- Bootstrap -->
  <!-- AdminLTE -->

  <!-- OPTIONAL SCRIPTS -->
  <!-- AdminLTE for demo purposes -->
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{asset('css/dist/js/pages/dashboard3.js')}}"></script>
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
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [
          {
            label: 'Digital Goods',
            backgroundColor: 'rgba(60,141,188,0.9)',
            borderColor: 'rgba(60,141,188,0.8)',
            pointRadius: false,
            pointColor: '#3b8bba',
            pointStrokeColor: 'rgba(60,141,188,1)',
            pointHighlightFill: '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data: [28, 48, 40, 19, 86, 27, 90]
          },
          {
            label: 'Electronics',
            backgroundColor: 'rgba(210, 214, 222, 1)',
            borderColor: 'rgba(210, 214, 222, 1)',
            pointRadius: false,
            pointColor: 'rgba(210, 214, 222, 1)',
            pointStrokeColor: '#c1c7d1',
            pointHighlightFill: '#fff',
            pointHighlightStroke: 'rgba(220,220,220,1)',
            data: [65, 59, 80, 81, 56, 55, 40]
          },
        ]
      }

      var areaChartOptions = {
        maintainAspectRatio: false,
        responsive: true,
        legend: {
          display: false
        },
        scales: {
          xAxes: [{
            gridLines: {
              display: false,
            }
          }],
          yAxes: [{
            gridLines: {
              display: false,
            }
          }]
        }
      }

      // This will get the first returned node in the jQuery collection.
      new Chart(areaChartCanvas, {
        type: 'line',
        data: areaChartData,
        options: areaChartOptions
      })

      //-------------
      //- LINE CHART -
      //--------------
      var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
      var lineChartOptions = $.extend(true, {}, areaChartOptions)
      var lineChartData = $.extend(true, {}, areaChartData)
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
      var donutData = {
        labels: [
          'Chrome',
          'IE',
          'FireFox',
          'Safari',
          'Opera',
          'Navigator',
        ],
        datasets: [
          {
            data: [700, 500, 400, 600, 300, 100],
            backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
          }
        ]
      }
      var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })

      //-------------
      //- PIE CHART -
      //-------------
      // Get context with jQuery - using jQuery's .get() method.
      var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
      var pieData = donutData;
      var pieOptions = {
        maintainAspectRatio: false,
        responsive: true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      new Chart(pieChartCanvas, {
        type: 'pie',
        data: pieData,
        options: pieOptions
      })

      //-------------
      //- BAR CHART -
      //-------------
      var barChartCanvas = $('#barChart').get(0).getContext('2d')
      var barChartData = $.extend(true, {}, areaChartData)
      var temp0 = areaChartData.datasets[0]
      var temp1 = areaChartData.datasets[1]
      barChartData.datasets[0] = temp1
      barChartData.datasets[1] = temp0

      var barChartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        datasetFill: false
      }

      new Chart(barChartCanvas, {
        type: 'bar',
        data: barChartData,
        options: barChartOptions
      })

      //---------------------
      //- STACKED BAR CHART -
      //---------------------
      var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
      var stackedBarChartData = $.extend(true, {}, barChartData)

      var stackedBarChartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          xAxes: [{
            stacked: true,
          }],
          yAxes: [{
            stacked: true
          }]
        }
      }

      new Chart(stackedBarChartCanvas, {
        type: 'bar',
        data: stackedBarChartData,
        options: stackedBarChartOptions
      })
    })
  </script>


  <!-- Bootstrap 4 -->
  <!-- AdminLTE App -->
  <script src="{{asset('css/dist/js/adminlte.min.js')}}"></script>
  <!-- FLOT CHARTS -->
  <script src="{{asset('css/plugins/flot/jquery.flot.js')}}"></script>
  <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
  <script src="{{asset('css/plugins/flot/plugins/jquery.flot.resize.js')}}"></script>
  <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
  <script src="{{asset('css/plugins/flot/plugins/jquery.flot.pie.js')}}"></script>
  <script>
    $(function () {
      /*
       * Flot Interactive Chart
       * -----------------------
       */
      // We use an inline data source in the example, usually data would
      // be fetched from a server
      var data = [],
        totalPoints = 100

      function getRandomData() {

        if (data.length > 0) {
          data = data.slice(1)
        }

        // Do a random walk
        while (data.length < totalPoints) {

          var prev = data.length > 0 ? data[data.length - 1] : 50,
            y = prev + Math.random() * 10 - 5

          if (y < 0) {
            y = 0
          } else if (y > 100) {
            y = 100
          }

          data.push(y)
        }

        // Zip the generated y values with the x values
        var res = []
        for (var i = 0; i < data.length; ++i) {
          res.push([i, data[i]])
        }

        return res
      }

      var interactive_plot = $.plot('#interactive', [
        {
          data: getRandomData(),
        }
      ],
        {
          grid: {
            borderColor: '#f3f3f3',
            borderWidth: 1,
            tickColor: '#f3f3f3'
          },
          series: {
            color: '#3c8dbc',
            lines: {
              lineWidth: 2,
              show: true,
              fill: true,
            },
          },
          yaxis: {
            min: 0,
            max: 100,
            show: true
          },
          xaxis: {
            show: true
          }
        }
      )

      var updateInterval = 500 //Fetch data ever x milliseconds
      var realtime = 'on' //If == to on then fetch data every x seconds. else stop fetching
      function update() {

        interactive_plot.setData([getRandomData()])

        // Since the axes don't change, we don't need to call plot.setupGrid()
        interactive_plot.draw()
        if (realtime === 'on') {
          setTimeout(update, updateInterval)
        }
      }

      //INITIALIZE REALTIME DATA FETCHING
      if (realtime === 'on') {
        update()
      }
      //REALTIME TOGGLE
      $('#realtime .btn').click(function () {
        if ($(this).data('toggle') === 'on') {
          realtime = 'on'
        }
        else {
          realtime = 'off'
        }
        update()
      })
      /*
       * END INTERACTIVE CHART
       */


      /*
       * LINE CHART
       * ----------
       */
      //LINE randomly generated data

      var sin = [],
        cos = []
      for (var i = 0; i < 14; i += 0.5) {
        sin.push([i, Math.sin(i)])
        cos.push([i, Math.cos(i)])
      }
      var line_data1 = {
        data: sin,
        color: '#3c8dbc'
      }
      var line_data2 = {
        data: cos,
        color: '#00c0ef'
      }
      $.plot('#line-chart', [line_data1, line_data2], {
        grid: {
          hoverable: true,
          borderColor: '#f3f3f3',
          borderWidth: 1,
          tickColor: '#f3f3f3'
        },
        series: {
          shadowSize: 0,
          lines: {
            show: true
          },
          points: {
            show: true
          }
        },
        lines: {
          fill: false,
          color: ['#3c8dbc', '#f56954']
        },
        yaxis: {
          show: true
        },
        xaxis: {
          show: true
        }
      })
      //Initialize tooltip on hover
      $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
        position: 'absolute',
        display: 'none',
        opacity: 0.8
      }).appendTo('body')
      $('#line-chart').bind('plothover', function (event, pos, item) {

        if (item) {
          var x = item.datapoint[0].toFixed(2),
            y = item.datapoint[1].toFixed(2)

          $('#line-chart-tooltip').html(item.series.label + ' of ' + x + ' = ' + y)
            .css({
              top: item.pageY + 5,
              left: item.pageX + 5
            })
            .fadeIn(200)
        } else {
          $('#line-chart-tooltip').hide()
        }

      })
      /* END LINE CHART */

      /*
       * FULL WIDTH STATIC AREA CHART
       * -----------------
       */
      var areaData = [[2, 88.0], [3, 93.3], [4, 102.0], [5, 108.5], [6, 115.7], [7, 115.6],
      [8, 124.6], [9, 130.3], [10, 134.3], [11, 141.4], [12, 146.5], [13, 151.7], [14, 159.9],
      [15, 165.4], [16, 167.8], [17, 168.7], [18, 169.5], [19, 168.0]]
      $.plot('#area-chart', [areaData], {
        grid: {
          borderWidth: 0
        },
        series: {
          shadowSize: 0, // Drawing is faster without shadows
          color: '#00c0ef',
          lines: {
            fill: true //Converts the line chart to area chart
          },
        },
        yaxis: {
          show: false
        },
        xaxis: {
          show: false
        }
      })

      /* END AREA CHART */

      /*
       * BAR CHART
       * ---------
       */

      var bar_data = {
        data: [[1, 10], [2, 8], [3, 4], [4, 13], [5, 17], [6, 9]],
        bars: { show: true }
      }
      $.plot('#bar-chart', [bar_data], {
        grid: {
          borderWidth: 1,
          borderColor: '#f3f3f3',
          tickColor: '#f3f3f3'
        },
        series: {
          bars: {
            show: true, barWidth: 0.5, align: 'center',
          },
        },
        colors: ['#3c8dbc'],
        xaxis: {
          ticks: [[1, 'January'], [2, 'February'], [3, 'March'], [4, 'April'], [5, 'May'], [6, 'June']]
        }
      })
      /* END BAR CHART */

      /*
       * DONUT CHART
       * -----------
       */

      var donutData = [
        {
          label: 'Series2',
          data: 30,
          color: '#3c8dbc'
        },
        {
          label: 'Series3',
          data: 20,
          color: '#0073b7'
        },
        {
          label: 'Series4',
          data: 50,
          color: '#00c0ef'
        }
      ]
      $.plot('#donut-chart', donutData, {
        series: {
          pie: {
            show: true,
            radius: 1,
            innerRadius: 0.5,
            label: {
              show: true,
              radius: 2 / 3,
              formatter: labelFormatter,
              threshold: 0.1
            }

          }
        },
        legend: {
          show: false
        }
      })
      /*
       * END DONUT CHART
       */

    })

    /*
     * Custom Label formatter
     * ----------------------
     */
    function labelFormatter(label, series) {
      return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
        + label
        + '<br>'
        + Math.round(series.percent) + '%</div>'
    }
  </script>



  <!-- Sparkline -->
  <script src="{{asset('css/plugins/sparklines/sparkline.js')}}"></script>
  <script>
    $(function () {
      /* jQueryKnob */

      $('.knob').knob({
        /*change : function (value) {
         //console.log("change : " + value);
         },
         release : function (value) {
         console.log("release : " + value);
         },
         cancel : function () {
         console.log("cancel : " + this.value);
         },*/
        draw: function () {

          // "tron" case
          if (this.$.data('skin') == 'tron') {

            var a = this.angle(this.cv)  // Angle
              ,
              sa = this.startAngle          // Previous start angle
              ,
              sat = this.startAngle         // Start angle
              ,
              ea                            // Previous end angle
              ,
              eat = sat + a                 // End angle
              ,
              r = true

            this.g.lineWidth = this.lineWidth

            this.o.cursor
              && (sat = eat - 0.3)
              && (eat = eat + 0.3)

            if (this.o.displayPrevious) {
              ea = this.startAngle + this.angle(this.value)
              this.o.cursor
                && (sa = ea - 0.3)
                && (ea = ea + 0.3)
              this.g.beginPath()
              this.g.strokeStyle = this.previousColor
              this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false)
              this.g.stroke()
            }

            this.g.beginPath()
            this.g.strokeStyle = r ? this.o.fgColor : this.fgColor
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false)
            this.g.stroke()

            this.g.lineWidth = 2
            this.g.beginPath()
            this.g.strokeStyle = this.o.fgColor
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false)
            this.g.stroke()

            return false
          }
        }
      })
      /* END JQUERY KNOB */

      //INITIALIZE SPARKLINE CHARTS
      var sparkline1 = new Sparkline($('#sparkline-1')[0], { width: 240, height: 70, lineColor: '#92c1dc', endColor: '#92c1dc' })
      var sparkline2 = new Sparkline($('#sparkline-2')[0], { width: 240, height: 70, lineColor: '#f56954', endColor: '#f56954' })
      var sparkline3 = new Sparkline($('#sparkline-3')[0], { width: 240, height: 70, lineColor: '#3af221', endColor: '#3af221' })

      sparkline1.draw([1000, 1200, 920, 927, 931, 1027, 819, 930, 1021])
      sparkline2.draw([515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921])
      sparkline3.draw([15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21])

    })

  </script>



  <script src="{{asset('css/plugins/uplot/uPlot.iife.min.js')}}"></script>
  <!-- AdminLTE App -->

  <script>
    $(function () {
      /* uPlot
       * -------
       * Here we will create a few charts using uPlot
       */

      function getSize(elementId) {
        return {
          width: document.getElementById(elementId).offsetWidth,
          height: document.getElementById(elementId).offsetHeight,
        }
      }

      let data = [
        [0, 1, 2, 3, 4, 5, 6],
        [28, 48, 40, 19, 86, 27, 90],
        [65, 59, 80, 81, 56, 55, 40]
      ];

      //--------------
      //- AREA CHART -
      //--------------

      const optsAreaChart = {
        ...getSize('areaChart'),
        scales: {
          x: {
            time: false,
          },
          y: {
            range: [0, 100],
          },
        },
        series: [
          {},
          {
            fill: 'rgba(60,141,188,0.7)',
            stroke: 'rgba(60,141,188,1)',
          },
          {
            stroke: '#c1c7d1',
            fill: 'rgba(210, 214, 222, .7)',
          },
        ],
      };

      let areaChart = new uPlot(optsAreaChart, data, document.getElementById('areaChart'));

      const optsLineChart = {
        ...getSize('lineChart'),
        scales: {
          x: {
            time: false,
          },
          y: {
            range: [0, 100],
          },
        },
        series: [
          {},
          {
            fill: 'transparent',
            width: 5,
            stroke: 'rgba(60,141,188,1)',
          },
          {
            stroke: '#c1c7d1',
            width: 5,
            fill: 'transparent',
          },
        ],
      };

      let lineChart = new uPlot(optsLineChart, data, document.getElementById('lineChart'));

      window.addEventListener("resize", e => {
        areaChart.setSize(getSize('areaChart'));
        lineChart.setSize(getSize('lineChart'));
      });
    })
  </script>




  <script src="{{asset('css/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
  <!-- Bootstrap slider -->
  <script src="{{asset('css/plugins/bootstrap-slider/bootstrap-slider.min.js')}}"></script>

  <script>
    $(function () {
      /* BOOTSTRAP SLIDER */
      $('.slider').bootstrapSlider()

      /* ION SLIDER */
      $('#range_1').ionRangeSlider({
        min: 0,
        max: 5000,
        from: 1000,
        to: 4000,
        type: 'double',
        step: 1,
        prefix: '$',
        prettify: false,
        hasGrid: true
      })
      $('#range_2').ionRangeSlider()

      $('#range_5').ionRangeSlider({
        min: 0,
        max: 10,
        type: 'single',
        step: 0.1,
        postfix: ' mm',
        prettify: false,
        hasGrid: true
      })
      $('#range_6').ionRangeSlider({
        min: -50,
        max: 50,
        from: 0,
        type: 'single',
        step: 1,
        postfix: '°',
        prettify: false,
        hasGrid: true
      })

      $('#range_4').ionRangeSlider({
        type: 'single',
        step: 100,
        postfix: ' light years',
        from: 55000,
        hideMinMax: true,
        hideFromTo: false
      })
      $('#range_3').ionRangeSlider({
        type: 'double',
        postfix: ' miles',
        step: 10000,
        from: 25000000,
        to: 35000000,
        onChange: function (obj) {
          var t = ''
          for (var prop in obj) {
            t += prop + ': ' + obj[prop] + '\r\n'
          }
          $('#result').html(t)
        },
        onLoad: function (obj) {
          //
        }
      })
    })
  </script>


  <script src="{{asset('css/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>



  <script src="{{ asset('css/plugins/select2/js/select2.full.min.js')}}"></script>
  <!-- Bootstrap4 Duallistbox -->
  <script src="{{ asset('css/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
  <!-- InputMask -->
  <script src="{{ asset('css/plugins/moment/moment.min.js')}}"></script>
  <script src="{{ asset('css/plugins/inputmask/jquery.inputmask.min.js')}}"></script>
  <!-- date-range-picker -->
  <script src="{{ asset('css/plugins/daterangepicker/daterangepicker.js')}}"></script>
  <!-- bootstrap color picker -->
  <script src="{{ asset('css/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{ asset('css/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
  <!-- Bootstrap Switch -->
  <script src="{{ asset('css/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
  <!-- BS-Stepper -->
  <script src="{{ asset('css/plugins/bs-stepper/js/bs-stepper.min.js')}}"></script>
  <!-- dropzonejs -->
  <script src="{{ asset('css/plugins/dropzone/min/dropzone.min.js')}}"></script>

  <script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })

      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
      //Money Euro
      $('[data-mask]').inputmask()

      //Date picker
      $('#reservationdate').datetimepicker({
        format: 'L'
      });

      //Date and time picker
      $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

      //Date range picker
      $('#reservation').daterangepicker()
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
          format: 'MM/DD/YYYY hh:mm A'
        }
      })
      //Date range as a button
      $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
      )

      //Timepicker
      $('#timepicker').datetimepicker({
        format: 'LT'
      })

      //Bootstrap Duallistbox
      $('.duallistbox').bootstrapDualListbox()

      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      //color picker with addon
      $('.my-colorpicker2').colorpicker()

      $('.my-colorpicker2').on('colorpickerChange', function (event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
      })

      $("input[data-bootstrap-switch]").each(function () {
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
      })

    })
    // BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function () {
      window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    })

    // DropzoneJS Demo Code Start
    Dropzone.autoDiscover = false

    // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
    var previewNode = document.querySelector("#template")
    previewNode.id = ""
    var previewTemplate = previewNode.parentNode.innerHTML
    previewNode.parentNode.removeChild(previewNode)

    var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
      url: "/target-url", // Set the url
      thumbnailWidth: 80,
      thumbnailHeight: 80,
      parallelUploads: 20,
      previewTemplate: previewTemplate,
      autoQueue: false, // Make sure the files aren't queued until manually added
      previewsContainer: "#previews", // Define the container to display the previews
      clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
    })

    myDropzone.on("addedfile", function (file) {
      // Hookup the start button
      file.previewElement.querySelector(".start").onclick = function () { myDropzone.enqueueFile(file) }
    })

    // Update the total progress bar
    myDropzone.on("totaluploadprogress", function (progress) {
      document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
    })

    myDropzone.on("sending", function (file) {
      // Show the total progress bar when upload starts
      document.querySelector("#total-progress").style.opacity = "1"
      // And disable the start button
      file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
    })

    // Hide the total progress bar when nothing's uploading anymore
    myDropzone.on("queuecomplete", function (progress) {
      document.querySelector("#total-progress").style.opacity = "0"
    })

    // Setup the buttons for all transfers
    // The "add files" button doesn't need to be setup because the config
    // `clickable` has already been specified.
    document.querySelector("#actions .start").onclick = function () {
      myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
    }
    document.querySelector("#actions .cancel").onclick = function () {
      myDropzone.removeAllFiles(true)
    }
    // DropzoneJS Demo Code End
  </script>


  <script src="{{ asset('css/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
  <script src="{{ asset('css/plugins/jquery-validation/additional-methods.min.js')}}"></script>



  <script src="{{ asset('css/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('css/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('css/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{ asset('css/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('css/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{ asset('css/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('css/plugins/jszip/jszip.min.js')}}"></script>
  <script src="{{ asset('css/plugins/pdfmake/pdfmake.min.js')}}"></script>
  <script src="{{ asset('css/plugins/pdfmake/vfs_fonts.js')}}"></script>
  <script src="{{ asset('css/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{ asset('css/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{ asset('css/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>



  <script src="{{ asset('css/plugins/jsgrid/demos/db.js')}}"></script>
  <script src="{{ asset('css/plugins/jsgrid/jsgrid.min.js')}}"></script>
  <script>
    $(function () {
      $("#jsGrid1").jsGrid({
        height: "100%",
        width: "100%",

        sorting: true,
        paging: true,

        data: db.clients,

        fields: [
          { name: "Name", type: "text", width: 150 },
          { name: "Age", type: "number", width: 50 },
          { name: "Address", type: "text", width: 200 },
          { name: "Country", type: "select", items: db.countries, valueField: "Id", textField: "Name" },
          { name: "Married", type: "checkbox", title: "Is Married" }
        ]
      });
    });
  </script>


  <script src="{{ asset('css/plugins/moment/moment.min.js')}}"></script>
  <script src="{{ asset('css/plugins/fullcalendar/main.js')}}"></script>
  <script>
    $(function () {

      /* initialize the external events
       -----------------------------------------------------------------*/
      function ini_events(ele) {
        ele.each(function () {

          // create an Event Object (https://fullcalendar.io/docs/event-object)
          // it doesn't need to have a start or end
          var eventObject = {
            title: $.trim($(this).text()) // use the element's text as the event title
          }

          // store the Event Object in the DOM element so we can get to it later
          $(this).data('eventObject', eventObject)

          // make the event draggable using jQuery UI
          $(this).draggable({
            zIndex: 1070,
            revert: true, // will cause the event to go back to its
            revertDuration: 0  //  original position after the drag
          })

        })
      }

      ini_events($('#external-events div.external-event'))

      /* initialize the calendar
       -----------------------------------------------------------------*/
      //Date for the calendar events (dummy data)
      var date = new Date()
      var d = date.getDate(),
        m = date.getMonth(),
        y = date.getFullYear()

      var Calendar = FullCalendar.Calendar;
      var Draggable = FullCalendar.Draggable;

      var containerEl = document.getElementById('external-events');
      var checkbox = document.getElementById('drop-remove');
      var calendarEl = document.getElementById('calendar');

      // initialize the external events
      // -----------------------------------------------------------------

      new Draggable(containerEl, {
        itemSelector: '.external-event',
        eventData: function (eventEl) {
          return {
            title: eventEl.innerText,
            backgroundColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
            borderColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
            textColor: window.getComputedStyle(eventEl, null).getPropertyValue('color'),
          };
        }
      });

      var calendar = new Calendar(calendarEl, {
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        themeSystem: 'bootstrap',
        //Random default events
        events: [
          {
            title: 'All Day Event',
            start: new Date(y, m, 1),
            backgroundColor: '#f56954', //red
            borderColor: '#f56954', //red
            allDay: true
          },
          {
            title: 'Long Event',
            start: new Date(y, m, d - 5),
            end: new Date(y, m, d - 2),
            backgroundColor: '#f39c12', //yellow
            borderColor: '#f39c12' //yellow
          },
          {
            title: 'Meeting',
            start: new Date(y, m, d, 10, 30),
            allDay: false,
            backgroundColor: '#0073b7', //Blue
            borderColor: '#0073b7' //Blue
          },
          {
            title: 'Lunch',
            start: new Date(y, m, d, 12, 0),
            end: new Date(y, m, d, 14, 0),
            allDay: false,
            backgroundColor: '#00c0ef', //Info (aqua)
            borderColor: '#00c0ef' //Info (aqua)
          },
          {
            title: 'Birthday Party',
            start: new Date(y, m, d + 1, 19, 0),
            end: new Date(y, m, d + 1, 22, 30),
            allDay: false,
            backgroundColor: '#00a65a', //Success (green)
            borderColor: '#00a65a' //Success (green)
          },
          {
            title: 'Click for Google',
            start: new Date(y, m, 28),
            end: new Date(y, m, 29),
            url: 'https://www.google.com/',
            backgroundColor: '#3c8dbc', //Primary (light-blue)
            borderColor: '#3c8dbc' //Primary (light-blue)
          }
        ],
        editable: true,
        droppable: true, // this allows things to be dropped onto the calendar !!!
        drop: function (info) {
          // is the "remove after drop" checkbox checked?
          if (checkbox.checked) {
            // if so, remove the element from the "Draggable Events" list
            info.draggedEl.parentNode.removeChild(info.draggedEl);
          }
        }
      });

      calendar.render();
      // $('#calendar').fullCalendar()

      /* ADDING EVENTS */
      var currColor = '#3c8dbc' //Red by default
      // Color chooser button
      $('#color-chooser > li > a').click(function (e) {
        e.preventDefault()
        // Save color
        currColor = $(this).css('color')
        // Add color effect to button
        $('#add-new-event').css({
          'background-color': currColor,
          'border-color': currColor
        })
      })
      $('#add-new-event').click(function (e) {
        e.preventDefault()
        // Get value and make sure it is not null
        var val = $('#new-event').val()
        if (val.length == 0) {
          return
        }

        // Create events
        var event = $('<div />')
        event.css({
          'background-color': currColor,
          'border-color': currColor,
          'color': '#fff'
        }).addClass('external-event')
        event.text(val)
        $('#external-events').prepend(event)

        // Add draggable funtionality
        ini_events(event)

        // Remove event from text input
        $('#new-event').val('')
      })
    })
  </script>


  <script src="{{ asset('css/plugins/ekko-lightbox/ekko-lightbox.min.js')}}"></script>
  <script src="{{ asset('css/plugins/filterizr/jquery.filterizr.min.js')}}"></script>
  <script>
    $(function () {
      $(document).on('click', '[data-toggle="lightbox"]', function (event) {
        event.preventDefault();
        $(this).ekkoLightbox({
          alwaysShowClose: true
        });
      });

      $('.filter-container').filterizr({ gutterPixels: 3 });
      $('.btn[data-filter]').on('click', function () {
        $('.btn[data-filter]').removeClass('active');
        $(this).addClass('active');
      });
    })
  </script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
</body>

</html>