
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Tambah Nilai</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?=base_url()?>/assets/index-2.html">Home</a>
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
                    <h5>Nilai Masinis</h5>
                    <div class="ibox-tools">
                <!--        <a href="<?=base_url()?>nilai/form_nilai" class="btn btn-success btn-xs">Simpan Nilai</a> -->
                    </div>
                </div>
               <div class="ibox-content">
                    <form method="POST" action="<?=base_url()?>karyawan/action/<?php if(!empty($data)) echo $data[0]->id_user; ?>" enctype="multipart/form-data">
                        <div class="form-group">
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
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no=0; foreach($data as $key): $no++; 
                                $s = $this->M_akses->get_('tb_user','*','WHERE id_user="'.$key->induk_user.'"');
                                ?>
                                    <tr>
                                        <td class="text-center"><?=$no?></td>
                                        <td><?=$key->nama_user?></td>
                                        <td class="text-center"><?=$key->nipp_user?></td>
                                        <td><?=$key->jabatan?></td>
                                        <td><?=$s[0]->nama_user?></td>
                                        
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>           
                        </table>
                        </div>
                        
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>