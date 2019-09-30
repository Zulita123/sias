<?php
$no=$_GET['no_agenda'];
$kw=$db->get("*","surat_masuk","where no_agenda='$no'");
$data=$kw->fetch();
$qw=$db->get('*','disposisi','ORDER BY no_disposisi DESC');
        $tampil=$qw->fetch();
        $id=$tampil['no_disposisi'];
        $ambil=substr($id,3,5);
        $jml=$ambil + 1;
        if($jml < 10){
            $nomot="DPS000".$jml;
        }elseif($jml >9 && $jml <=99){
            $nomot="DPS00".$jml;
        }else{
            $nomot="DPS0".$jml;
        }
 ?>

<div class="page-wrapper">
    <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Input Disposisi Surat</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Beranda</a></li>
                        <li class="breadcrumb-item">Disposisi Surat</a></li>
                        <li class="breadcrumb-item active">Input Disposisi Surat</li>
                    </ol>
                </div>
            </div>
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                               <h4 class="m-b-0 text-white">Disposisi Surat<small> (Silakan Isi Form di Bawah Ini</small>)</h4>
                            </div>
                            <div class="card-body m-t-15">
                                <form class="form-horizontal p-t-20" method="POST" enctype="multipart/form-data" action="proses/sim-masuk.php?aksi=teruskan">
                                    <div class="form-group row">
                                        <label for="uname" class="col-sm-3 control-label">No Disposisi</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="text" value="<?php echo $nomot ?>" class="form-control" name="no_disposisi" id="no_disposisi">
                                                <div class="input-group-addon"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email2" class="col-sm-3 control-label">No Agenda</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="text" value="<?php echo $data['no_agenda'] ?>" class="form-control" readonly="" name="no_agenda" id="no_agenda">
                                                <div class="input-group-addon"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="web1" class="col-sm-3 control-label">No Surat</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                               <input type="text" value="<?php echo $data['no_surat'] ?>" class="form-control" readonly="" name="no_surat" id="no_surat">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pass4" class="col-sm-3 control-label">Kepada</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <select class="form-control" name="kepada" id="kepada">
                                                            <option value="">-Pilih-</option>
                                                            <option value="Kepala Sekolah">Kepala Sekolah</option>
                                                            <option value="Waka Kesiswaan">Waka Kesiswaan</option>
                                                            <option value="Waka Kurikulum">Waka Kurikulum</option>
                                                            <option value="Tata Usaha">Tata Usaha</option>
                                                </select>
                                                <div class="input-group-addon"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pass4" class="col-sm-3 control-label">Keterangan</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <textarea name="keterangan" id="keterangan" class="form-control"></textarea>
                                                <div class="input-group-addon"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row m-b-0">
                                        <div class="offset-sm-3 col-sm-9 ">
                                            <button type="submit" class="btn btn-info waves-effect waves-light" name="simpan" id="simpan">Submit</button>
                                            <button type="reset" class="btn btn-dark waves-light" name="batal" id="batal">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
 </div>
 <footer class="footer"><small> Copyright © <a href="zulitafatma@gmail.com">Zulita Fatma Sari</a>. All rights reserved</small></footer>
</div>