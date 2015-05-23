{extends file='layout/master.tpl'}

{block name="breadcrumb"}
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Akun Pemerintah</li>
        <li class="active">Pemerintah Pusat</li>
    </ol>
{/block}

{block name="content"}
    <div class="col-lg-12">
        <h2 class="page-header">
            Akun Pemerintah Pusat
        </h2>
        <div class="clearfix">
            <div class="btn-group">
                <a href="{site_url('administrator/pemerintahpusat/insert')}" class="btn btn-primary">
                    Tambah Akun <i class="fa fa-plus" data-original-title="" title=""></i>
                </a>
            </div>
            <div class="btn-group pull-right">
                <button class="btn btn-warning dropdown-toggle" data-toggle="dropdown" data-original-title="" title="">Tools <i class="fa fa-angle-down" data-original-title="" title=""></i>
                </button>
                <ul class="dropdown-menu pull-right">
                    <li><a href="#">Print</a></li>
                    <li><a href="#">Save as PDF</a></li>
                    <li><a href="#">Export to Excel</a></li>
                </ul>
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
                            <th>Username</th>
                            <th>Pemerintah Pusat</th>
                            <th>Modifikasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $data.PemerintahPusat->result() as $pusat}
                            <tr>
                                <td>{$pusat->ID}</td>
                                <td><b>{$pusat->NamaPemerintah}</b></td>
                                <td>{$pusat->Username}</td>
                                <td>{$pusat->NamaPusat}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{site_url('administrator/pemerintahpusat/edit')}/{$pusat->ID}" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit" data-original-title="" title=""></i></a>
                                        <a class="btn btn-danger" data-toggle="modal" data-target="#delete{$pusat->ID}" title="Delete"><i class="fa fa-trash-o" data-original-title="" title=""></i></a>
                                    </div>
                                    <div class="modal fade bs-example-modal-sm" id ="delete{$pusat->ID}">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title">Hapus Akun Pemerintah Kota</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <b>Anda Yakin akan menghapus?</b><br>
                                                    Akun {$pusat->NamaPemerintah}
                                                    <input type="hidden" name="UserID" value="{$pusat->UserID}">
                                                </div>
                                                <div class="modal-footer">
                                                    <a href='{site_url('administrator/pemerintahpusat/delete')}/{$pusat->ID}?user={$pusat->UserID}' type="button" class="btn btn-primary">Ya</a>
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