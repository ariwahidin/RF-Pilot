<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RF Pilot - by Yusen Logistcs</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/admin/') ?>dist/img/yusen-logo.png">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>dist/css/adminlte.min.css">

    <style>
        #pageloader {
            background: rgb(54 48 48 / 80%);
            position: fixed;
            display: none;
            height: 120%;
            width: 100%;
            z-index: 9999999 !important;
            margin-top: -160px !important;
        }

        #pageloader img {
            left: 50%;
            margin-left: -32px;
            margin-top: -55px;
            position: absolute;
            top: 50%;
        }

        @media only screen and (max-width: 768px) {
            #pageloader img {
                left: 50%;
                position: absolute;
                top: 50%;
            }

            body {
                margin-top: 70px !important;
            }
        }
    </style>
</head>


<!-- Automatic element centering -->

<div id="pageloader">
    <img src="<?= base_url('assets/admin/') ?>dist/img/loader-large.gif" alt="processing..." />
</div>

<body class="hold-transition lockscreen">
    <div class="lockscreen-wrapper" id="wadah_lockscreen">

        <div class="lockscreen-logo">
            <img src="<?= base_url('assets/admin/') ?>dist/img/yusen-logo.png" width="70%" alt="Yusen Logo" class="brand-image" style="opacity: 1">
            <!-- <a href=""><b>My</b>Express</a> -->
        </div>

        <div class="lockscreen" align="center">
            <?php if (!empty($_POST)) { ?>
                <span align="center" class="badge badge-danger">username / password salah</span>
            <?php } ?>
        </div>

        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-12 col-sm-12" style="padding:0 30px !important">
                    <form id="form_login" action="<?= base_url('auth/process') ?>" method="POST">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" id="username" value="akasia" name="username" class="form-control" style="text-transform:uppercase" autofocus required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" id="password" value="akasia321" name="password" class="form-control" required autocomplete="off">
                        </div>
                        <div class="form-group" align="right">
                            <button type="button" onclick="prosesLogin()" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url('assets/admin/') ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('assets/admin/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
    </script>
    <script>
        function loading() {
            $("#pageloader").fadeIn();
        }
        var form = document.getElementById("form_login");
        form.addEventListener('submit', loading)

        function prosesLogin(){
            let username = $('#username').val();
            let password = $('#password').val();

            let dataPost = {
                username,
                password
            }

            $.ajax({
                url : "<?=base_url('auth/proses')?>",
                type : "POST",
                data : dataPost,
                dataType : "JSON",
                success : function(response){
                    if(response.success == true){
                        window.location.href = "<?=base_url('auth/auth')?>"
                    }
                }
            })
        }
    </script>
</body>

</html>