<?php 
  include('config.php');
  $id_work = $_POST['wk_id'];
  $sql = mysqli_query($db, "SELECT * FROM salary WHERE id_salary=$id_work");

  echo "<option>-- Please Select Salary --</option>";
  while($row_s = mysqli_fetch_array($sql)) {
    echo '<option value="'.$row_s['id_salary'].'">'.$row_s['salary'].'</option>';
  }
?>