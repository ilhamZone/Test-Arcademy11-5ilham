<?php
include('config.php');
if (isset($_GET['id_nama'])) {
  $id = $_GET['id_nama'];

  $sqll = mysqli_query($db, "SELECT `namas` from nama where id_nama=$id");
  $rs = mysqli_fetch_assoc($sqll);
  $nama = $rs['namas'];
 

  $qd = mysqli_query($db, "DELETE FROM nama WHERE id_nama=$id");
  if ($qd) {
    echo "<script>alert('Data $nama berhasil di hapus');window.location='index.php'</script>";
  } else {
    echo "<script>alert('Gagal Menghapus')</script>";
  }
} else {
  die('Tidak Ditemukan ID');
}
