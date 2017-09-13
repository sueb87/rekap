<div class="">
    <div class="page-title" style="padding: 8px">
        <div class="title_left">
            <h1><i class="fa fa-columns"></i>  Detail Rekap</h1>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><?php echo $row->PERIHAL; ?></h2>
                    <?php if($this->session->userdata('role')=='superadmin'){echo '<h2 class="pull-right" style="color: #E0E0E0">created at '.$row->D_CREATED.' </h2>';} ?>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-md-3">
                            <img class="pull-right" style="height: 320px;width: 240px" src="<?php echo base_url(); ?>assets/images/upload/anggota/<?php echo $row->FOTO; ?>">
                        </div>
                        <div class="col-md-6">
                            <?php
                                $jenkel = $row->KEPERLUAN;
                                if($jenkel == 'L'){
                                    $jenkel = 'BBM';
                                }else{
                                    $jenkel = 'KEBUTUHAN KANTOR';
                                }
                            ?>

                            <label>ID PROJECT</label>
                            <p>&emsp;&nbsp;<?php echo $row->ID_ANGGOTA ?></p>

                            <label>Perihal</label>
                            <p>&emsp;&nbsp;<?php echo $row->PERIHAL ?></p>

                            <label>Pengguna</label>
                            <p>&emsp;&nbsp;<?php echo $row->PENGGUNA ?></p>

                            <label>Periode</label>
                            <p>&emsp;&nbsp;<?php echo $row->PERIODE ?></p>

                            <label>Keperluan</label>
                            <p>&emsp;&nbsp;<?php echo $jenkel ?></p>

                            <label>Keterangan</label>
                            <p>&emsp;&nbsp;<?php echo $row->KETERANGAN ?></p>

                            <label>Volume</label>
                            <p>&emsp;&nbsp;<?php echo $row->VOLUME ?></p>

                            <label>Harga</label>
                            <p>&emsp;&nbsp;<?php echo $row->HARGA ?></p>

                            <label>Nomor Polisi</label>
                            <p>&emsp;&nbsp;<?php echo $row->NOPOL ?></p>

                            <label>Pengguna</label>
                            <p>&emsp;&nbsp;<?php echo $row->USER ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
