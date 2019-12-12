
<!DOCTYPE html>
<html>
<head>
    <title> Dashboard - Login CodeIgniter & Bootstrap</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">KOMPENSASI</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <div class="navbar-form navbar-right">
                <a href="<?php echo base_url() ?>index.php/user/dashboard/logout" type="submit" class="btn btn-success"><i class="fa fa-sign-out"></i> Logout</a>
            </div>
      </div>
    </nav>
<div class="container" style="margin-top: 80px">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
              <a href="#" class="list-group-item active" style="text-align: center;background-color: black;border-color: black">
                MAHASISWA
              </a>
              <a href="" class="list-group-item"><i class="fa fa-home"></i> Home</a>
              <a href="" class="list-group-item"><i class="fa fa-user"></i> Profil</a>
              <a href="" class="list-group-item"><i class="fa fa-sign-out"></i> Logout</a>
              <!-- <a href="#" class="list-group-item"><i class="fa fa-book"></i> Blog</a>
              <a href="#" class="list-group-item"><i class="fa fa-folder"></i> Kategori</a>
              <a href="#" class="list-group-item"><i class="fa fa-comments-o"></i> Komentar</a>
              <a href="logout.php" class="list-group-item"><i class="fa fa-sign-out"></i> Logout</a> -->
            </div>
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading">
                Selamat Datang <b><?php echo $this->session->userdata("user_nama") ?></b>
              </div>
              <div class="panel-body">
                <form>
                  <div class="form-group row">
                    <label for="namaMhs" class="col-sm-3 col-form-label">Nama Mahasiswa</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="namaMhs" name="namaMhs" placeholder="Masukkan Nama Mahasiswa">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nimMhs" class="col-sm-3 col-form-label">Nim Mahasiswa</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="nimMhs" name="nimMhs" placeholder="Masukkan Nim Mahasiswa">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="namaMk" class="col-sm-3 col-form-label">Nama Matakuliah</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="namaMk" name="namaMk" placeholder="Masukkan Nama Matakuliah">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="namaDosen" class="col-sm-3 col-form-label">Nama Dosen</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="namaDosen" name="namaDosen" placeholder="Masukkan Nama Dosen">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="pertemuan" class="col-sm-3 col-form-label">Pertemuan</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="pertemuan" name="pertemuan" placeholder="Masukkan Nama Matakuliah">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="gambar" class="col-sm-3 col-form-label">Upload Kompensasi</label>
                    <div class="col-sm-9">
                      <input type="file"  id="gambar" name="gambar">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

