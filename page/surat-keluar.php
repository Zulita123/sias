<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Surat Keluar</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Beranda</a></li>
                        <li class="breadcrumb-item">Surat Keluar</a></li>
                        <li class="breadcrumb-item active">Data Surat Keluar</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <?php
                  $keluar=$db->get('*','surat_keluar',"where tanggal_hapus=''");
                  $no= 1;
               ?>
               <div class="col-lg-12">
              <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Surat Keluar</h4>
                                <div class="table-responsive m-t-40">
                                    <table class="table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No Agenda</th>
                                                <th>Petugas</th>
                                                <th>Jenis Surat</th>
                                                <th>Tanggal Kirim</th>
                                                <th>No Surat</th>
                                                <th>Pengirim</th>
                                                <th>Perihal</th>
                                                <th class="text-left">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                 foreach ($keluar as $muncull)
                                                    {
                                            ?>
                                            <tr>
                                                <td><?php echo $muncull['no_agenda']; ?></td>
                                                <td><?php echo $muncull['id_petugas']; ?></td>
                                                <td><?php echo $muncull['jenis_surat']; ?></td>
                                                <td><?php echo $muncull['tanggal_kirim']; ?></td>
                                                <td><?php echo $muncull['no_surat']; ?></td>
                                                <td><?php echo $muncull['pengirim']; ?></td>
                                                <td><?php echo $muncull['perihal']; ?></td>
                                                <td class="text-left">
                                                    <a href="index.php?p=lihat-keluar&no_agenda=<?php echo $muncull['no_agenda']; ?>" class="btn btn-warning btn-flat btn-sm">Lihat</a> |
                                                    <a onclick="return confirm('apakah Anda Yakin?')" href="proses/sim-masuk.php?aksi=hapus-keluar&no_agenda=<?php echo $muncull['no_agenda']; ?>" name="hapus" id="hapus" class="btn btn-danger btn-flat btn-sm">Hapus</a></td>
                                            </tr>
                                           <?php
                                       }
                                       ?>
                                           </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
            <!-- End Container fluid  --><footer class="footer" style="bottom: 0"><small> Copyright © <a href="zulitafatma@gmail.com">Zulita Fatma Sari</a>. All rights reserved</small></footer>
        </div>
    <style type="text/css">
        .table-responsive tr td{
            color: #000
        }
    </style>