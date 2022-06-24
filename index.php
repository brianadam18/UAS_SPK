<?php
require './includes/config.php';

if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}

include './includes/header.php';
?>

<div class="col-md-12">
    <div class="page-header">
        <h1>SPK Pemilihan Reseller Terbaik Untuk Pemeberian Reward dengan Metode Topsis pada Honeyhope Kids.</h1>
    </div>
    <h3>Kriteria Reseller yang dibutuhkan</h3>
    <table class="table table-bordered">
      <tr>
          <th>Kode</th>
          <th>Nama Kriteria</th>
          <th>Atribut</th>
          <th>Nilai</th>
      </tr>
      <tr>
          <td>C1</td>
          <td>Jangka Waktu Bergabung</td>
          <td>Benefit</td>
          <td>1 - 12 (bulan)</td>
      </tr>
      <tr>
          <td>C2</td>
          <td>Total Pemesanan</td>
          <td>Benefit</td>
          <td>1 - ... (barang)</td>
      </tr>
      <tr>
          <td>C3</td>
          <td>Total Nominal Transaksi</td>
          <td>Benefit</td>
          <td>1 - 5 (nilai)</td>
      </tr>
      <tr>
          <td>C4</td>
          <td>Ketepatan Pembayaran</td>
          <td>Cost</td>
          <td>1 - 4 (nilai)</td>
      </tr>
      <tr>
          <td>C5</td>
          <td>Total Retur</td>
          <td>Cost</td>
          <td>1 - ... (barang)</td>
      </tr>
      <tr>
          <td>C6</td>
          <td>Alamat Reseller</td>
          <td>Cost</td>
          <td>1 - 10 (nilai)</td>
      </tr>
    </table>
    <p class="text-right"><a href="informasi-pemilihan.php" class="btn btn-primary">Mulai</a></p>
</div>
<?php
include './includes/footer.php';
?>
