<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Akademi Unggulan</title>

  <!-- Favicons -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script src="./assets/js/ajax.js"></script>


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <script>
    // entah kenapa script di external gabisa
    function showGenre(item) {
        document.getElementById("dropdownMenuButton1").innerHTML = "Angkatan " + item.innerHTML;
        document.getElementById("totalMHSAngkatan").innerHTML = "Total Status Mahasiswa Skripsi Angkatan "  + item.innerHTML + ":";
        document.getElementById("totalStatusMHS").style.display = "block";
    }

    function showGenre2(item) {
        document.getElementById("dropdownMenuButton1").innerHTML = item.innerHTML;
        document.getElementById("totalMHSAngkatan").innerHTML = "Total Status Mahasiswa Skripsi "  + item.innerHTML + ":";
        document.getElementById("totalStatusMHS").style.display = "block";
    }

  </script>

</head>

<body>
  <!-- Header -->
  <?php include("./header.php"); ?>
  
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Mahasiswa Skripsi</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard_operator.php"><b>Home</b></a></li>
          <li class="breadcrumb-item">Dasbor</li>
          <li class="breadcrumb-item">Mahasiswa Skripsi</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    
    <section class="section master-data">
        <section class="row justify-content-center">
            <div class="col-8">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <div class="row">
                                    <div class="col-9 px-4">
                                        <h5>Daftar Mahasiswa Skripsi</h5>
                                    </div>
                                    <div class="col-3">
                                        <div class="dropdown" style="float: right;">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                Angkatan
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" id="2016" onclick="showGenre(this)">2016</a></li>
                                                <li><a class="dropdown-item" id="2017" onclick="showGenre(this)">2017</a></li>
                                                <li><a class="dropdown-item" id="2018" onclick="showGenre(this)">2018</a></li>
                                                <li><a class="dropdown-item" id="2019" onclick="showGenre(this)">2019</a></li>
                                                <li><a class="dropdown-item" id="2020" onclick="showGenre(this)">2020</a></li>
                                                <li><a class="dropdown-item" id="allAng" onclick="showGenre2(this)">Semua Angkatan</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="tabledatamaster" class="table table-striped" style="border-top: 1px solid #B2D8CA; border-bottom: 1px solid #B2D8CA; table-layout: fixed; width: 100%; font-size: 15px;">
                                <colgroup>
                                    <col span="1" style="width: 20%;">
                                    <col span="1" style="width: 30%;">
                                    <col span="1" style="width: 15%;">
                                    <col span="1" style="width: 15%;">
                                    <col span="1" style="width: 10%;">
                                    <col span="1" style="width: 15%;">

                                </colgroup>

                                <tbody id="tabledata">
                                    <tr>
                                        <th scope="col">NIM</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Angkatan</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Status Skripsi</th>
                                        <th scope="col">Tanggal Lulus</th>
                                    </tr>
                                    <tr>
                                        <td>24060120140171</td>
                                        <td>Muhammad Hilmy Tsany</td>
                                        <td>2020</td>
                                        <td>Pria</td>
                                        <td>Selesai<a href="https://drive.google.com/file/d/1RTq6aOdw45n2hb6GOml8h1aMxtAyb3hN/view?usp=sharing" target="_blank"><button type="button" class="btn btn-info" style="font-size: 12px;">Lihat</button></a></td>
                                        <td>21-10-2022</td>
                                    </tr>
                                    <tr>
                                        <td>24060120140171</td>
                                        <td>Muhammad Hilmy Tsany</td>
                                        <td>2020</td>
                                        <td>Pria</td>
                                        <td>Belum</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="recap_footer">
                                <b id="totalMHSAngkatan"></b>
                                <div id="totalStatusMHS" style="display: none;">
                                <ul>
                                    <li>Belum: <?php echo 2 ?></li>
                                    <li>Proses: <?php echo 13 ?></li>
                                    <li>Selesai: 0</li>
                                </ul>
                                </div>
                            </div>
                            <div style="float: right;"><a href="rekap_mahasiswa_Skripsi.php" style="text-decoration: underline;">Lihat Rekap Semua Angkatan</a></div>
                        </div>
                    </div>
                </div>
            </div>       
        </section>
    </section>

  </main><!-- End #main -->

  <?php include("./footer.php"); ?>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  

</body>

</html>