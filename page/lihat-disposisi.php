<div class="page-wrapper">
            <!-- Bread crumb -->
            <?php
                $noag=$_GET['no_agenda'];
                $db->ubah('disposisi',"status_surat='dibaca'","where no_agenda='$noag'");
                $qw=$db->get("*","surat_masuk","where no_agenda='$noag'");
                $tampil=$qw->fetch();
            ?>
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Disposisi</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Beranda</a></li>
                        <li class="breadcrumb-item">Disposisi</a></li>
                        <li class="breadcrumb-item active">Lihat Disposisi</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
                  <div class="card">
            <!-- Container fluid  -->
               <div class="col-lg-12">
                <div class="col-sm-12">
                            <div class="card-title">
                                <h4><?php echo $tampil['perihal']; ?> </h4>
                            </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                                <th>Dari : </th>
                                                <th><?php echo $tampil['pengirim']; ?></th><br>
                                                <th>Nomer Surat : </th>
                                                <th><?php echo $tampil['no_surat']; ?></th><br>
                                                <th>Petugas : </th>
                                                <th><?php echo $tampil['id_petugas']; ?></th><br>
                                                <th>Tanggal Kirim : </th>
                                                
                                                <?php 
                                                $kode=$tampil['terusan'];
                                                if ($kode=='') {
                                                    echo '';
                                                }else{
                                                    echo '<th>Diteruskan ke : </th>
                                                <th>'.$tampil['terusan'].'</th><br>';
                                                }
                                                ?><br>
                                            <embed style="background-color: #000;width: 100%;height: 1250px;border: none" src="file/surat_masuk/<?php echo $tampil['upload_surat']; ?>" ></embed>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                </div>
                </div>
            </div>
             <footer class="footer"><small> Copyright © <a href="zulitafatma@gmail.com">Zulita Fatma Sari</a>. All rights reserved</small></footer>
        </div>
    <style type="text/css">
        .table-responsive tr td{
            color: #000
        }
    </style>