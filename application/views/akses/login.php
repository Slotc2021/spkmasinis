<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>login</title>

    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?=base_url()?>assets/css/animate.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">
        <div class="col-md-3 text center">
        </div>
            <div class="col-md-6 text center">
            <img style="width:350px;" src="<?=base_url()?>assets/img/logospk.png">
            
                <div class="ibox-content">
                    <form class="m-t" role="form" method="post" action="<?=base_url()?>akses/eksekusi_login" >
                        <div class="text-center"><b>LOGIN</b></div>
                        <br>
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Username" required="">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password" required="">
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                        <a href="<?=base_url()?>akses/lupa_password"><small>Lupa password?</small></a>
                    </form>
                    <p class="m-t">
                    </p>
                </div>
            </div>
            
        <div class="col-md-3 text center">
        </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-3">
            </div>
                <div class="col-md-6 text-right">
                <small>Copyright @2020 UPT Crew KA Solobalapan</small>
                </div>
            
        </div>
    </div>

</body>

</html>