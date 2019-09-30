<!DOCTYPE html>
<html>
<head>
	<title>Laporan Absensi</title>
</head>
<body onload="window.print()">
<div class="artikel">
		<?php
	include '../sistem/proses.php';
  	$array_hr= array(1=>"SENIN","SELASA","RABU","KAMIS","JUMAT","SABTU","MINGGU");
   	$hr = $array_hr[date('N')];   
  	$tgl= date('j');
    $array_bln = array(1=>"JANUARI","FEBRUARI","MARET", "APRIL", "MEI","JUNI","JULI","AGUSTUS","SEPTEMBER","OKTOBER", "NOVEMBER","DESEMBER");
   	$bln = $array_bln[date('n')];
    $buln=$array_bln[intval($_GET['bulan'])];
  	$thn = date('Y');
  	$tgll=date('Y-m-d');
    if (isset($_GET['kelas']) and isset($_GET['bulan'])) {
      $rombel=$_GET['kelas'];
      $qw=$db->get('absen_kelas.nis,absen_kelas.nama,siswa.jk,siswa.rayon, siswa.rombel',"absen_kelas inner join siswa on absen_kelas.nis=siswa.nis","where absen_kelas.rombel='$rombel' group by absen_kelas.nis order by absen_kelas.nis asc");
    }else{
      $qw=$db->get('*',"siswa","where rombel='a' order by nama desc");
    }
    ?>
            <div class="box-body pad">
              <div class="table-responsive">
              	<div class="top">
              		<img class="kiri" src="../dist/img/kiri.jpg">
              		<img class="kanan" src="../dist/img/kanan.jpg">
              	</div>
              	<hr class="garis">
              	<center><strong>LAPORAN ABSENSI KELAS <?php echo $_GET['kelas'];?> BULAN <?php echo $buln;?></strong></center><br>
                  <table id="tabel" class="table table-bordered">
                    <thead>
                      <tr>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Rayon</th>
                        <th>Rombel</th>
                        <th>Absen</th>
                        <th>Ijin</th>
                        <th>Sakit</th>
                        <th>Terlambat</th>
                      </tr>
                    </thead>
                    <tbody id="tbody">
                    <?php
                      foreach ($qw as $data) {
                      $kw=$db->get('count(keterangan) as jumlah',"absen_kelas","where nis='$data[nis]' and keterangan='A' and month(tgl_absen_kelas)='$_GET[bulan]'");
                      $val=$kw->fetch();
                      $kwa=$db->get('count(keterangan) as jumlah',"absen_kelas","where nis='$data[nis]' and keterangan='I' and month(tgl_absen_kelas)='$_GET[bulan]'");
                      $vala=$kwa->fetch();
                      $kwi=$db->get('count(keterangan) as jumlah',"absen_kelas","where nis='$data[nis]' and keterangan='S' and month(tgl_absen_kelas)='$_GET[bulan]'");
                      $vali=$kwi->fetch();
                      $kwe=$db->get('count(status) as jumlah',"absen_masuk","where nis='$data[nis]' and status='Terlambat' and month(tgl_telat)='$_GET[bulan]'");
                      $vale=$kwe->fetch();
                    ?>
                      <tr>
                        <td><?php echo $data['nis']; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['jk']; ?></td>
                        <td><?php echo $data['rayon']; ?></td>
                        <td><?php echo $data['rombel']; ?></td>
                        <td><?php echo $val['jumlah']; ?> Kali</td>
                        <td><?php echo $vala['jumlah']; ?> Kali</td>
                        <td><?php echo $vali['jumlah']; ?> Kali</td>
                        <td><?php echo $vale['jumlah']; ?> Kali</td>
                      </tr>
                    <?php }?>
                    </tbody>
                  </table>
              </div>
              <div class="bawah">
              	<div class="hari">
              		<?php echo $hr . ", " . $tgl . " " . $bln . " " . $thn . " ";?><br>
              		Kepala Sekolah <br><br><br><br><br><br>
              		(...................................)
              	</div>
              </div>
            </div>
</div>
</body>
</html>
<style type="text/css">
	body{
		font-family: arial;
	}
	.artikel{
		width: 800px;
		padding: 5px;
	}
	.kiri{
		width: 30%;
		margin-left: 20px
	}
	.kanan{
		width: 30%;
		margin-right: 20px;
		float: right;
	}
	.top{
		margin-top: 10px
	}
	.garis{
		margin: 15px 20px 40px 20px;
		border: 1px solid;
	}
	#tabel{
		margin: 0 20px;
		font-size: 13px;
		width: 100%;
	}
	tr th{
		text-align: left;
	}
	.hari{
		float: right;
		font-size: 13px
	}
	.bawah{
		margin: 40px 20px 0 20px;
	}
</style>