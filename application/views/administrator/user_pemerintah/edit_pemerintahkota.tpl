{extends file='layout/master.tpl'}

{block name="breadcrumb"}
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Akun Pemerintah</li>
        <li class="active">Edit Pemerintah Kota</li>
    </ol>
{/block}

{block name="content"}
    <div class="col-lg-12">
        <h2 class="page-header">
            Edit Akun Pemerintah Kota
        </h2>
        <!-- start:state overview -->
        <section class="panel">
            <div class="panel-body">
                {form_open_multipart('administrator/pemerintahkota/edit/'|cat:$data.id, 'class="form-horizontal"')}
                {if !empty($data.message)}
                    <div class="alert alert-danger alert-dismissable">
                        <i class="fa fa-ban"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {foreach $data.message as $message}
                            {$message}
                        {/foreach}
                    </div>
                {/if}
                <div class="form-group">
                    <label class="col-sm-3 col-lg-2 control-label">Nama</label>
                    <div class="col-sm-9 col-lg-10 controls">
                        <input type="hidden" name='ID' value="{$data.id}">
                        <input type="hidden" name='UserID' value="{$data.UserID}">
                        {form_input($data.nama)}
                        {form_error('nama','<p class="help-block">','</p>')}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 col-lg-2 control-label">Email</label>
                    <div class="col-sm-9 col-lg-10 controls">
                        {form_input($data.email)}
                        {form_error('email','<p class="help-block">','</p>')}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 col-lg-2 control-label">Kota/Kabupaten</label>
                    <div class="col-sm-9 col-lg-10 controls">
                        {form_dropdown($data.kode_pemerintah.name,$data.kode_pemerintah.option,$data.kode_pemerintah.diseleksi,'class="form-control"')}
                        {form_error('kode_pemerintah','<p class="help-block">','</p>')}
                    </div>
                </div> 
                <div class="form-group">
                    <label class="col-sm-3 col-lg-2 control-label">Logo</label>
                    <div class="col-sm-9 col-lg-10 controls">
                        {form_input($data.logo)}
                        {form_error('logo','<p class="help-block">','</p>')}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 col-lg-2 control-label">Password Lama</label>
                    <div class="col-sm-9 col-lg-10 controls">
                        {form_input($data.password_lama)}
                        {form_error('password_lama','<p class="help-block">','</p>')}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 col-lg-2 control-label">Password</label>
                    <div class="col-sm-9 col-lg-10 controls">
                        {form_input($data.password)}
                        {form_error('password','<p class="help-block">','</p>')}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 col-lg-2 control-label">Konfirmasi Password</label>
                    <div class="col-sm-9 col-lg-10 controls">
                        {form_input($data.password_confirm)}
                        {form_error('password_confirm','<p class="help-block">','</p>')}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 col-lg-2 control-label">&nbsp;</label>

                    <div class="col-sm-9 col-lg-10 controls">
                        {form_submit('submit', "Edit Akun", 'class="btn btn-flat btn-primary"')}
                    </div>
                </div>
                {form_close()}
            </div>
        </section>
    </div>
    {*include file="administrator/widget_right.tpl"*}
{/block}

{block name="addon_styles"}
    <link href="{base_url()}assets/assets/data-tables/bootstrap3/dataTables.bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
{/block}

{block name="addon_scripts"}
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="{base_url()}assets/assets/data-tables/jquery.dataTables.js"></script>
    <script src="{base_url()}assets/assets/data-tables/bootstrap3/dataTables.bootstrap.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#example3').DataTable();
        });
    </script>
{/block}