<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Penerima BSPS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
  <div class="container">
    <h1 class="mb-4">Data Penerima Bantuan BSPS</h1>

    <form class="mb-4" method="POST" action="tambah.php">
      <div class="row g-2">
        <div class="col-md-3"><input name="nama" class="form-control" placeholder="Nama" required></div>
        <div class="col-md-3"><input name="nik" class="form-control" placeholder="NIK" required></div>
        <div class="col-md-4"><input name="alamat" class="form-control" placeholder="Alamat" required></div>
        <div class="col-md-2">
          <select name="status" class="form-select" required>
            <option value="disetujui">Disetujui</option>
            <option value="batal">Batal</option>
            <option value="pengganti">Pengganti</option>
          </select>
        </div>
      </div>
      <div class="row g-2 mt-2">
        <div class="col-md-4"><input name="id_digantikan" class="form-control" placeholder="ID yang digantikan (jika pengganti)"></div>
        <div class="col-md-2"><button type="submit" class="btn btn-primary">Tambah</button></div>
      </div>
    </form>

    <table class="table table-bordered table-striped">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>NIK</th>
          <th>Alamat</th>
          <th>Status</th>
          <th>ID Digantikan</th>
        </tr>
      </thead>
      <tbody>
      <?php
      include 'koneksi.php';
      $data = $koneksi->query("SELECT * FROM penerima_bantuan ORDER BY id_penerima ASC");
      while($row = $data->fetch_assoc()) {
        echo \"<tr>
          <td>{$row['id_penerima']}</td>
          <td>{$row['nama']}</td>
          <td>{$row['nik']}</td>
          <td>{$row['alamat']}</td>
          <td>{$row['status']}</td>
          <td>{$row['id_digantikan']}</td>
        </tr>\";
      }
      ?>
      </tbody>
    </table>
  </div>
</body>
</html>
