
<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Log Hapus Surat Masuk</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Beranda</a></li>
                        <li class="breadcrumb-item">Log Hapus</a></li>
                        <li class="breadcrumb-item active">Surat Masuk</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
               <div class="col-lg-12">
                  <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Log Hapus Surat Masuk</h4>
                                    <div class="table-responsive m-t-40">
                                        <table class="table table-hover table-striped table-bordered" cellspacing="0" width="100%" >
                                            <thead>
                                                <tr>
                                                    <th>No Agenda</th>
                                                    <th>Petugas</th>
                                                    <th>Jenis Surat</th>
                                                    <th>Tanggal Kirim</th>
                                                    <th>tanggal Terima</th>
                                                    <th>No Surat</th>
                                                    <th>Pengirim</th>
                                                    <th>Perihal</th>
                                                    <th class="text-left">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $qw=$db->get("*","surat_masuk","where tanggal_hapus!=''");
                                                     foreach ($qw as $tampil) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $tampil['no_agenda']; ?></td>
                                                    <td><?php echo $tampil['id_petugas']; ?></td>
                                                    <td><?php echo $tampil['jenis_surat']; ?></td>
                                                    <td><?php echo $tampil['tanggal_kirim']; ?></td>
                                                    <td><?php echo $tampil['tanggal_terima']; ?></td>
                                                    <td><?php echo $tampil['no_surat']; ?></td>
                                                    <td><?php echo $tampil['pengirim']; ?></td>
                                                    <td><?php echo $tampil['perihal']; ?></td>
                                                    <td class="text-left">
                                                        <a href="proses/sim-masuk.php?aksi=restore&no_agenda=<?php echo $tampil['no_agenda']; ?>" class="btn btn-primary btn-flat btn-sm">Restore</a> |
                                                        <a href="index.php?p=lihat-masuk&no_agenda=<?php echo $tampil['no_agenda']; ?>" class="btn btn-warning btn-flat btn-sm">Lihat</a> |
                                                        <a onclick="return confirm('apakah Anda Yakin?')" href="proses/sim-masuk.php?aksi=hapus-tenan&no_agenda=<?php echo $tampil['no_agenda']; ?>"  class="btn btn-danger btn-flat btn-sm">Hapus</a>
                                                    </td>
                                                </tr>
                                               <?php } ?>
                                               </tbody>
                                        </table>
                                    </div>
                                </div>
                </div>
            </div>
           
             <footer class="footer" style="bottom: 0"><small> Copyright © <a href="zulitafatma@gmail.com">Zulita Fatma Sari</a>. All rights reserved</small></footer>
        </div>
    <style type="text/css">
        .table-responsive tr td{
            color: #000
        }
    </style>
    <script type="text/javascript">
    
    $(document).on("click","#btn-ubah", function(){
            var a = $(this).data('agenda');
            var b = $(this).data('jenis');
            var c = $(this).data('kirim');
            var d = $(this).data('terima');
            var e = $(this).data('pengirim');
            var f = $(this).data('perihal');
            
           
            $("#modal #no_agenda").val(a);
            $("#modal #jenis_surat").val(b);
            $("#modal #tanggal_kirim").val(c);
            $("#modal #tanggal_terima").val(d);
            $("#modal #pengirim").val(e);
            $("#modal #perihal").val(f);
        });
    
</script>