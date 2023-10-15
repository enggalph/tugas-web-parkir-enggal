<?php 

  include('koneksi.php');

  $id = $_GET['id_parkir'];

  $query = "SELECT * FROM tb_parkir WHERE id_parkir = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);


  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit </title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT 
            </div>
            <div class="card-body">
              <form action="update-parkir.php" method="POST">
                <input type="hidden" name="id" value=<?= $row['id_parkir'] ?>>
              <div class="form-group">
                  <label>Jenis Kendaraan :</label>
                  <br>
                  <select class="form-control" name="jenis_kendaraan" id="jenis_kendaraan">
                    <option value="Motor">Motor</option>
                    <option value="Mobil" <?php if($row['jenis_kendaraan']== 'Mobil') { echo 'selected';}?> >Mobil</option>
                  </select>

                <div class="form-group">
                  <label>Plat Nomor</label>
                  <input type="text" name="plat_nomor" value="<?php echo $row['plat_nomor'] ?>" placeholder="Masukkan Nama" class="form-control">
                </div>


                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html