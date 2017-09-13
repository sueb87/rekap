<div class="">
    <div class="page-title" style="padding: 8px">
        <div class="title_left">
            <h1><i class="fa fa-columns"></i>  Rekap</h1>
        </div>
    </div>
    <?php if($this->session->userdata('role')=='superadmin'){echo '<a href="'.base_url().'anggota/add" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Tambah Data Rekap</a>';} ?>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>List Data <small>Rekap</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                <!-- Notif -->
                <?php $announce = $this->session->userdata('announce') ?>
                <?php if(!empty($announce)): ?>
                    <?php if($announce == 'Berhasil menyimpan data'): ?>
                    <div class="alert alert-success fade in"><?php echo $announce; ?></div>
                    <?php else: ?>
                    <div class="alert alert-danger fade in"><?php echo $announce; ?></div>
                    <?php endif; ?>
                <?php endif; ?>
                    <div class="row">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>IDP</th>
                                    <th>Tanggal</th>
                                    <th>Perihal</th>
                                    <th>Pengguna</th>
                                    <th>Periode</th>
                                    <th>Keperluan</th>
                                    <th>Keterangan</th>
                                    <th>Volume</th>
                                    <th>Harga</th>
                                    <th>No Polisi</th>
                                    <th>Pengguna</th>
                                    <?php if($this->session->userdata('role')=='superadmin'){echo '<th>Action</th>';} ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    if($this->db->count_all('anggota') == 0){
                                        echo '
                                        <tr>
                                            <td colspan="12">
                                                <div class="alert alert-danger">
                                                    Tidak ada data
                                                </div>
                                            </td>
                                        </tr>
                                        ';
                                    }else{
                                        $no = 1;
                                        foreach ($list as $listAnggota) {
                                            $gen = '';
                                            if($listAnggota->KEPERLUAN == 'L'){
                                                $gen = 'BBM';
                                            }else{
                                                $gen = 'KEBUTUHAN KANTOR';
                                            }
                                            ?>
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $listAnggota->ID_ANGGOTA ?></td>
                                    <td><?php echo $listAnggota->TANGGAL ?></td>
                                    <td><?php echo $listAnggota->PERIHAL ?></td>
                                    <td><?php echo $listAnggota->PENGGUNA ?></td>
                                    <td><?php echo $listAnggota->PERIODE ?></td>
                                    <td><?php echo $gen ?></td>
                                    <td><?php echo $listAnggota->KETERANGAN ?></td>
                                    <td><?php echo $listAnggota->VOLUME ?></td>
                                    <td><?php echo $listAnggota->HARGA ?></td>
                                    <td><?php echo $listAnggota->NOPOL ?></td>
                                    <td><?php echo $listAnggota->USER ?></td>
                                    <?php if($this->session->userdata('role')=='superadmin'): ?>
                                        <td>
                                            <a href="<?php echo base_url() ?>anggota/detail?idtf=<?php echo $listAnggota->ID_ANGGOTA ?>" class="btn btn-info btn-xs">
                                                <i class="fa fa-list"> View</i>
                                            </a>
                                            <a href="<?php echo base_url() ?>anggota/add" class="btn btn-success btn-xs">
                                                <i class="fa fa-edit"> Edit</i>
                                            </a>
                                                <a onclick="sweets()" class="btn btn-danger btn-xs">
                                                <i class="fa fa-trash"> Delete</i>
                                            </a>
                                        </td>
                                    <?php endif; ?>
                                </tr>
                                <?php
                                            $no++;
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function sweets() {
    swal({
            title: "Apakah anda yakin ingin menghapus data ?",
            text: "Data tidak bisa di kembalikan",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Delete",
            closeOnConfirm: false
        },
        function() {
            window.location.href = "<?php echo base_url() ?>anggota/delete?rcgn=<?php echo $listAnggota->ID_ANGGOTA ?>";
        });
}
</script>

