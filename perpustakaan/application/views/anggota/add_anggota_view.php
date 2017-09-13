<div class="">
    <div class="page-title" style="padding: 8px">
        <div class="title_left">
            <h1><i class="fa fa-columns"></i>  Tambah Data Rekap</h1>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Masukkan data rekap</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <!-- Notif -->
                        <?php $announce = $this->session->userdata('announce') ?>
                        <?php if(!empty($announce)): ?>
                            <?php if($announce == 'Berhasil menyimpan data'): ?>
                            <div class="alert alert-success"><?php echo $announce; ?></div>
                            <?php else: ?>
                            <div class="alert alert-danger"><?php echo $announce; ?></div>
                            <?php endif; ?>
                        <?php endif; ?>
                            <form method="post" action="<?php echo base_url() ?>anggota/submit" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">IDP
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="idp" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="tanggal" id="single_cal1" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Perihal
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="perihal" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pengguna
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="pengguna" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Keterangan
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" name="keterangan" id="single_cal1" class="form-control col-md-7 col-xs-12"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Periode
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="periode" class="form-control col-md-7 col-xs-12">
                                </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Keperluan
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" name="keperluan">
                                            <option value="L">BBM</option>
                                            <option value="P">KEBUTUHAN KANTOR</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Volume
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="volume" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Harga
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="harga" class="form-control col-md-7 col-xs-12"></input>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nopol
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="nopol" class="form-control col-md-7 col-xs-12"></input>
                                    </div>
                                </div>
                                <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pengguna
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="user" class="form-control col-md-7 col-xs-12"></input>
                                </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Struk
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" name="struk" class="form-control col-md-7 col-xs-12" >
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <a class="btn btn-primary" href="<?php echo base_url('anggota') ?>">Kembali</a>
                                        <button class="btn btn-primary" type="reset">Reset</button>
                                        <input type="submit" class="btn btn-success" name="t" value="Simpan">
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
