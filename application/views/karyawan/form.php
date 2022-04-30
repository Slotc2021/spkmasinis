
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Karyawan</h2>
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
                    <h5>Data Pegawai</h5>
                    <div class="ibox-tools">
                <!--        <a href="<?=base_url()?>karyawan/form" class="btn btn-success btn-xs">Tambah Karyawan</a> -->
                    </div>
                </div>
               <div class="ibox-content">
                    <form method="POST" action="<?=base_url()?>karyawan/action/<?php if(!empty($data)) echo $data[0]->id_user; ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nama</label>
                            <input class="form-control" name="nama_user" placeholder="Nama" value="<?php if(!empty($data)) echo $data[0]->nama_user; ?>">
                            <label>Nipp</label>
                            <input class="form-control" name="nipp_user" placeholder="Nipp" value="<?php if(!empty($data)) echo $data[0]->nipp_user; ?>">
                            <label>Tempat Lahir</label>
                            <input class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" value="<?php if(!empty($data)) echo $data[0]->tempat_lahir; ?>">
                            <label>Tanggal Lahir</label>
                            <input class="form-control" name="tanggal_lahir" type="date" placeholder="Tanggal Lahir" value="<?php if(!empty($data)) echo $data[0]->tanggal_lahir; ?>">
                            <label>Jabatan</label>
                            <select name="jabatan" class="form-control" required="true">
                                <option value=""> - Pilih Jabatan - </option>
                                <option value="KUPT Crew KA"> KUPT Crew KA  </option>
                                <option value="Penyelia Instruktur"> Penyelia Instruktur  </option>
                                <option value="Masinis Muda"> Masinis Muda  </option>
                                <option value="Masinis Pertama"> Masinis Pertama  </option>
                            </select>    
                            <label>Instruktur</label>
                            <select name="instruktur" class="form-control" required="true">
                                <option value=""> - Pilih Instruktur -  </option>
                                <?php foreach($instruktur as $key): ?>
                                    <option value="<?=$key->id_user?>"><?=$key->nama_user?></option>
                                <?php endforeach; ?>
                            </select>
                            <label>Foto</label>
                            <input class="form-control" name="foto" placeholder="Foto" type="file" Foto="<?php if(!empty($data)) echo $data[0]->foto; ?>">
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