<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?> | <?= $site_title; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?> | <?= $site_title; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="<?= $site_favicon; ?>" type="image/x-icon">
    <link href="<?php echo base_url('assets2/extensions/toastify-js/src/toastify.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets2/compiled/css/app.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets2/compiled/css/auth.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets2/compiled/css/select2.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets2/compiled/css/select2-bootstrap-5-theme.min.css') ?>" rel="stylesheet" type="text/css">

</head>

<body>
    <div id="auth">

        <div class="row h-100">

            <div class="col-lg-5 col-12">

                <div id="auth-left">

                    <h3 class=""><?php echo $site_title; ?></h3>
                    <img src="<?php echo $images; ?>" alt="Logo" srcset="<?php echo $images; ?>" style="width:20%;" />
                    <p class="auth-subtitle mb-5 display-4">Silahkan Login</p>


                    <?php
                    echo form_open('login/auth');
                    ?>
                    <?php echo $this->session->flashdata('msg2'); ?>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <?php echo $form_username; ?>

                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <?php echo $form_password; ?>

                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>


                    <div class="form-check form-check-lg d-flex align-items-end">
                        <input class="form-check-input me-1" type="checkbox" onclick="myFunction2()" id="flexCheckDefault">
                        <label class="form-check-label text-gray-600" for="flexCheckDefault">
                            Show Password
                        </label>
                    </div>
                    <script>
                        function myFunction2() {
                            var x = document.getElementById("inputPassword1");
                            if (x.type === "password") {
                                x.type = "text";
                            } else {
                                x.type = "password";
                            }
                        }
                    </script>
                    <br />
                    <br />

                    <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
                    <br />
                    <div class="row" id="daftarbut">

                        <div class="col-md-6">
                            <button class="btn btn-warning btn-block btn-lg shadow-lg">Login</button>
                        </div>
                        <?php
                        echo form_close();
                        ?>



                    </div>


                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>

        </div>

    </div>

</body>
<script src="<?php echo base_url('assets2/static/js/initTheme.js') ?>"></script>
<script src="<?php echo base_url('assets2/extensions/perfect-scrollbar/perfect-scrollbar.min.js') ?>"></script>
<script src="<?php echo base_url('assets2/extensions/toastify-js/src/toastify.js') ?>"></script>
<script src="<?php echo base_url('assets2/compiled/js/toastifycrud.js') ?>"></script>
<script src="<?php echo base_url('assets2/compiled/js/app.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery-3.6.3.min.js') ?>"></script>
<script src="<?php echo base_url('assets2/compiled/js/select2.min.js') ?>"></script>
<?php if ($this->session->flashdata('msg') == 'success'): ?>
    <script type="text/javascript">
        Toastify({
            text: "Terima Kasih telah Mendaftar, Silahkan Login!",
            duration: 3000,
            backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
        }).showToast()
    </script>
<?php else: ?>
<?php endif; ?>



</html>