<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>lupa_password</title>

    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?=base_url()?>assets/css/animate.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="passwordBox animated fadeInDown">
        <div class="row">

            <div class="col-md-12">
                <div class="ibox-content">

                    <h2 class="font-bold">Lupa password</h2>

                    <p>
                    Masukkan email Anda dan Password baru akan dikirim ke email Anda
                    </p>

                    <div class="row">

                        <div class="col-lg-12">
                            <form class="m-t" role="form" action="<?=base_url()?>akses/eksekusi_lupa_password">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Alamat Email" required="">
                                </div>

                                <button type="submit" class="btn btn-primary block full-width m-b">Kirim password baru</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Copyright UPT Crew KA Solobalapan
            </div>
            <div class="col-md-6 text-right">
               <small>©2020</small>
            </div>
        </div>
    </div>

</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.3/forgot_password.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Sep 2015 13:14:14 GMT -->
</html>
