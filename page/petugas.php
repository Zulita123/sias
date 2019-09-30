<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Petugas</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Beranda</a></li>
                        <li class="breadcrumb-item active">Petugas</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <?php
                  $i=$db->get('*','petugas',"");
                  $no= 1;
               ?>
               <div class="col-sm-12">
              <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Petugas</h4>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Id Petugas</th>
                                                <th>Nama Petugas</th>
                                                <th>Hak Akses</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                 foreach ($i as $a)
                                                    {
                                            ?>
                                            <tr>
                                                <td><?php echo $a['id_petugas']; ?></td>
                                                <td><?php echo $a['nama']; ?></td>
                                                <td><?php echo $a['hak_akses']; ?></td>
                                                
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