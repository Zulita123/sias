<?php 
include "../sistem/proses.php";
$tgl=date('Y-m-d');
$aksi=$_GET['aksi'];
if ($aksi=='simpan') {
	$dua = $_FILES['upload_surat']['tmp_name'];
	$fotobaru = date('dmY').$_FILES['upload_surat']['name'];
	$path = "../file/surat_masuk/".$fotobaru;
	if(move_uploaded_file($dua, $path)){
		$qw=$db->simpan("surat_masuk","'$_POST[no_agenda]','$_POST[id_petugas]','$_POST[jenis_surat]','$_POST[tanggal_kirim]','$_POST[tanggal_terima]','$_POST[no_surat]','$_POST[pengirim]','$_POST[perihal]','$fotobaru','','','$tgl'");
		if($qw){			
			echo "<script>alert('Berhasil di Simpan')</script>";
			echo "<script>document.location.href='../index.php?p=surat-masuk'</script>";
		}else{
			echo "<script>alert('Gagal di Simpan')</script>";
			echo "<script>document.location.href='../index.php?p=surat-masuk'</script>";
		}
	}else{
		echo"gagal";
	}
}elseif($aksi=='teruskan'){
	$qw=$db->simpan("disposisi","'$_POST[no_disposisi]','$_POST[no_agenda]','$_POST[no_surat]','$_POST[kepada]','$_POST[keterangan]','',''");
		$hapus=$db->ubah('surat_masuk',"terusan='$_POST[kepada]'","where no_agenda='$_POST[no_agenda]'");
		if($qw){
			echo "<script>alert('Berhasil')</script>";
			echo "<script>document.location.href='../index.php?p=surat-masuk'</script>";
		}else{
			echo "<script>alert('gagal')</script>";
			echo "<script>document.location.href='../index.php?p=surat-masuk'</script>";
	}
}elseif($aksi=='hapus'){
	$tgl=date('Y-m-d');
		$hapus=$db->ubah('surat_masuk',"tanggal_hapus='$tgl'","where no_agenda='$_GET[no_agenda]'");
		if($hapus){
			echo "<script>alert('Berhasil di Hapus')</script>";
			echo "<script>document.location.href='../index.php?p=surat-masuk'</script>";
		}else{
			echo "<script>alert('gagal Hapus')</script>";
			echo "<script>document.location.href='../index.php?p=surat-masuk'</script>";
	}
}elseif($aksi=='hapus-keluar'){
	$tgl=date('Y-m-d');
		$hapus=$db->ubah('surat_keluar',"tanggal_hapus='$tgl'","where no_agenda='$_GET[no_agenda]'");
		if($hapus){
			echo "<script>alert('Berhasil di Hapus')</script>";
			echo "<script>document.location.href='../index.php?p=surat-keluar'</script>";
		}else{
			echo "<script>alert('gagal Hapus')</script>";
			echo "<script>document.location.href='../index.php?p=surat-keluar'</script>";
	}
}elseif($aksi=='hapus-tenan'){
	$sqlcek = $db->get("*","surat_masuk","WHERE no_agenda='$_GET[no_agenda]'");
	    $data = $sqlcek->fetch();
	    if(is_file("../file/surat_masuk/".$data['upload_surat'])){
	        unlink("../file/surat_masuk/".$data['upload_surat']);
	    }
		$hapus=$db->hapus('surat_masuk',"no_agenda='$_GET[no_agenda]'");
		if($hapus){
			echo "<script>alert('Berhasil di Hapus')</script>";
			echo "<script>document.location.href='../index.php?p=surat-hapus'</script>";
		}else{
			echo "<script>alert('gagal Hapus')</script>";
			echo "<script>document.location.href='../index.php?p=surat-hapus'</script>";
	}
}elseif($aksi=='restore'){
		$hapus=$db->ubah('surat_masuk',"tanggal_hapus=''","where no_agenda='$_GET[no_agenda]'");
		if($hapus){
			echo "<script>alert('Berhasil Mengmbalikan')</script>";
			echo "<script>document.location.href='../index.php?p=surat-hapus'</script>";
		}else{
			echo "<script>alert('Gagal Mengmbalikan')</script>";
			echo "<script>document.location.href='../index.php?p=surat-hapus'</script>";
	}
}elseif($aksi=='restore-keluar'){
		$hapus=$db->ubah('surat_keluar',"tanggal_hapus=''","where no_agenda='$_GET[no_agenda]'");
		if($hapus){
			echo "<script>alert('Berhasil Mengmbalikan')</script>";
			echo "<script>document.location.href='../index.php?p=log-keluar'</script>";
		}else{
			echo "<script>alert('Gagal Mengmbalikan')</script>";
			echo "<script>document.location.href='../index.php?p=log-keluar'</script>";
	}
}elseif($aksi=='hapus-tenanan'){
	$sqlcek = $db->get("*","surat_keluar","WHERE no_agenda='$_GET[no_agenda]'");
	    $data = $sqlcek->fetch();
	    if(is_file("../file/surat_keluar/".$data['upload_surat'])){
	        unlink("../file/surat_keluar/".$data['upload_surat']);
	    }
		$hapus=$db->hapus('surat_keluar',"no_agenda='$_GET[no_agenda]'");
		if($hapus){
			echo "<script>alert('Berhasil di Hapus')</script>";
			echo "<script>document.location.href='../index.php?p=log-keluar'</script>";
		}else{
			echo "<script>alert('gagal Hapus')</script>";
			echo "<script>document.location.href='../index.php?p=log-keluar'</script>";
	}
}elseif($aksi=='terus'){
		$hapus=$db->ubah('disposisi',"tanggapan='$_POST[tanggapan]'","where no_agenda='$_POST[no_agenda]'");
		if($hapus){
			echo "<script>alert('Berhasil Memberi Tanggapan')</script>";
			echo "<script>document.location.href='../index.php?p=disposisi'</script>";
		}else{
			echo "<script>alert('Gagal Memberi Tanggapan')</script>";
	}
}elseif($aksi=='hapusd'){
		$hapus=$db->hapus('disposisi',"no_disposisi='$_GET[no_disposisi]'");
		$db->ubah('surat_masuk',"terusan=''","where no_agenda='$_GET[no_agenda]'");
		if($hapus){
			echo "<script>alert('Berhasil di Hapus')</script>";
			echo "<script>document.location.href='../index.php?p=disposisi'</script>";
		}else{
			echo "<script>alert('gagal Hapus')</script>";
			echo "<script>document.location.href='../index.php?p=disposisi'</script>";
	}
}	
 ?>