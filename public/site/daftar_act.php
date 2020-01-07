<?php 
include 'koneksi.php';

$nama  = $_POST['nama'];
$email = $_POST['email'];
$hp = $_POST['hp'];
$alamat = $_POST['alamat'];
$password = md5($_POST['password']);
$password2 = md5($_POST['password2']);


$cek_email = mysqli_query($koneksi,"select * from customer where customer_email='$email'");
if(mysqli_num_rows($cek_email) > 0)
{
	header("location:daftar.php?alert=duplikat");
}
if($password != $password2)
{
	header("location:daftar.php?alert2=notmatch");
}
else
{
	mysqli_query($koneksi, "insert into customer values (NULL,'$nama','$email','$hp','$alamat','$password')");
	header("location:masuk.php?alert=terdaftar");
}

?>