
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Kriteria</h2>
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
                    <h5>Tabel Kriteria Nilai</h5>
                    <div class="ibox-tools">
                        <a href="<?=base_url()?>kriteria/form_kriteria" class="btn btn-success btn-xs">Tambah Kriteria</a>
                    </div>
                </div>
               <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama Kriteria</th>
                                    <th class="text-center">Bobot</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=0; foreach($data as $key): $no++; 
                                $s = $this->M_akses->get_('tb_kriteria','*','WHERE id_kriteria="'.$key->induk_user.'"');
                                ?>
                                    <tr>
                                        <td class="text-center"><?=$no?></td>
                                        <td><?=$key->nama_kriteria?></td>
                                        <td class="text-center"><?=$key->bobot_kriteria?></td>
                                     <!--   <td><?=$key->jabatan?></td>
                                        <td><?=$s[0]->nama_user?></td> -->
                                        <td class="text-center">
                                            <a href="<?=base_url()?>kriteria/form_kriteria/<?=$key->id_kriteria?>" class="btn btn-warning btn-xs">Edit</a>&nbsp;
                                            <a href="<?=base_url()?>kriteria/hapus/<?=$key->id_kriteria?>" class="btn btn-danger btn-xs">Hapus</a>
                                            <a href="<?=base_url()?>kriteria/detail/<?=$key->id_kriteria?>" class="btn btn-primary btn-xs">Detail</a>
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