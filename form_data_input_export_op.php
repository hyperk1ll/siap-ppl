<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Akademi Unggulan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <script>
    
    function collapseToggle1() {
        let x = new bootstrap.Collapse(collapseInputMahasiswa, {
            toggle : false
        })

        x.hide()

    }

    function collapseToggle2() {
        let x = new bootstrap.Collapse(collapseInputDosenWali, {
            toggle : false
        })

        x.hide()

    }

  </script>


</head>

<body>

  <?php include("./header.php") ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Input Data</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard_mahasiswa.php">Home</a></li>
          <li class="breadcrumb-item active">Input Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row justify-content-center">
        <div class="col-xl-6">

          <div class="card">
            <div class="card-header">
                <div class="card-title px-2">Form Input Data Manual</div>
                <button type="button" class="btn btn-secondary" data-bs-toggle="collapse" data-bs-target="#collapseInputDosenWali" aria-expanded="false" aria-controls="collapseInputDosenWali" onclick="collapseToggle1()">Input Dosen Wali</button>
                <button type="button" class="btn btn-secondary" data-bs-toggle="collapse" data-bs-target="#collapseInputMahasiswa" aria-expanded="false" aria-controls="collapseInputMahasiswa" onclick="collapseToggle2()">Input Mahasiswa</button>
            </div>

            <div class="collapse" id="collapseInputMahasiswa">
            <form method="POST">            
                <div class="card-body pt-4 d-flex flex-column">
                
                    <div class="row mb-3">
                      <label for="formNIM" class="col-md-3 col-lg-2 col-form-label px-3">NIM</label>
                      <div class="col-md-8 col-lg-10">
                        <input name="formNIM" type="number" class="form-control" id="formNIM">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="formNama" class="col-md-3 col-lg-2 col-form-label px-3">Nama</label>
                      <div class="col-md-8 col-lg-10">
                        <input name="formNama" type="text" class="form-control" id="formNama">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="formAngkatan" class="col-md-3 col-lg-2 col-form-label px-3">Angkatan</label>
                      <div class="col-md-8 col-lg-10">
                        <input name="formAngkatan" type="number" class="form-control" id="formAngkatan">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="formDosenWali" class="col-md-3 col-lg-2 col-form-label px-3">Dosen Wali</label>
                      <div class="col-md-8 col-lg-10">
                        <select class="form-select" aria-label="Default select example">
                            <option selected disabled>Pilih Dosen Wali</option>
                            <option value="1">Dinar Mutiara Kusumo Nugraheni</option>
                            <option value="2">Aris Puji Widodo</option>
                            <option value="3">Prajanto Wahyu Adi</option>
                        </select>
                      </div>
                    </div>

                    <div class="row mb-3">

                    <label for="renewPassword" class="col-md-2 col-form-label px-3">Jenis Kelamin</label>
                    <div class="col-md-8">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="Pria">
                            <label class="form-check-label" for="Pria">
                                Pria
                            </label>
                        </div>
                        <div class="col-md-8 form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="Wanita">
                            <label class="form-check-label" for="Wanita">
                                Wanita
                            </label>
                        </div>
                    </div>
                        
                    </div>
                    
                </div>
                <div class="p-3" style="float: right;">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                
            </form>
            </div>

            <div class="collapse" id="collapseInputDosenWali">
            <form method="POST">            
                <div class="card-body pt-4 d-flex flex-column">
                
                    <div class="row mb-3">
                      <label for="NIM" class="col-md-3 col-lg-2 col-form-label px-3">NIP</label>
                      <div class="col-md-8 col-lg-10">
                        <input name="NIM" type="number" class="form-control" id="NIM">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-3 col-lg-2 col-form-label px-3">Nama</label>
                      <div class="col-md-8 col-lg-10">
                        <input name="newpassword" type="text" class="form-control" id="newPassword">
                      </div>
                    </div>
                  
                </div>
                <div class="p-3" style="float: right;">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                
            </form>
            </div>
          </div>

        </div>
        
    
        <div class="col-xl-4">

          <div class="card">
            <div class="card-header">
                <div class="card-title px-2">Import Data Mahasiswa</div>
            </div>
            <div class="card-body pt-3">
                <div class="mb-3">
                <label for="formFileSm" class="form-label">Upload File</label>
                 <input class="form-control form-control-sm" id="formFileSm" type="file">
                </div>

            <button type="button" class="btn btn-primary">Import</button>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
                <div class="card-title px-2">Export Data Mahasiswa</div>
            </div>
            <div class="card-body pt-3">
                <div class="my-3">
                    <button type="button" class="btn btn-success">Export Excel</button>
                </div>

            
            </div>
          </div>

        </div>
        
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