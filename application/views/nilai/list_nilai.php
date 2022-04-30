
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Nilai</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?=base_url()?>/dashboard">Dashboard</a>
            </li>
            <li>
                <a>Tables</a>
            </li>
            <li class="active">
                <strong>Data Tables</strong>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Tabel Nilai Masinis</h5>
                    <div class="ibox-tools">
                <!--       <a href="<?=base_url()?>nilai/form_nilai" class="btn btn-success btn-xs"> Tambah Nilai </a> -->
                    </div>
                </div>
               <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">NIPP</th>
                                    <th class="text-center">Jabatan</th>
                                    <th class="text-center">K1</th>
                                    <th class="text-center">K2</th>
                                    <th class="text-center">K3</th>
                                    <th class="text-center">K4</th>
                                    <th class="text-center">K5</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                                <tbody>
                                    <?php $no=0; foreach($data as $key): $no++; 
                                    $s = $this->M_akses->get_('tb_user','*','WHERE id_user="'.$key->induk_user.'"');
                                    $s = $this->M_akses->get_('tb_kriteria','*','WHERE id_kriteria="'.$key->induk_user.'"');
                                    ?>
                                        <tr>
                                            <td class="text-center"><?=$no?></td>
                                            <td><?=$key->nama_user?></td>
                                            <td><?=$key->nipp_user?></td>
                                            <td><?=$key->jabatan?></td>
                                            <td><?=$key->k_1?></td>
                                            <td><?=$key->k_2?></td>
                                            <td><?=$key->k_3?></td>
                                            <td><?=$key->k_4?></td>
                                            <td><?=$key->k_5?></td>
                                            <td class="text-center">
                                                <a href="<?=base_url()?>nilai/form_nilai/<?=$key->id_nilai?>" class="btn btn-success btn-xs">Tambah</a>
                                                <a href="<?=base_url()?>nilai/form_nilai/<?=$key->id_kriteria?>" class="btn btn-warning btn-xs">Edit</a>&nbsp;
                                                <a href="<?=base_url()?>nilai/hapus/<?=$key->id_kriteria?>" class="btn btn-danger btn-xs">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            <tfoot>
                                
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>