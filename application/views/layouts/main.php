<!DOCTYPE html>
<html>

<head>
    <?php echo $head ?>
</head>
<script>localStorage.setItem("jsbase_url", window.location.origin+'/');</script>
<body>
    <div id="wrapper">
        <?php echo $sidebar; ?>

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <?php echo $navbar; ?>

            <?php echo $content; ?>
            
            <?php echo $footer; ?>
        </div>
    </div>


<!--tasks-->
<div id="right-sidebar" class="animated sidebar">
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div class="sidebar-container" style="overflow: hidden; width: auto; height: 100%;">

                <ul class="nav nav-tabs navs-3" id="tasksTab">
                    <li>
                        <a class="nav-link active" data-toggle="tab" href="#tab-1"> Order </a>
                    </li>
                    <li>
                        <a class="nav-link" data-toggle="tab" href="#tab-2"> Konfirmasi </a>
                    </li>
                    <li>
                        <a class="nav-link" data-toggle="tab" href="#tab-3"> <i class="fa fa-gear"></i> </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                    <div class="sidebar-title">
                        <h3> <i class="fa fa-cube"></i> Pesanan Baru</h3>
                        <small><i class="fa fa-tim"></i> Pesanan yang belum diproses</small>
                    </div>
                    <ul class="sidebar-list" id="pending_order">
                    <!--new order-->
                    </ul>
                </div>

                    <div id="tab-2" class="tab-pane">

                        <div class="sidebar-title">
                            <h3> <i class="fa fa-cube"></i> Konfirmasi Pelanggan</h3>
                            <small><i class="fa fa-tim"></i> Pelanggan baru belum dikonfirmasi.</small>
                        </div>
                        <ul class="sidebar-list" id="pending_konfirmasi">
                        <!--pending konfirmasi-->
                        </ul>

                    </div>

                    <div id="tab-3" class="tab-pane">

                        <div class="sidebar-title">
                            <h3><i class="fa fa-gears"></i> Konfigurasi</h3>
                            <small><i class="fa fa-tim"></i> Konfigurasi Widget</small>
                        </div>

                        <div class="setings-item">
                    <span>
                        Selalu Tampilkan Widget
                    </span>
                    <div class="switch">
                    <div class="onoffswitch">
                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="collapsemenu">
                        <label class="onoffswitch-label" for="collapsemenu">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
                            
                        </div>
                        <div class="setings-item">
                    <span>
                    </div>
                </div>
            </div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 173.889px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.4; z-index: 90; right: 1px;"></div></div>
        </div>
<!--tasks-->

    <?php echo $js; ?>
    <?php if(($this->uri->segment(1)=='report')||($this->uri->segment(1)=='pricelist')) { ?>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <?php } ?>

    <?php if($this->uri->segment(1)=='dashboard') { ?>
    <!-- Flot -->
    <script src="<?php echo base_url();?>assets/file_js/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>assets/file_js/jquery.flot.categories.js"></script>
    <?php } ?>

    <?php 
        if ($file_js!='') {
            echo "<script src=\"".base_url()."assets/file_js/".$file_js.".js\"></script>";
        }
    ?>
    <script src="<?=base_url() ?>assets/file_js/MyWidget.js"></script>
    <script>
        $(function(){
            fetch_order();
            fetch_konfirm();
            fetch_delivery_sales();
            fetch_stok_notif();
            fetch_layanan_pelanggan();
            pingUser();
            var widget = localStorage.getItem("always_widget");
            if (widget == 'on') { 
                $('#collapsemenu').prop('checked','checked');
                $("#right-sidebar").addClass( "sidebar-open" ); 
            };
        });
    </script>
    <script>
        setInterval(function(){ 
            fetch_order();
            fetch_konfirm();
            fetch_delivery_sales();
            fetch_stok_notif();
            fetch_layanan_pelanggan();
            pingUser();
        }, 30000);
    </script>
    <script>
    // Enable/disable collapse menu
    /*
    $('#collapsemenu').click(function (){
        if ($('#collapsemenu').is(':checked')){
            localStorage.setItem("always_widget", "on");
        } else {
            localStorage.setItem("always_widget", "off");
        }
    });
    */
    </script>
</body>
</html>
