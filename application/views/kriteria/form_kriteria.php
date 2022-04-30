
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Kriteria</h2>
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
                    <h5>Tabel Kriteria Penilaian</h5>
                </div>
               <div class="ibox-content">
                    <form method="POST" action="<?=base_url()?>kriteria/action/<?php if(!empty($data)) echo $data[0]->id_kriteria; ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Kriteria</label>
                            <select name="nama_kriteria" class="form-control" required="true">
                                <option value=""> - Pilih Kriteria - </option>
                                <option value="Kehadiran" <?php if($data[0]->nama_kriteria == 'Kehadiran') echo 'Selected';?>> Kehadiran  </option>
                                <option value="Pengetahuan" <?php if($data[0]->nama_kriteria == 'Pengetahuan') echo 'Selected';?>> Pengetahuan  </option>
                                <option value="Kemampuan" <?php if($data[0]->nama_kriteria == 'Kemampuan') echo 'Selected';?>> Kemampuan  </option>
                                <option value="Ketrampilan" <?php if($data[0]->nama_kriteria == 'Ketrampilan') echo 'Selected';?>> Ketrampilan  </option>
                                <option value="Sikap" <?php if($data[0]->nama_kriteria == 'SIKAP') echo 'Selected';?>> Sikap  </option>
                            </select>  
                            <br>  
                            <label>Bobot</label>
                            <input class="form-control" name="bobot_kriteria" placeholder="Bobot" value="<?php if(!empty($data)) echo $data[0]->bobot_kriteria; ?>">
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