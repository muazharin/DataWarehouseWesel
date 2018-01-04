<!DOCTYPE html>
<html lang="en">

  <head>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/highcharts.js"></script>
    <script type="text/javascript">
      var chart1;
      $(document).ready(function(){
        chart1 = new Highcharts.Chart({
          chart:{
            renderTo: 'container',
            type: 'column'
          },
          title:{
            text: 'Grafik Penjualan Wesel Seluruh Kota'
          },
          xAxis:{
            categories:['kota']
          },
          yAxis:{
            title:{
              text: 'Jumlah Penjualan'
            }
          },
          series:
          [
          <?php
            include('config.php');
            $sql = "SELECT kota FROM penjualan";
            $query=mysql_query($sql) or die(mysql_error());
            while($ret = mysql_fetch_array($query)){
              $kota=$ret['kota'];
              $sql_jumlah="SELECT jualan FROM penjualan WHERE kota='$kota'";
              $query_jumlah=mysql_query($sql_jumlah) or die(mysql_error());
              while ($data = mysql_fetch_array($query_jumlah)) {
                $jumlah=$data['jualan'];
              }
              ?>
              {
                name: '<?php echo $kota;?>',
                data: [<?php echo $jumlah; ?>]
              },
          <?php } ?>
          ]
        });
      });
    </script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/highcharts.js"></script>
    <script type="text/javascript">
      var chart1;
      $(document).ready(function(){
        chart1 = new Highcharts.Chart({
          chart:{
            renderTo: 'container1',
            type: 'column'
          },
          title:{
            text: 'Grafik Transaksi Wesel Seluruh Kota'
          },
          xAxis:{
            categories:['kota']
          },
          yAxis:{
            title:{
              text: 'Jumlah Transaksi'
            }
          },
          series:
          [
          <?php
            include('config.php');
            $sql = "SELECT kota FROM transaksi_kota";
            $query=mysql_query($sql) or die(mysql_error());
            while($ret = mysql_fetch_array($query)){
              $kota=$ret['kota'];
              $sql_jumlah="SELECT jml_transaksi FROM transaksi_kota WHERE kota='$kota'";
              $query_jumlah=mysql_query($sql_jumlah) or die(mysql_error());
              while ($data = mysql_fetch_array($query_jumlah)) {
                $jumlah=$data['jml_transaksi'];
              }
              ?>
              {
                name: '<?php echo $kota;?>',
                data: [<?php echo $jumlah; ?>]
              },
          <?php } ?>
          ]
        });
      });
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DATA WAREHOUSE CLUSTERING SPATIAL WESEL</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">
    

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.html">CLUSTERING SPATIAL WESEL</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">Check Data</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="post.php">Lihat Grafik</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/dw3.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1>GRAFIK PENJUALAN DAN TRANSAKSI WESEL</h1>
              
              
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Post Content -->
    <div id ='container'></div>
    <div id ='container1'></div>
    
    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; DATA WAREHOUSE CLUSTERING SPATIAL WESEL 2017</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>
