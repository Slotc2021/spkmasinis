
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Hitung</h2>
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
                    <h5>list_hitung Matriks ternormalisasi</h5>
                </div>
               <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Alternatif</th>
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
                                        <td><?=$key->id_user?></td>
                                        <td><?=$key->k_1?></td>
                                        <td><?=$key->k_2?></td>
                                        <td><?=$key->k_3?></td>
                                        <td><?=$key->k_2?></td>
                                        <td><?=$key->k_3?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>    
                        </table>

                        
                        <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>list_bobot matriks</h5>
                        </div>
                        <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama Kriteria</th>
                                    <th class="text-center">Bobot</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=0; foreach($data as $key): $no++; 
                                $s = $this->M_akses->get_('tb_user','*','WHERE id_user="'.$key->induk_user.'"');
                                ?>
                                    <tr>
                                        <td class="text-center"><?=$no?></td>
                                        <td><?=$key->id_user?></td>
                                        <td><?=$key->k_1?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>   
                        </table>
                        </div>
                        </div>

                            <div class="ibox-tools">
                                <a href="<?=base_url()?>hitung/form_hitung" class="btn btn-success btn-xs">Hitung Matriks Ternormalisasi Terbobot</a>
                            </div>
                    </div>
                </div>
                </div>
                </div>            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
