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
    function add_row() {
        let itemNIM = document.getElementById("formNIM").value;
        let itemNama = document.getElementById("formNama").value;
        let itemAngkatan = document.getElementById("formAngkatan").value;
        let itemJenisKelamin = document.querySelector('input[name="jenis_kelamin"]:checked').value;

        $('#tabledata tr:last').after(`<tr><td>${itemNIM}</td><td>${itemNama}</td><td>${itemAngkatan}</td><td>${itemJenisKelamin}</td><td></td><td></td><td>Belum</td><td>Belum</td><td><button type="button" class="btn btn-warning btn-sm disabled" style="font-size: 10px;"><b>Belum Disetujui</b></button><button type="button" class="btn btn-success" style="font-size: 15px;">Setujui</button></td><td><button type="button" class="btn btn-info">Edit</button></td></tr>`);
    
    }
  </script>

</head>

<body>
  <!-- Header -->
  <?php include("./header.php"); ?>
  
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Master Data</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard_doswal.php"><b>Home</b></a></li>
          <li class="breadcrumb-item">Dasbor</li>
          <li class="breadcrumb-item">Master Data</li>
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
                                    <div class="col-3 px-4">
                                        <h5>Data Mahasiswa</h5>
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
                                    <col span="1" style="width: 10%;">
                                    <col span="1" style="width: 10%;">
                                    <col span="1" style="width: 10%;">
                                    <col span="1" style="width: 18%;">

                                </colgroup>

                                <tbody id="tabledata">
                                    <tr>
                                        <th scope="col">NIM</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Angkatan</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">IRS</th>
                                        <th scope="col" >KHS</th>
                                        <th scope="col">Status PKL</th>
                                        <th scope="col">Status Skripsi</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                    <tr>
                                        <td>24060120140171</td>
                                        <td>Muhammad Hilmy Tsany</td>
                                        <td>2020</td>
                                        <td>Pria</td>
                                        <td><button type="button" class="btn btn-info" style="font-size: 12px;">Lihat</button></td>       <!-- IRS conditional kalo belom ada kosongin, kalo ada kasih tombol lihat -->
                                        <td><a href="https://drive.google.com/file/d/1RTq6aOdw45n2hb6GOml8h1aMxtAyb3hN/view?usp=sharing" target="_blank"><button type="button" class="btn btn-info" style="font-size: 12px;">Lihat</button></a></td>       <!-- KHS conditional kalo belom ada kosongin, kalo ada kasih tombol lihat -->
                                        <td>Belum</td>
                                        <td>Selesai <button type="button" class="btn btn-info" style="font-size: 12px;">Lihat</button> </td>
                                        <td><button type="button" class="btn btn-warning btn-sm disabled" style="font-size: 10px;"><b>Belum Disetujui</b></button><button type="button" class="btn btn-success" style="font-size: 15px;">Setujui</button></td>
                                    </tr>
                                </tbody>
                            </table>
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