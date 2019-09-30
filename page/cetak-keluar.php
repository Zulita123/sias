<!DOCTYPE html>
<html>
<head>
    <title>Cetak</title>
</head>
<body >
    <?php 
    include "../sistem/proses.php";
        session_start();
    $bulan=$_SESSION['cari'];
     ?>
     <center>
<table style="text-align: center;">
    <tr>
        <td><img src=""></td>
        <td >
            <div >
                Laporan Arsip Surat Keluar
            </div>
            <p >Jl. Kelet Ploso KM 36, Kelet, Keling, Jepara, Jawa Tengah 59454</p>
<hr style="text-align: center">
        </td>
        <td><img src=""></td>
    </tr>
</table>
<?php 

$qw=$db->get("*","surat_keluar","WHERE month(tanggal_kirim)='$bulan'"); ?>

<table class="table table-hover table-striped table-bordered" cellspacing="0" width="100%" >
                                            <thead>
                                               <tr class="th">
        <th>No Agenda</th>
        <th>Id Petugas</th>
        <th>Jenis Surat</th>
        <th>Tanggal Kirim</th>
        <th>No Surat</th>
        <th>Pengirim</th>
        <th>Perihal</th>
        <th>Upload</th>
    </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                     foreach ($qw as $tampil) {
                                                ?>
                                                <tr>
                                                    <td><?php echo$tampil['no_agenda']; ?></td>
        <td><?php echo$tampil['id_petugas']; ?></td>
        <td><?php echo$tampil['jenis_surat']; ?></td>
        <td><?php echo$tampil['tanggal_kirim']; ?></td>
        <td><?php echo$tampil['no_surat']; ?></td>
        <td><?php echo$tampil['pengirim']; ?></td>
        <td><?php echo$tampil['perihal']; ?></td>
        <td><?php echo$tampil['upload_surat']; ?></td>
                                                    
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