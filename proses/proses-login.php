<?php
include '../sistem/proses.php';
 $username = $_POST['email']; 
 $password = $_POST['password'];
 $qw=$db->get("*","petugas","WHERE email='$username' AND password='$password'");
 $data=$qw->fetch();
 if ($username=='') {
  echo "<script>alert('Username Masih kosong')</script>";
  echo"<script>document.location.href='../login.php'</script>";
 }elseif ($password=='') {
  echo "<script>alert('Passwoard Masih kosong')</script>";
  echo"<script>document.location.href='../login.php'</script>";
 }else{
  if ($data['email'] == $username AND $data['password'] == $password) {
  session_start();
  $_SESSION['nama'] = $data['nama'];
  $_SESSION['id_petugas']=$data['id_petugas'];
  $_SESSION['level']=$data['hak_akses'];


  echo "<script>alert('Berhasil Login')</script>";
   echo"<script>document.location.href='../index.php'</script>";
  }else{
  echo "<script>alert('Gagal Login')</script>";
  echo"<script>document.location.href='../login.php'</script>";
  }
 }
 ?>