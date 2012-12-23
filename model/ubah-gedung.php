<?php
include('manajemen-gedung.php');
$obj=new Gedung("localhost","root","","wedding");
if(isset($_REQUEST['submit'])){
	
	extract($_REQUEST);
	
$obj->ubah($id,$nama,$kota,$deskripsi,$gambar);

}

if(isset($_REQUEST['id'])){
$id=$_REQUEST['id'];
$result=$obj->mysqli->query("SELECT * FROM gedung WHERE id='$id'");

$rows=$result->fetch_assoc();

extract($rows);

}

?>
<!DOCTYPE html>
<html>
<body>
<!--masih salah-->
<form method="post" action="#.php">
<table width="500" border="1" cellpadding="5">
  <tr>
    <th width="154" scope="row">Name</th>
    <td width="314"><input type="text" name="name" size="30" value="<?php echo $name; ?>" /></td>
  </tr>
  <tr>
    <th scope="row">Email</th>
    <td><input type="text" name="email" size="30" value="<?php echo $email; ?>" /></td>
  </tr>
  <tr>
    <th scope="row">Address</th>
    <td><textarea name="address" cols="20" rows="5"><?php echo $address; ?></textarea></td>
  </tr>
  <tr>
    <th scope="row">Mobile</th>
    <td><input type="text" name="mobile" size="30" value="<?php echo $mob; ?>" /></td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td>
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
    <input type="submit" name="submit" value="Save" /></td>
  </tr>
</table>

</form>

</body>
</html>