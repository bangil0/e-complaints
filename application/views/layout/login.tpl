
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
            {form_open('auth/login',['id'=>'form-login'])}
            <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
            <h3>Masuk E-Complaints</h3>
            <hr/>
            {$data.message}
            <div class="form-group">
                <div class="controls">
                    {form_input($data.username)}
                    {form_error('username','<p class="help-block text-red">','</p>')}
                </div>
            </div>
            <div class="form-group">
                <div class="controls">
                    {form_input($data.password)}
                </div>
            </div>
            <div class="form-group">
                <div class="controls">
                    <label class="checkbox">
                        {form_checkbox('remember')} Biarkan Saya Masuk
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="controls">
                    {form_submit('login', "Masuk", 'class="btn btn-primary form-control"')}
                </div>
            </div>
            <hr/>
            <p class="clearfix">
                <a href="{base_url()}auth/" class="goto-forgot pull-left">Lupa Password?</a>
                <a href="{base_url()}auth/member_registration" class="goto-register pull-right">Daftar Anggota Baru</a>
            </p>
            {form_close()}
            <!-- END Login Form -->
        </div>
        <!-- END Main Content -->
        <!--basic scripts-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="{base_url()}assets/assets/jquery/jquery-2.1.1.min.js"><\/script>')</script>
        <script src="{base_url()}assets/assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
