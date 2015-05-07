
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>{$data.title}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!--base css styles-->
        <link rel="stylesheet" href="{base_url()}assets/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="{base_url()}assets/assets/font-awesome/css/font-awesome.min.css">

        <!--page specific css styles-->

        <!--flaty css styles-->
        <link rel="stylesheet" href="{base_url()}assets/css/flaty.css">
        <link rel="stylesheet" href="{base_url()}assets/css/flaty-responsive.css">

        <link rel="shortcut icon" href="img/favicon.png">
    </head>
    <body class="login-page">
        <!-- BEGIN Main Content -->
        <div class="login-wrapper">
            <!-- BEGIN Login Form -->
            <!-- BEGIN Register Form -->
            {form_open('auth/member_registration')}
            <h3>Daftar Anggota Baru</h3>
            <hr/>
            {$data.message}
            <div class="form-group">
                <div class="controls">
                    {form_input($data.email)}
                    {form_error('email','<p class="help-block text-red">','</p>')}
                </div>
            </div>
            <div class="form-group">
                <div class="controls">
                    {form_input($data.password)}
                    {form_error('password','<p class="help-block text-red">','</p>')}
                </div>
            </div>
            <div class="form-group">
                <div class="controls">
                    {form_input($data.password_confirm)}
                    {form_error('password_confirm','<p class="help-block text-red">','</p>')}
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
        <!-- END Main Content -->


        <!--basic scripts-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="{base_url()}assets/assets/jquery/jquery-2.1.1.min.js"><\/script>')</script>
        <script src="{base_url()}assets/assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
