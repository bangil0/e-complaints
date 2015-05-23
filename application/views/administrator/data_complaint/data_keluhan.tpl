{extends file='layout/master.tpl'}

{block name="breadcrumb"}
    <ol class="breadcrumb">
        <li><a href="#">Beranda</a></li>
        <li><a href="#">Complaint</a></li>
        <li class="active">Data Keluhan</li>
    </ol>
{/block}

{block name="content"}
    <div class="col-lg-12">
        <h2 class="page-header">
            Data Keluhan
        </h2>
        <br>
        <!-- start:state overview -->
        <section class="panel">
            <div class="panel-body">
                <table class="table table-advance table-responsive" id="example3">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Masyarakat</th>
                            <th>Keluhan</th>
                            <th>Status Keluhan</th>
                            <th>Tanggal</th>
                            <th>Kategori</th>
                            <th>Ditujukan Kepada</th>
                            <th>Modifikasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $data.data_keluhan as $keluhan}
                            <tr>
                                <td>{$keluhan['ID']}</td>
                                <td>{$keluhan['NamaUser']}</td>
                                <td>{$keluhan['IsiKeluhan']}</td>
                                <td>{$keluhan['StatusKeluhan']}</td>
                                <td>{$keluhan['Tanggal']}</td>
                                <td>{$keluhan['NamaKategori']}</td>
                                <td>{$keluhan['NamaPemerintah']}</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-danger" data-toggle="modal" data-target="#delete{$keluhan['ID']}" title="Delete"><i class="fa fa-trash-o" data-original-title="" title=""></i></a>
                                    </div>
                                    <div class="modal fade bs-example-modal-sm" id ="delete{$keluhan['ID']}">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title">Hapus Akun Masyarakat</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <b>Anda Yakin akan menghapus?</b><br>
                                                    Akun {$keluhan['NamaUser']}
                                                    <input type="hidden" name="UserID" value="{$keluhan['ID']}">
                                                </div>
                                                <div class="modal-footer">
                                                    <a href='{site_url('administrator/tingkatpusat/delete')}/{$keluhan['ID']}' type="button" class="btn btn-primary">Ya</a>
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