<h1>Input Data Mahasiswa</h1>
 
<form method="post" action="insert.php" value="<?php echo $n; ?>">
<input type="submit" name="submit" value="Submit">
<table border="1">
<tr><td>NIM AWAL</td><td>NAMA MHS</td></tr>
 
<?php
//$n = $_POST['jum']; // membaca jumlah data
 
//for ($i=1; $i<=$n; $i++)
//{
 // echo "<tr><td><input type='text' name='nim".$i."'></td><td><input type='text' name='nama".$i."'></td></tr>";
//}
//?>

<?php
$n = $_POST['jum']; // membaca jumlah data
 

{
  echo "<tr><td><input type='text' name='nim'></td></tr>";
}
?>
 
</table>
<br>
<input type="hidden" name="jum" value="<?php echo $n; ?>">
<input type="submit" name="submit" value="Submit">
</form>