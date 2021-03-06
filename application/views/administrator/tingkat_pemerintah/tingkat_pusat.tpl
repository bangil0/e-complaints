{extends file='layout/master.tpl'}

{block name="breadcrumb"}
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Tingkat Pusat</li>
    </ol>
{/block}

{block name="content"}
    <div class="col-lg-12">
        <h2 class="page-header">
            Tingkat Provinsi
        </h2>
        <div class="panel">
            <div class="panel-body">
                {form_open_multipart('administrator/tingkatpusat/insert', 'class="form-horizontal"')}
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
                    <label class="col-sm-3 col-lg-2 control-label">Nama Lembaga</label>
                    {*form_label('Judul Halaman', 'halaman_title')*}
                    <div class="col-sm-9 col-lg-10 controls">
                        {form_input($data.nama)}
                        {form_error('nama','<p class="help-block">','</p>')}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 col-lg-2 control-label">&nbsp;</label>
                    {*form_label('Judul Halaman', 'halaman_title')*}
                    <div class="col-sm-9 col-lg-10 controls">
                        {form_submit('submit', "Simpan", 'class="btn btn-flat btn-primary"')}
                    </div>
                </div>
                {form_close()}
            </div>
        </div>
        <br>
        <!-- start:state overview -->
        <section class="panel">
            <div class="panel-body">
                <table class="table table-advance table-responsive" id="example3">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Modifikasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $data.TingkatPusat->result() as $pusat}
                            <tr>
                                <td>{$pusat->ID}</td>
                                <td><b>{$pusat->Nama}</b></td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-danger" data-toggle="modal" data-target="#delete{$pusat->ID}" title="Delete"><i class="fa fa-trash-o" data-original-title="" title=""></i></a>
                                    </div>
                                    <div class="modal fade bs-example-modal-sm" id ="delete{$pusat->ID}">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title">Hapus Akun Masyarakat</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <b>Anda Yakin akan menghapus?</b><br>
                                                    Akun {$pusat->Nama}
                                                    <input type="hidden" name="UserID" value="{$pusat->ID}">
                                                </div>
                                                <div class="modal-footer">
                                                    <a href='{site_url('administrator/tingkatpusat/delete')}/{$pusat->ID}' type="button" class="btn btn-primary">Ya</a>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        {/foreach}
                    </tbody>
                </table>
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