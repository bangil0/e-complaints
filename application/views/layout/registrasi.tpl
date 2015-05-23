<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>{$data.title}</title>
        <meta name="description" content="Layanan Public E-Complaints" />
        <meta name="keywords" content="resposinve, admin dashboard, admin page, admin template" />
        <meta name="author" content="Candra Dwi Waskito" />
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" href="{base_url()}assets/css/font-awesome.min.css" />
        <link rel="stylesheet" href="{base_url()}assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="{base_url()}assets/css/bootstrap-reset.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{base_url()}assets/css/style.css">
    </head>
    <body>

        <!-- start:form register -->
        <div class="container">
            {form_open('auth/member_registration',['class'=>'form-login'])}
                <h2 class="form-login-heading">Daftar Anggota Baru</h2>
                <div class="login-wrap">
                    <p>Silahkan Isi Identitas Pribadi</p>
                    <!-- BEGIN Register Form -->
                    {$data.message}
                    <div class="form-group">
                        <div class="controls">
                            {form_input($data.email)}
                            {form_error('email','<p class="help-block error">','</p>')}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            {form_input($data.password)}
                            {form_error('password','<p class="help-block error">','</p>')}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            {form_input($data.password_confirm)}
                            {form_error('password_confirm','<p class="help-block error">','</p>')}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <div class="form-group">
                                {form_radio('sex','M',TRUE)} Laki-laki
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                {form_radio('sex','F')} Perempuan
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            {form_submit('auth/member_registration', "Mendaftar", 'class="btn btn-primary form-control"')}
                        </div>
                    </div>
                    <hr/>
                    <p class="clearfix">
                        <a href="{base_url()}auth/login" class="goto-login pull-left">← Kembali ke Masuk</a>
                    </p>
                    {form_close()}
                    <!-- END Register Form -->
                </div>
            {form_close()}
        </div>
        <!-- end:form register -->

        <!-- start:javascript -->
        <!-- javascript default for all pages-->
        <script src="{base_url()}assets/js/jquery-1.11.1.min.js"></script>
        <script src="{base_url()}assets/js/bootstrap.min.js"></script>

        <!-- javascript for Srikandi admin -->
        <script src="{base_url()}assets/js/themes.js"></script>
        <!-- end:javascript -->

    </body>
</html>	