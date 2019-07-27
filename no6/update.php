<?php
include('config.php');
$sel1 = mysqli_query($db, "SELECT * FROM work");

$id = $_GET['id_nama'];
$a = "SELECT
`nama`.`id_nama`
, `nama`.`namas`
, `work`.`name`
, `salary`.`salary`
FROM
`nama`
INNER JOIN `salary` 
    ON (`nama`.`id_salary` = `salary`.`id_salary`)
INNER JOIN `work` 
    ON (`work`.`id_salary` = `salary`.`id_salary`) AND (`nama`.`id_work` = `work`.`id_work`)
    WHERE id_nama=$id";

$data = mysqli_query($db, $a);
$nm = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>

<head>
  <title>Add Data</title>
</head>

<body>
  <a href="index.php" style="text-decoration: none">&#10229; Back</a>
  <h3>TAMBAH DATA</h3>
  <br />
  <form action="" method="post">
    <table>
      <tr>
        <td>Name</td>
        <td><input type="text" name="nama" value="<?php echo $nm['namas'] ?>"></td>
      </tr>
      <tr>
        <td>Work</td>
        <td>
          <select name="work">
            <?php $wk = $nm['id_work']; ?>
            <option <?php echo ($wk == 1) ? "selected" : "" ?> value="1"><?php echo $nm['name'] ?></option>
            <option <?php echo ($wk == 2) ? "selected" : "" ?> value="2"><?php echo $nm['name'] ?></option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Salary</td>
        <td>
          <select name="salary">
            <?php $sl = $nm['id_salary']; ?>
            <option <?php echo ($sl == 1) ? "selected" : "" ?>><?php echo $nm['salary'] ?></option>
            <option <?php echo ($sl == 2) ? "selected" : "" ?>><?php echo $nm['salary'] ?></option>
          </select>
        </td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="edit" value="Update"></td>
      </tr>
    </table>
  </form>
</body>

</html>

<?php 
if(isset($_POST['edit'])) {
  
  $nama = $_POST['nama'];
  $work = $_POST['work'];
  $salary = $_POST['salary'];
 
  $q = mysqli_query($db,"UPDATE nama SET namas='$nama' WHERE id_nama=$id");
  if ($q) {
    echo "<script>alert('Update Sukses');window.location='index.php'</script>";
  } else {
    echo "<script>alert('Update Gagal')</script>";
  }
}
?>