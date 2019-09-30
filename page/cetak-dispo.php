<!DOCTYPE html>
<html>
<head>
	<title>Cetak</title>
</head>
<body onload="javascript:window.print()">
	<?php 
	include "../sistem/proses.php";
		session_start();
    $bulan=$_SESSION['cari'];
	 ?>
     <center>
<table style="text-align: center;">
	<tr>
		<td><img src=""></td>
		<td style="font-family: sans-serif;text-align: center;">
			<div style="text-align: center;margin-left: 100px">
				Laporan Arsip Disposisi
			</div>
			<p style="text-align: center;margin-left: 100px;">Jl. Kelet Ploso KM 36, Kelet, Keling, Jepara, Jawa Tengah 59454</p>
<hr style="text-align: center">
		</td>
		<td><img src=""></td>
	</tr>
</table>
<?php 

$qw=$db->get("disposisi.*,surat_masuk.*","disposisi INNER join surat_masuk on disposisi.no_agenda=surat_masuk.no_agenda","WHERE month(tanggal_kirim)='$bulan'"); ?>

<table class="table table-hover table-striped table-bordered" cellspacing="0" width="100%" >
                                            <thead>
                                               <tr class="th">
        <th>No Disposisi</th>
        <th>No Agenda</th>
        <th>No Surat</th>
        <th>Kepada</th>
        <th>Keteranagan</th>
        <th>Tanggapan</th>
    </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                     foreach ($qw as $tampil) {
                                                ?>
                                                <tr>
                                                    <td><?php echo$tampil['no_agenda']; ?></td>
        <td><?php echo$tampil['no_disposisi']; ?></td>
        <td><?php echo$tampil['no_agenda']; ?></td>
        <td><?php echo$tampil['no_surat']; ?></td>
        <td><?php echo$tampil['kepada']; ?></td>
        <td><?php echo$tampil['keterangan']; ?></td>
        <td><?php echo$tampil['tanggapan']; ?></td>
                                                    
                                                </tr>
                                                <tr>
    	<td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
                                               <?php } ?>
                                               </tbody>
                                        </table>
                                        <table style="text-align: center;">
    <tr>
        <td style="font-family: sans-serif;text-align: center;">
            <div style="text-align: right;float: right;margin-left: 500px;margin-top: 25px;">
                Jepara, <?php echo date("Y-m-d")?>
            </div>
        </td>
    </tr>
</table>
<table style="text-align: center;">
    <tr>
        <td style="font-family: sans-serif;text-align: center;">
            <div style="text-align: center;float: right;margin-left: 550px;margin-top: 60px;">
                Admin
            </div>
        </td>
    </tr>
</table>
</center>
</body>
</html>