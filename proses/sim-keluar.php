<?php 
include "../sistem/proses.php";
$aksi=$_GET['aksi'];
if ($aksi=='simpan') {
	$dua = $_FILES['upload_surat']['tmp_name'];
	$fotobaru = date('dmY').$_FILES['upload_surat']['name'];
	$path = "../file/surat_keluar/".$fotobaru;
	if(move_uploaded_file($dua, $path)){
		$qw=$db->simpan("surat_keluar","'$_POST[no_agenda]','$_POST[id_petugas]','$_POST[jenis_surat]','$_POST[tanggal_kirim]','$_POST[no_surat]','$_POST[pengirim]','$_POST[perihal]','$fotobaru',''");
		if($qw){			
			echo "<script>alert('Berhasil di Simpan')</script>";
			echo "<script>document.location.href='../index.php?p=surat-keluar'</script>";
		}else{
			echo "<script>alert('Gagal di Simpan')</script>";
			echo "<script>document.location.href='../index.php?p=surat-keluar'</script>";
		}
	}else{
		echo"gagal";
	}
}elseif($aksi=='hapus'){
	$tgl=date('Y-m-d');
		$hapus=$db->ubah('surat_keluar',"tanggal_hapus='$tgl'","where no_agenda='$_GET[no_agenda]'");
		if($hapus){
			echo "<script>alert('Berhasil di Hapus')</script>";
			echo "<script>document.location.href='../index.php?p=surat-keluar'</script>";
		}else{
			echo "<script>alert('gagal Hapus')</script>";
			echo "<script>document.location.href='../index.php?p=surat-keluar'</script>";
	}
}
	
 ?>