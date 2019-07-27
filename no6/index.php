<!DOCTYPE html>
<html>
<head>
  <title>Arcademy Bootcamp 11-5</title>
</head>

<body>
<div align="center">
  <h2>Bootcamp Arcademy</h2>
  <br />
  <a href="add.php" style="text-decoration:none">[ + ] Employer</a>
  </div>
  <br/>
  <table border="1" border="1" cellpadding="7" align="center">
    <thead>
      <tr>
        <th>Name</th>
        <th>Work</th>
        <th>Salary</td>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include('config.php');
      $sql = "SELECT
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
          ORDER BY `nama`.`namas`";

      $query = mysqli_query($db, $sql);
      while($row = mysqli_fetch_array($query)) {
        echo '
        <tr>
          <td>'.$row[1].'</td>
          <td>'.$row[2].'</td>
          <td>'.$row[3].'</td>
          <td><a href="update.php?id_nama='.$row[0].'">Edit</a> | 
          <a href="delete.php?id_nama='.$row[0].'" onclick="return confirm(\'Yakin Dihapus?\')">Delete</a></td>
        </tr>
        ';
      }
      ?>
    </tbody>
  </table>
    </div>
</body>
</html>