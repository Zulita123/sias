
<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Laporan</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Beranda</a></li>
                        <li class="breadcrumb-item active">Laporan</li>
                        <li class="breadcrumb-item active">Hari</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <?php
            if((isset($_POST['submit'])) and ($_POST['cari'] <> "")){

                $bulan=$_POST['cari'];

    $_SESSION['cari']=$bulan;
            $qw=$db->get("disposisi.*,surat_masuk.*","disposisi INNER join surat_masuk on disposisi.no_agenda=surat_masuk.no_agenda","WHERE month(tanggal_kirim)='$bulan'");
        }else{
            $qw=$db->get("disposisi.*,surat_masuk.*","disposisi INNER join surat_masuk on disposisi.no_agenda=surat_masuk.no_agenda","WHERE month(tanggal_kirim)='1'");
            }
               ?>
               <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="btn btn-danger" onclick="cetak()">Cetak</div>
                                 <!-- Nav tabs --><br>
                                  
                                  <form action="" method="POST">
        <label>Pilih Bulan</label>
        <select name="cari" id="cari">
        <option value="">Pilih Bulan</option>
        <option value="1">Januari</option>
        <option value="2">Februari</option>
        <option value="3">Maret</option>
        <option value="4">April</option>
        <option value="5">Mei</option>
        <option value="6">Juni</option>
        <option value="7">Juli</option>
        <option value="8">Agustus</option>
        <option value="9">September</option>
        <option value="10">Oktober</option>
        <option value="11">November</option>
        <option value="12">Desember</option>
        </select>
        <input type="submit" name="submit" id="submit" value="cari" class="btn btn-danger">
        </form> 
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
      <td><?php echo$tampil['no_disposisi']; ?></td>
        <td><?php echo$tampil['no_agenda']; ?></td>
        <td><?php echo$tampil['no_surat']; ?></td>
        <td><?php echo$tampil['kepada']; ?></td>
        <td><?php echo$tampil['keterangan']; ?></td>
        <td><?php echo$tampil['tanggapan']; ?></td>
                                                    
                                                </tr>
                                               <?php } ?>
                                               </tbody>
                                        </table>
                                    </div>

                                <!-- Tab panes -->
                                </div>
                            </div>
                        </div>
                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <script type="text/javascript">
                            function cetak(){
        window.open('http://localhost/sias/page/cetak-dispo.php');
    }
                        </script>
            <!-- End Container fluid  -->
            <!-- footer -->
           <footer class="footer" style="bottom: 0"><small> Copyright © <a href="zulitafatma@gmail.com">Zulita Fatma Sari</a>. All rights reserved</small></footer>
            <!-- End footer -->
        </div>
    <style type="text/css">
        .table-responsive tr td{
            color: #000;
        }
    </style>