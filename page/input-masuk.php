<?php 
$qw=$db->get('*','surat_masuk','ORDER BY no_agenda DESC');
        $tampil=$qw->fetch();
        $id=$tampil['no_agenda'];
        $ambil=substr($id,4,6);
        $jml=$ambil + 1;
        if($jml < 10){
            $nomot="AGNM000".$jml;
        }elseif($jml >9 && $jml <=99){
            $nomot="AGNM00".$jml;
        }else{
            $nomot="AGNM0".$jml;
        }
 ?>


<div class="page-wrapper">
    <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Input Surat Masuk</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Beranda</a></li>
                        <li class="breadcrumb-item">Surat Masuk</a></li>
                        <li class="breadcrumb-item active">Input Surat Masuk</li>
                    </ol>
                </div>
            </div>
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                               <h4 class="m-b-0 text-white">Surat Masuk<small> (Silakan Isi Form di Bawah Ini</small>)</h4>
                            </div>
                            <div class="card-body m-t-15">
                                <form class="form-horizontal p-t-20" method="POST" enctype="multipart/form-data" action="proses/sim-masuk.php?aksi=simpan">
                                    <div class="form-group row">
                                        <label for="uname" class="col-sm-3 control-label">No Agenda</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="text" readonly="" value="<?php echo $nomot ?>" class="form-control" name="no_agenda" id="no_agenda">
                                                <div class="input-group-addon"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email2" class="col-sm-3 control-label">ID Petugas</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="text" class="form-control" readonly="" name="id_petugas" value="<?php echo $_SESSION['id_petugas'] ?>">
                                                <div class="input-group-addon"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="web1" class="col-sm-3 control-label">Jenis Surat</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <select class="form-control" name="jenis_surat" id="jenis_surat">
                                                            <option value="">-Pilih-</option>
                                                            <option value="Dinas">Dinas</option>
                                                            <option value="Niaga">Niaga</option>
                                                            <option value="Resmi">Resmi</option>
                                                            <option value="Pribadi">Pribadi</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pass4" class="col-sm-3 control-label">Tanggal Kirim</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="date" class="form-control" name="tanggal_kirim" id="tanggal_kirim" >
                                                <div class="input-group-addon"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pass4" class="col-sm-3 control-label">Tanggal terima</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="date" class="form-control" name="tanggal_terima" id="tanggal_terima" >
                                                <div class="input-group-addon"></div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="uname" class="col-sm-3 control-label">No Surat</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="no_surat" id="no_surat" >
                                                <div class="input-group-addon"></div>
                                            </div>
                                        </div>
                                    </div> <div class="form-group row">
                                        <label for="uname" class="col-sm-3 control-label">Pengirim</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="pengirim" id="pengirim" >
                                                <div class="input-group-addon"></div>
                                            </div>
                                        </div>
                                    </div> <div class="form-group row">
                                        <label for="uname" class="col-sm-3 control-label">Perihal</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="perihal" id="perihal" >
                                                <div class="input-group-addon"></div>
                                            </div>
                                        </div>
                                    </div> <div class="form-group row">
                                        <label for="uname" class="col-sm-3 control-label">Upload Surat</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="file" class="form-control" name="upload_surat" id="upload_surat">
                                                <div class="input-group-addon"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row m-b-0">
                                        <div class="offset-sm-3 col-sm-9 ">
                                            <button type="submit" class="btn btn-info waves-effect waves-light" name="simpan" id="simpan">Submit</button>
                                            <button type="submit" class="btn btn-dark waves-light" name="batal" id="batal">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
 </div>
 <footer class="footer"><small> Copyright © <a href="zulitafatma@gmail.com">Zulita Fatma Sari</a>. All rights reserved</small></footer>
</div>