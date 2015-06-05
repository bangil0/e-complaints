{extends file='layout/master.tpl'}

{block name="breadcrumb"}
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Profil</li>
    </ol>
{/block}

{block name="content"}
    <div class="col-lg-8">
        <!-- start:state overview -->
        <div class="panel panel-body">
            <h3 align="left">Edit Profil Identitas Diri</h3>
            <br>
            {form_open_multipart('masyarakat/profil/edit/'|cat:$data.id, 'class="form-horizontal"')}
            {*{if !empty($data.message)}
            <div class="alert alert-danger alert-dismissable">
            <i class="fa fa-ban"></i>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {foreach $data.message as $message}
            {$message}
            {/foreach}
            </div>
            {/if}*}
            <div class="form-group">
                <label class="col-sm-4 col-lg-3 control-label">Nama</label>
                <div class="col-sm-8 col-lg-9 controls">
                    <input type="hidden" name='ID' value="{$data.id}">
                    {form_input($data.nama)}
                    {form_error('nama','<p class="help-block">','</p>')}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 col-lg-3 control-label">No Telepon</label>
                <div class="col-sm-8 col-lg-9 controls">
                    {form_input($data.telepon)}
                    {form_error('telepon','<p class="help-block">','</p>')}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 col-lg-3 control-label">Jenis Kelamin</label>
                <div class="col-sm-8 col-lg-9 controls">
                    {form_input($data.jenis_kelamin)}
                    {form_error('jenis_kelamin','<p class="help-block">','</p>')}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 col-lg-3 control-label">Tanggal Lahir</label>
                <div class="col-sm-8 col-lg-9 controls">
                    {form_input($data.tgl_lahir)}
                    {form_error('tgl_lahir','<p class="help-block">','</p>')}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 col-lg-3 control-label">No Identitas</label>
                <div class="col-sm-8 col-lg-9 controls">
                    {form_input($data.no_identitas)}
                    {form_error('no_identitas','<p class="help-block">','</p>')}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 col-lg-2 control-label">&nbsp;</label>

                <div class="col-sm-9 col-lg-10 controls">
                    {form_submit('submit', "Edit Profil", 'class="btn btn-flat btn-primary"')}
                </div>
            </div>
            {form_close()}
        </div>
    </div>
    {include file="masyarakat/widget_right.tpl"}
{/block}

{block name="addon_styles"}
    <link href="{base_url()}assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet">
    <link rel="stylesheet" href="{base_url()}assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{base_url()}assets/css/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="{base_url()}assets/css/owl.transitions.css">
{/block}
