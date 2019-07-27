<?php
include('config.php');
$sel1 = mysqli_query($db, "SELECT * FROM work");
?>
<!DOCTYPE html>
<html>

<head>
  <title>Add Data</title>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#work_id').change(function() { // Jika select box id kota dipilih
        let work_id = $(this).val(); // Ciptakan variabel work
        $.ajax({
          type: 'POST', // Metode pengiriman data menggunakan POST
          url: 'salary.php', // File yg akan pemroses data
          data: 'wk_id='+work_id, // Data yang akan dikirim ke file pemroses
          success: function(response) { // jika berhasil
            $('#salary_id').html(response); // berikan hasil ke id salary
          }
        })
      })
    });
  </script>
</head>

<body>
  <a href="index.php" style="text-decoration: none">&#10229; Back</a>
  <h3>TAMBAH DATA</h3>
  <br />
  <form action="" method="post">
    <table>
      <tr>
        <td>Name</td>
        <td><input type="text" name="nama" required></td>
      </tr>
      <tr>
        <td>Work</td>
        <td>
          <select name="work" id="work_id">
            <?php while ($r1 = mysqli_fetch_array($sel1)) { ?>
              <option disabled selected>--- Please Select Work ---</option>
              <option value="<?php echo $r1['id_work'] ?>"><?php echo $r1['name'] ?></option>
            <?php } ?>
          </select>
        </td>
      </tr>
      <tr>
        <td>Salary</td>
        <td>
          <select name="salary" id="salary_id">
              <option>-- Please Select Salary --</option>
          </select>
        </td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="tambah" value="ADD"></td>
      </tr>
    </table>
  </form>
</body>

</html>

<?php
if(isset($_POST['tambah'])) {
  $nama = $_POST['nama'];
  $work = $_POST['work'];
  $salari = $_POST['salary'];
  $sql = "INSERT INTO nama (namas, id_work, id_salary) VALUES ('$nama', '$work', $salari)";
  $query = mysqli_query($db, $sql);
  if ($query) {
    echo "<script>alert('Data berhasil di Tambahkan');window.location='index.php'</script>";
  } else {
    echo "<script>alert('Gagal Tambah Data')</script>";
  }
}
?>