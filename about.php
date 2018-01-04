<!DOCTYPE html>
<html lang="en">

  <head>

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
        <a class="navbar-brand" href="home.php">CLUSTERING SPATIAL WESEL</a>
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
    <header class="masthead" style="background-image: url('img/dw2.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>CHECK DATA</h1>
              <span class="subheading">CLUSTERING SPATIAL WESEL</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <?php 
      include 'config.php';
      $perintah = "SELECT * FROM `waktu`";
      $p1=mysql_query($perintah);
    ?>
   <div class="container">
      <div class='row'>
        <div class='col-lg-8 col-md-10 mx-auto'>
          <form method="POST" action="#">
            <div class="form-group">
              <select name="thu" class="form-control">
                <option value="0">Seluruh Kota</option>
                  <?php 
                    while ($thu=mysql_fetch_array($p1)) {
                      echo "<option value='$thu[id_waktu]'>$thu[tahun]</option>";
                    }
                  ?>
              </select>
            </div>
            <div class="col-md-1" style="float: left;">
              <div class="form-group">
                <input type="submit" name="tombol" value="Cari" class="btn btn-primary">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <br>

    <?php 
    if (isset($_POST['tombol'])) {
      $id = $_POST['thu'];
      switch ($id) {
        case '1':
        //menampilkan data per tahun 2015
          $perintah2 = "SELECT p.kota, SUM(IF(YEAR(p.jualan)=2015, p.jualan, p.jualan)) AS Total_Penjualan, SUM(t.jml_transaksi)AS Total_Transaksi, p.tahun FROM penjualan p, transaksi_kota t WHERE p.tahun=2015 AND p.kota = t.kota GROUP BY p.kota, t.kota";
          $exucute = mysql_query($perintah2);
          echo "
          <div class='container'>
            <div class='row'>
              <div class='col-lg-8 col-md-10 mx-auto'>
              <p><strong>Tabel Total Penjualan dan Transaksi Wesel Seluruh Kota Pada Tahun 2015</strong></p>
              <div class='table-responsive' data-pattern='priority-columns'>
                <table summary='This table shows how to create responsive tables using RWD-Table-Patterns functionality' class='table table-bordered table-hover'>
                  <thead>
                    <tr>
                      <th data-priority='1'>Kota</th>
                      <th data-priority='2'>Total Penjualan</th>
                      <th data-priority='3'>Total Transaksi</th>
                      <th data-priority='4'>Tahun</th>
                    </tr>
                  </thead>
                  <tbody>";
                    while ($data=mysql_fetch_row($exucute)) {
                    
                echo"<tr>
                    
                     <td>$data[0]</td>
                      <td>$data[1]</td>
                      <td>$data[2]</td>
                      <td>$data[3]</td>        
                    </tr>";
                  }
                echo"</tbody>
                </table>
              </div>
              </div>
            </div>
          </div>";
          # code...
          break;
          case '2':
          //menampilkan data per tahun 2016
            $perintah2 = "SELECT p.kota, SUM(IF(YEAR(p.jualan)=2016, p.jualan, p.jualan)) AS Total_Penjualan, SUM(t.jml_transaksi)AS Total_Transaksi, p.tahun FROM penjualan p, transaksi_kota t WHERE p.tahun=2016 AND p.kota = t.kota GROUP BY p.kota, t.kota";
            $exucute = mysql_query($perintah2);
            echo "
            <div class='container'>
              <div class='row'>
                <div class='col-lg-8 col-md-10 mx-auto'>
                <p><strong>Tabel Total Penjualan dan Transaksi Wesel Seluruh Kota Pada Tahun 2016</strong></p>
                <div class='table-responsive' data-pattern='priority-columns'>
                  <table summary='This table shows how to create responsive tables using RWD-Table-Patterns functionality' class='table table-bordered table-hover'>
                    <thead>
                      <tr>
                        <th data-priority='1'>Kota</th>
                        <th data-priority='2'>Total Penjualan</th>
                        <th data-priority='3'>Total Transaksi</th>
                        <th data-priority='4'>Tahun</th>
                      </tr>
                    </thead>
                    <tbody>";
                      while ($data=mysql_fetch_row($exucute)) {
                      
                  echo"<tr>
                      
                       <td>$data[0]</td>
                        <td>$data[1]</td>
                        <td>$data[2]</td>
                        <td>$data[3]</td>        
                      </tr>";
                    }
                  echo"</tbody>
                  </table>
                </div>
                </div>
              </div>
            </div>";
          # code...
          break;
          case '3':
          //menampilkan data per tahun 2017
            $perintah2 = "SELECT p.kota, SUM(IF(YEAR(p.jualan)=2017, p.jualan, p.jualan)) AS Total_Penjualan, SUM(t.jml_transaksi)AS Total_Transaksi, p.tahun FROM penjualan p, transaksi_kota t WHERE p.tahun=2017 AND p.kota = t.kota GROUP BY p.kota, t.kota";
            $exucute = mysql_query($perintah2);
            echo "
            <div class='container'>
              <div class='row'>
                <div class='col-lg-8 col-md-10 mx-auto'>
                <p><strong>Tabel Total Penjualan dan Transaksi Wesel Seluruh Kota Pada Tahun 2017</strong></p>
                <div class='table-responsive' data-pattern='priority-columns'>
                  <table summary='This table shows how to create responsive tables using RWD-Table-Patterns functionality' class='table table-bordered table-hover'>
                    <thead>
                      <tr>
                        <th data-priority='1'>Kota</th>
                        <th data-priority='2'>Total Penjualan</th>
                        <th data-priority='3'>Total Transaksi</th>
                        <th data-priority='4'>Tahun</th>
                      </tr>
                    </thead>
                    <tbody>";
                      while ($data=mysql_fetch_row($exucute)) {
                      
                  echo"<tr>
                      
                       <td>$data[0]</td>
                        <td>$data[1]</td>
                        <td>$data[2]</td>
                        <td>$data[3]</td>        
                      </tr>";
                    }
                  echo"</tbody>
                  </table>
                </div>
                </div>
              </div>
            </div>";
          # code...
          break;
        
        default:
        //menampilkan Total Penjualan dan Transaksi Wesel Seluruh Kota
          $sqli=mysql_query("SELECT p.kota, SUM(p.jualan) AS Total_Penjualan, SUM(t.jml_transaksi)AS Total_Transaksi FROM penjualan p, transaksi_kota t WHERE p.kota = t.kota");
          echo "
          <div class='container'>
            <div class='row'>
              <div class='col-lg-8 col-md-10 mx-auto'>
              <p><strong>Tabel Total Penjualan dan Transaksi Wesel Seluruh Kota</strong></p>
              <div class='table-responsive' data-pattern='priority-columns'>
                <table summary='This table shows how to create responsive tables using RWD-Table-Patterns functionality' class='table table-bordered table-hover'>
                  <thead>
                    <tr>
                      <th data-priority='1'>Kota</th>
                      <th data-priority='2'>Total Penjualan Semua Kota</th>
                      <th data-priority='3'>Total Transaksi Semua Kota</th>
                    </tr>
                  </thead>
                  <tbody>";
                    while ($datai=mysql_fetch_row($sqli)) {
                    
                echo"<tr>
                    
                     <td>Semua Kota</td>
                      <td>$datai[1]</td>
                      <td>$datai[2]</td>        
                    </tr>";
                  }
                echo"</tbody>
                </table>
              </div>
              </div>
            </div>
          </div>";
          $sql=mysql_query("SELECT p.kota, SUM(p.jualan) AS Total_Penjualan, SUM(t.jml_transaksi)AS Total_Transaksi FROM penjualan p, transaksi_kota t WHERE p.kota = t.kota GROUP BY p.kota, t.kota");
          echo "
          <div class='container'>
            <div class='row'>
              <div class='col-lg-8 col-md-10 mx-auto'>
              <p><strong>Tabel Total Penjualan dan Transaksi Wesel di Setiap Kota</strong></p>
              <div class='table-responsive' data-pattern='priority-columns'>
                <table summary='This table shows how to create responsive tables using RWD-Table-Patterns functionality' class='table table-bordered table-hover'>
                  <thead>
                    <tr>
                      <th data-priority='1'>Kota</th>
                      <th data-priority='2'>Total Penjualan </th>
                      <th data-priority='3'>Total Transaksi</th>
                    </tr>
                  </thead>
                  <tbody>";
                    while ($data=mysql_fetch_row($sql)) {
                    
                echo"<tr>
                    
                     <td>$data[0]</td>
                      <td>$data[1]</td>
                      <td>$data[2]</td>        
                    </tr>";
                  }
                echo"</tbody>
                </table>
              </div>
              </div>
            </div>
          </div>";
          # code...
          break;
        }
      }
    ?>
    <?php
    include "config.php";
    
    ?>
    

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