<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>{$data.title}</title>
        <meta name="description" content="Srikandi Responsive Admin Templates" />
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

        <!-- start:form login -->
        <div class="container">
            {form_open('auth/login',['id'=>'form-login', 'class'=>'form-login'])}
                <h2 class="form-login-heading">Masuk E-Complaints</h2>
                <div class="login-wrap">
                    <!-- BEGIN Login Form -->
                    <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
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
                    <div class="form-group" style="padding-left: 15pt;">
                        <div class="controls">
                            <label class="checkbox">
                                {form_checkbox('remember')} Biarkan Saya Masuk
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="controls">  
                            {form_submit('login', "Masuk", 'class="btn btn-lg btn-login btn-block"')}
                        </div>
                    </div>
                    <hr/>
                    <p class="clearfix">
                        <a href="#myModal" data-toggle="modal" class="goto-forgot pull-left">Lupa Password?</a>
                        <a href="{base_url()}auth/member_registration" class="goto-register pull-right">Daftar Anggota Baru</a>
                    </p>
                    {form_close()}
                    <!-- END Login Form -->
                </div>

                <!-- Modal -->
                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Lupa Password Password ?</h4>
                            </div>
                            <div class="modal-body">
                                <p>Masukkan alamat e-mail Anda di bawah ini untuk me-reset password Anda</p>
                                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-default" type="button">Batal</button>
                                <button class="btn btn-success" type="button">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal -->
            </form>
        </div>
        <!-- end:form login -->

        <!-- start:javascript -->
        <!-- javascript default for all pages-->
        <script src="{base_url()}assets/js/jquery-1.11.1.min.js"></script>
        <script src="{base_url()}assets/js/bootstrap.min.js"></script>

        <!-- javascript for Srikandi admin -->
        <script src="{base_url()}assets/js/themes.js"></script>
        <!-- end:javascript -->

    </body>
</html>	