<html>

<head></head>

<body>
  <h3>Data Pengunjung Perpustakaan</h3>
  <table border="2px">
    <thead>
      <tr>
        <th>No</th>
        <th>ID</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php
      require 'koneksi.php';
      $no = 0;
      $view = $koneksi->query("SELECT * FROM `t_pengunjung` ");
      while ($row = $view->fetch_array()) {
        $no++;

      ?>
        <tr>
          <td><?php echo $no . '.' ?></td>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['nama']; ?></td>
          <td><?php echo $row['jk']; ?></td>
          <td><?php echo $row['jenis']; ?></td>

        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>

</html>