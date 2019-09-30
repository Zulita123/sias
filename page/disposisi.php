<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Disposisi</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Beranda</a></li>
                        <li class="breadcrumb-item active">Disposisi</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <?php
                  $in=$db->get('*','disposisi',"");
               ?>
               <div class="col-sm-12">
              <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Disposisi</h4>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No Disposisi</th>
                                                <th>No Agenda</th>
                                                <th>No Surat</th>
                                                <th>Kepada</th>
                                                <th>Keterangan</th>
                                                <th>Tanggapan</th>
                                                <th class="text-left">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                 foreach ($in as $tampilin)
                                                    {
                                            ?>
                                            <tr>
                                                <td><?php echo $tampilin['no_disposisi'];?></td>
                                                <td><?php echo $tampilin['no_agenda']; ?></td>
                                                <td><?php echo $tampilin['no_surat']; ?></td>
                                                <td><?php echo $tampilin['kepada']; ?></td>
                                                <td><?php echo $tampilin['keterangan']; ?></td>
                                                <td>
                                                    <?php 
                                                        $si=$tampilin['tanggapan'];
                                                        if ($si=='') {
                                                            echo '<form action="proses/sim-masuk.php?aksi=terus" method="POST">
                                                    <input style="width: 78%;font-size:12px" type="text" name="tanggapan" class="form-control pull-left">
                                                    <input type="hidden" name="no_agenda" value="'.$tampilin['no_agenda'].'" class="form-control pull-left">
                                                    <input type="submit" name="" value="Tanggapi" class="btn btn-primary btn-flat btn-sm pull-right">
                                                    </form>';
                                                        }else{
                                                            echo $tampilin['tanggapan'];;
                                                        }
                                                     ?>
                                                   
                                                </td>
                                                <td class="text-left">
                                                    <a href="index.php?p=lihat-disposisi&no_agenda=<?php echo $tampilin['no_agenda']; ?>" class="btn btn-warning btn-flat btn-sm">Lihat</a> |
                                                    <a href="proses/sim-masuk.php?aksi=hapusd&no_agenda=<?php echo $tampilin['no_agenda']; ?>&no_disposisi=<?php echo $tampilin['no_disposisi']; ?>" name="Hapus" id="hapus" class="btn btn-danger btn-flat btn-sm">Hapus</a></td>
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
            <!-- End Container fluid  -->
            <!-- footer -->
           <footer class="footer" style="bottom: 0"><small> Copyright © <a href="zulitafatma@gmail.com">Zulita Fatma Sari</a>. All rights reserved</small></footer>
            <!-- End footer -->
        </div>
    <style type="text/css">
        .table-responsive tr td{
            color: #000
        }
    </style>