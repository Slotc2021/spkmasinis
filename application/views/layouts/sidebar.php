<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                    <img alt="image" id="sidebar_avatar" class="img-responsive"style="width:75px;"src="<?=base_url()?>assets/img/foto/<?=$this->session->userdata('foto');?>"  onError="this.onerror=null;this.src='<?=STATIC_SERVER;?>img_gudang/foto_profil/none.png';" />
                     </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="block"> <span class="block m-t-xs"> <strong class="font-bold"><?=$this->session->userdata('nama_user');?></strong>
                     </span> <span style="font-size:10px;" class="text-muted text-xs block"><?=$this->session->userdata('jabatan');?> <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="<?=site_url() ?>user/profil">Profil</a></li>
                        <li class="divider"></li>
                        <li><a href="<?=base_url() ?>akses/logout">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    SPK
                </div>
            </li>
            
            <li class="<?php if($this->uri->segment(1)=='dashboard') echo 'active';?>">
                <a href="<?=base_url()?>dashboard"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span></a>
            </li>
            <li class="<?php if($this->uri->segment(1)=='kpi') echo 'active';?>">
                <a href="<?=base_url()?>karyawan"><i class="fa fa-desktop"></i> <span class="nav-label">Karyawan</span></a>
                
            </li>

            <li class="<?php if($this->uri->segment(1)=='kpi') echo 'active';?>">
                <a href="<?=base_url()?>kriteria"><i class="fa fa-table"></i> <span class="nav-label">Kriteria</span></a>
            <!--    <ul class="nav nav-second-level collapse">
                    <li><a href="<?=base_url() ?>master/request_update/baru">Data Alternatif</a></li>
                    <li><a href="<?=base_url() ?>master/request_update/followup">Masukkan Data Alternatif</a></li>
                </ul> -->
            </li>

            <li class="<?php if($this->uri->segment(1)=='kpi') echo 'active';?>">
                <a href="<?=base_url()?>nilai"><i class="fa fa-calculator"></i> <span class="nav-label">Nilai</span></a>
            <!--    <ul class="nav nav-second-level collapse">
                    <li><a href="<?=base_url() ?>master/request_update/baru">Request Baru</a></li>
                    <li><a href="<?=base_url() ?>master/request_update/followup">Sudah Follow Up</a></li>
                </ul> -->
            </li>
            <li class="<?php if($this->uri->segment(1)=='kpi') echo 'active';?>">
                <a href="<?=base_url()?>hitung"><i class="fa fa-file-text-o"></i> <span class="nav-label">Hitung</span></a>
            </li>

            
            <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('a_customer')=='y')) { ?>
            <li class="<?php if(($this->uri->segment(1)=='customer')||($this->uri->segment(1)=='mitra')||($this->uri->segment(1)=='warehouse')) echo 'active';?>">
                <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Customer</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="<?=site_url() ?>customer">Menunggu Approve</a></li>
                    <li><a href="<?=site_url() ?>customer/list_aktif/retail">Customer Retail</a></li>
                    <li><a href="<?=site_url() ?>mitra/addressbook_list/retail">Address Book Retail</a></li>
                    <li><a href="<?=site_url() ?>customer/list_aktif/end_user">Customer End User</a></li>
                    <li><a href="<?=site_url() ?>mitra/addressbook_list/end_user">Address Book End User</a></li>
					<li><a href="<?=site_url() ?>warehouse">Persebaran Konsumen</a></li>
                </ul>
            </li>
            <?php } ?>
            <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('a_customer_notif')=='y')) { ?>
            <li class="<?php if(($this->uri->segment(1)=='pushnotif')) echo 'active';?>">
                <a href="#"><i class="fa fa-envelope-o"></i> <span class="nav-label">Notif Customer</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="<?=site_url()?>pushnotif/newnotif">Tambah Notif</a></li>
                    <li><a href="<?=site_url()?>pushnotif/history_notif">Riwayat Notif</a></li>
                </ul>
            </li>
            <?php } ?>
            <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('a_transaksi_crew')=='y')) { ?>
            <li class="<?php if($this->uri->segment(1)=='order') echo 'active';?>">
                <a href="#"><i class="fa fa-exchange"></i> <span class="nav-label">Transaksi</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <!--COPY HERE-->
                    <li><a href="<?=site_url() ?>order/konsumen">Pemesanan Konsumen</a></li>
                    <li><a href="<?=site_url() ?>packing_scan_barcode/produk/">QC &amp; Packing</a></li>
                    <!--<li><a href="<?=site_url() ?>order/list_produk_konsumen">Daftar Produk</a></li>-->
                    <!--COPY HERE-->
                    <li><a href="<?=site_url() ?>order/sales">Penyerahan ke Delivery</a></li>
                    <li><a href="<?=site_url() ?>order/assigned">Order Assigned</a></li>
                    <li><a href="<?=site_url() ?>order/delivery_crew">Urutan Delivery Crew</a></li>
                </ul>
            </li>
            <?php } ?>
            <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('a_setoran_crew')=='y')) { ?>
            <li class="<?php if($this->uri->segment(1)=='setoran') echo 'active';?>">
                <a href="#"><i class="fa fa-money"></i> <span class="nav-label">Setoran Crew</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="<?=site_url() ?>setoran/belum_setor">Belum Setor</a></li>
                    <li><a href="<?=site_url() ?>setoran/menunggu">Menunggu Approval</a></li>
                    <li><a href="<?=site_url() ?>setoran/selesai">Setoran Selesai</a></li>
                </ul>
            </li>
            <?php } ?>
            <!--
            <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('a_transaksi_sales')=='y')) { ?>
            <li  class="<?php if((($this->uri->segment(2)=='penjualan')||($this->uri->segment(2)=='approve_list')||($this->uri->segment(2)==''))&&($this->uri->segment(1)=='sales')) echo 'active';?>">
                <a href="#"><i class="fa fa-briefcase"></i> <span class="nav-label">Sales</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="<?=site_url() ?>sales">List Pesanan Barang </a></li>
                    <li><a href="<?=site_url() ?>sales/approve_list">Approval List</a></li>
                    <li><a href="<?=site_url() ?>sales/penjualan">Penjualan</a></li>
                </ul>
            </li>
            <?php } ?>
            <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('a_setoran_sales')=='y')) { ?>
            <li  class="<?php if(($this->uri->segment(2)=='setoran_menunggu')||($this->uri->segment(2)=='setoran_selesai')||($this->uri->segment(2)=='sales_belum_setor')) echo 'active';?>">
                <a href="#"><i class="fa fa-money"></i> <span class="nav-label">Setoran Sales</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="<?=site_url() ?>sales/sales_belum_setor">Belum Setor</a></li>
                    <li><a href="<?=site_url() ?>sales/setoran_menunggu">Menunggu Approval</a></li>
                    <li><a href="<?=site_url() ?>sales/setoran_selesai">Setoran Selesai</a></li>
                </ul>
            </li>
            <?php } ?>
        	-->
            <!-- <li>
                <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Riwayat</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Riwayat Pemesanan</a></li>
                    
                </ul>
            </li> -->
            <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('a_ws')=='y')) { ?>
            <li class="<?php if($this->uri->segment(1)=='wholesale') echo 'active';?>">
                <a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Wholesale</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="<?=base_url() ?>wholesale/input">Tambah Penjualan</a></li>
                    <li><a href="<?=base_url() ?>wholesale/history">Riwayat Penjualan</a></li>
                </ul>
            </li>
            <?php } ?>
            <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('a_return_jual')=='y')) { ?>
            <li class="hidden <?php if($this->uri->segment(1)=='retur_penjualan') echo 'active';?>">
                <a href="#"><i class="fa fa-undo"></i> <span class="nav-label">Retur Jual</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="<?=site_url() ?>retur_penjualan">Retur Penjualan</a></li>
                    <li><a href="<?=site_url() ?>retur_penjualan/riwayat_penjualan">Riwayat &amp; Penyelesaian</a></li>
                    <li><a href="<?=site_url() ?>retur_penjualan/riwayat_penyelesaian">Riwayat Penyelesaian</a></li>
                </ul>
            </li>
            <?php } ?>
            <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('a_tracking')=='y')) { ?>
            <li class="<?php if($this->uri->segment(1)=='tracking') echo 'active';?>">
                <a href="#"><i class="fa fa-map-marker"></i> <span class="nav-label">Tracking</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="<?=base_url() ?>tracking/crew">Tracking Crew Delivery</a></li>
                    <li><a href="<?=base_url() ?>tracking/sales">Tracking Sales</a></li>
                </ul>
            </li>
            <?php } ?>
            <!-- <li>
                <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Penerima</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Penerimaan Dari Sales </a></li>
                    <li><a href="#">Penerimaan Dari Delivery</a></li>
    
                </ul>
            </li> -->
            <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('a_pembelian')=='y')) { ?>
            <li class="<?php if($this->uri->segment(1)=='pembelian') echo 'active';?>">
                <a href="#"><i class="fa fa-exchange"></i> <span class="nav-label">Pembelian</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="<?=site_url() ?>pembelian">Form Pembelian</a></li>
                    <li><a href="<?=site_url() ?>pembelian/riwayat">Riwayat Pembelian</a></li>
                </ul>
            </li>
            <?php } ?>
            <!--<li class="<?php if($this->uri->segment(1)=='review') echo 'active';?>">
                <a href="<?=site_url()?>/review"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Review</span></a>
            </li>-->
            <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('a_return_beli')=='y')) { ?>
            <li class="<?php if($this->uri->segment(1)=='retur') echo 'active';?>">
                <a href="#"><i class="fa fa-undo"></i> <span class="nav-label">Retur Beli</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="<?=site_url() ?>retur/pembelian">Retur Pembelian</a></li>
                    <li><a href="<?=site_url() ?>retur/riwayat_pembelian">Riwayat &amp; Penyelesaian</a></li>
                    <li><a href="<?=site_url() ?>retur/riwayat_penyelesaian">Riwayat Penyelesaian</a></li>
                </ul>
            </li>
            <?php } ?>
            <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('a_transfer')=='y')) { ?>
            <li class="<?php if($this->uri->segment(1)=='transfer') echo 'active';?>">
                <a href="<?=site_url()?>transfer/transfer_history"><i class="fa fa-paper-plane"></i> <span class="nav-label">Request Transfer</span></a>
            </li>
            <?php } ?>
            <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('a_stok_opname')=='y')) { ?>
            <li class="<?php if($this->uri->segment(1)=='stok') echo 'active';?>">
                <a href="#"><i class="fa fa-download"></i> <span class="nav-label">Stok Opname</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="<?=site_url() ?>stok/stok_adjust">Form Stok Opname</a></li>
                    <li><a href="<?=site_url() ?>stok/stok_adjust_report">Riwayat Stok Opname</a></li>
                </ul>
            </li>
            <?php } ?>
            <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('a_cash_opname')=='y')) { ?>
            <li class="hidden <?php if($this->uri->segment(1)=='cash_opname') echo 'active';?>" >
                <a href="#"><i class="fa fa-money"></i> <span class="nav-label">Cash Opname</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="<?=site_url() ?>cash_opname/">Form Cash Opname</a></li>
                    <li><a href="<?=site_url() ?>cash_opname/riwayat_cash_opname">Riwayat Cash Opname</a></li>
                </ul>
            </li>
            <?php } ?>
            <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('a_konversi')=='y')) { ?>
            <li class="<?php if($this->uri->segment(1)=='konversi') echo 'active';?>">
                <a href="#"><i class="fa fa-refresh"></i> <span class="nav-label">Konversi</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="<?=site_url() ?>konversi/form_konversi">Form Konversi</a></li>
                    <li><a href="<?=site_url() ?>konversi/riwayat_konversi">Riwayat Konversi</a></li>
                </ul>
            </li>
            <?php } ?>
            <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('a_stok_pl')=='y')) { ?>
            <li class="<?php if($this->uri->segment(1)=='pricelist') echo 'active';?>">
                <a href="<?=site_url()?>pricelist"><i class="fa fa-file-text-o"></i> <span class="nav-label">Price List &amp; Stok</span></a>
            </li>
            <?php } ?>
            <li class="hidden <?php if($this->uri->segment(1)=='report') echo 'active';?>">
                <a href="#"><i class="fa fa-file-text-o"></i> <span class="nav-label">Laporan</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="<?=site_url() ?>report/gross_margin">Gross Margin</a></li>
                    <li><a href="<?=site_url() ?>report/persediaan">Lap. Persediaan</a></li>
                    <li><a href="<?=site_url() ?>report/penjualan">Lap. Penjualan</a></li>
                    <li><a href="<?=site_url() ?>report/pembelian">Lap. Pembelian</a></li>
                </ul>
            </li>
           <li class="<?php if($this->uri->segment(2)=='request_update') echo 'active';?>">
                <a href="#"><i class="fa fa-file-text-o"></i> <span class="nav-label">Layanan Pelanggan</span><span class="label label-info float-right customer"></span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="<?=site_url() ?>master/request_update/baru">Request Baru</a></li>
                    <li><a href="<?=site_url() ?>master/request_update/followup">Sudah Follow Up</a></li>
                </ul>
            </li>
            <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('a_laporan')=='y')) { ?>
            <li class="<?php if(($this->uri->segment(1)=='report')||($this->uri->segment(1)=='arsip')) echo 'active';?>">
                <a href="#"><i class="fa fa-file-text-o"></i> <span class="nav-label">Laporan</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="<?=site_url() ?>report/annual">Annual Sales</a></li>
                    <li><a href="<?=site_url() ?>report/customer_growth">Pertumbuhan Konsumen</a></li>
                    <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('sa_lap_product_activity')=='y')) { ?>
                    <li><a href="<?=site_url() ?>report/product_activity">Product Activity</a></li>
                    <?php } ?>
                    <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('sa_lap_konversi')=='y')) { ?>
                    <li><a href="<?=site_url() ?>report/konversi">Konversi</a></li>
                    <?php } ?>
                    <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('sa_lap_transfer')=='y')) { ?>
                    <li><a href="<?=site_url() ?>report/transfer">Transfer</a></li>
                    <?php } ?>
                    <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('sa_lap_persediaan_gudang')=='y')) { ?>
                    <li><a href="<?=site_url() ?>report/persediaan">Persediaan <small>(Gudang)</small></a></li>
                    <?php } ?>
                    <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('sa_lap_persediaan_crew_sales')=='y')) { ?>
                    <li><a href="<?=site_url() ?>report/persediaan_crew_sales/">Persediaan <small>(Crew)</small></a></li>
                    <?php } ?>
                    <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('sa_lap_penjualan_customer')=='y')) { ?>                    
                    <li><a href="<?=site_url() ?>report/penjualan_gm">Penjualan Retail</a></li>
                    <?php } ?>
                    <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('sa_lap_penjualan_end_user')=='y')) { ?>                    
                    <li><a href="<?=site_url() ?>report/penjualan_eu">Penjualan End User</a></li>
                    <?php } ?>
                    <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('sa_lap_penjualan_wholesale')=='y')) { ?>                    
                    <li><a href="<?=site_url() ?>report/penjualan_ws">Penjualan Wholesale</a></li>
                    <?php } ?>
                    <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('sa_lap_retur_penjualan')=='y')) { ?>
                    <li class="hidden"><a href="<?=site_url() ?>report/retur_jual">Retur Penjualan</a></li>
                    <?php } ?>
                    <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('sa_lap_loss_penjualan')=='y')) { ?>                    
                    <li><a href="<?=site_url() ?>report/loss_penjualan">Loss Penjualan</a></li>
                    <?php } ?>
                    <!--
                    <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('sa_lap_penjualan_sales')=='y')) { ?>
                    <li><a href="<?=site_url() ?>report/penjualan_gm_sales">Penjualan <small>(Sales)</small></a></li>
                    <?php } ?>
                    -->
                    <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('sa_lap_pembelian')=='y')) { ?>
                    <li><a href="<?=site_url() ?>report/pembelian_ma">Pembelian</a></li>
                    <?php } ?>
                    <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('sa_lap_pembelian_wholesale')=='y')) { ?>
                    <li><a href="<?=site_url() ?>report/pembelian_ws">Pembelian Wholesale</a></li>
                    <?php } ?>
                    <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('sa_lap_retur_pembelian')=='y')) { ?>
                    <li><a href="<?=site_url() ?>report/retur_beli">Retur Pembelian</a></li>
                    <?php } ?>
                    <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('sa_lap_order_konsumen')=='y')) { ?>
                    <li><a href="<?=site_url() ?>arsip/order">Order Konsumen</a></li>
                    <?php } ?>
                    <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('sa_lap_penjualan_voucher')=='y')) { ?>                    
                    <li><a href="<?=site_url() ?>report/voucher_stat">Penggunaan Voucher</a></li>
                    <?php } ?>
                    <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('sa_lap_review')=='y')) { ?>
                    <li><a href="<?=site_url() ?>review">Review Konsumen</a></li>
                    <?php } ?>
                    <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('sa_lap_critical_stok')=='y')) { ?>
                    <li><a href="<?=site_url() ?>report/critical_stok">Critical Stok</a></li>
                    <?php } ?>
                    <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('sa_lap_penjualan_customer_rekap')=='y')) { ?>                    
                    <li><a href="<?=site_url() ?>report/rekap_pajak_customer">Rekap Pajak Customer</a></li>
                    <?php } ?>
                    <?php if(($this->session->userdata('group')=='admin_gudang')||($this->session->userdata('group')=='staff_gudang')&&($this->session->userdata('sa_lap_moving_sales')=='y')) { ?>
                    <li><a href="<?=site_url() ?>report/moving_sales">Fast/Slow Moving</a></li>
                    <?php } ?>
                </ul>
            </li>
            <?php } ?>       
        </ul>

    </div>
</nav>