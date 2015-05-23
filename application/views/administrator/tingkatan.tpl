{extends file='layout/master.tpl'}
{block name="content"}
    <div class="wrap">  		 
        <div class="column_left" style="padding-right:60px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-body">
                        <div role="tabpanel">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Sekilas</a></li>
                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Pemerintah Pusat</a></li>
                                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Pemerintah Provinsi</a></li>
                                <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Pemerintah Kota</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <div id="container" style="width:100%; height:400px;"></div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3>Informasi Pemerintah Pusat</h3>
                                            {form_open_multipart('administrator/tingkatan/insertPusat', 'class="form-horizontal"')}
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
                                                <label class="col-sm-3 col-lg-2 control-label">Nama Kota</label>
                                                {*form_label('Judul Halaman', 'halaman_title')*}
                                                <div class="col-sm-9 col-lg-10 controls">
                                                    {form_input($data.nama_pusat)}
                                                    {form_error('nama_pusat','<p class="help-block-red">','</p>')}
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
                                            <table class="table table-advance table-responsive" id="example1">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama</th>
                                                        <th>Modifikasi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {foreach $data.getPusat->result() as $pusat}
                                                        <tr>
                                                            <td>{$pusat->ID}</td>
                                                            <td>{$pusat->Nama}</td>
                                                            <td><button class="btn btn-warning">Edit</button><button class="btn btn-danger">Hapus</button></td>
                                                        </tr>
                                                    {/foreach}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="messages">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3>Informasi Pemerintah Provinsi</h3>
                                            {form_open_multipart('administrator/tingkatan/insertProvinsi', 'class="form-horizontal"')}
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
                                                <label class="col-sm-3 col-lg-2 control-label">Nama Provinsi</label>
                                                {*form_label('Judul Halaman', 'halaman_title')*}
                                                <div class="col-sm-9 col-lg-10 controls">
                                                    {form_input($data.nama_provinsi)}
                                                    {form_error('nama_provinsi','<p class="help-block-red">','</p>')}
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

                                            <table class="table table-advance table-responsive" id="example2">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama</th>
                                                        <th>Modifikasi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {foreach $data.getProvinsi->result() as $provinsi}
                                                        <tr>
                                                            <td>{$provinsi->ID}</td>
                                                            <td>{$provinsi->Nama}</td>
                                                            <td><button class="btn btn-warning">Edit</button><button class="btn btn-danger">Hapus</button></td>
                                                        </tr>
                                                    {/foreach}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="settings">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3>Informasi Pemerintah Kota</h3>
                                            {form_open_multipart('administrator/tingkatan/insertKota', 'class="form-horizontal"')}
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
                                                <label class="col-sm-3 col-lg-2 control-label">Nama Kota</label>
                                                {*form_label('Judul Halaman', 'halaman_title')*}
                                                <div class="col-sm-9 col-lg-10 controls">
                                                    {form_input($data.nama_kota)}
                                                    {form_error('nama_kota','<p class="help-block-red">','</p>')}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 col-lg-2 control-label">&nbsp;</label>
                                                {*form_label('Judul Halaman', 'halaman_title')*}
                                                <div class="col-sm-9 col-lg-10 controls">
                                                    {form_submit('submit', "Simpan Kota", 'class="btn btn-flat btn-primary"')}
                                                </div>
                                            </div>
                                            {form_close()}

                                            <table class="table table-advance table-responsive" id="example3">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama</th>
                                                        <th>Modifikasi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {foreach $data.getKota->result() as $kota}
                                                        <tr>
                                                            <td>{$kota->ID}</td>
                                                            <td>{$kota->Nama}</td>
                                                            <td><button class="btn btn-warning">Edit</button><button class="btn btn-danger">Hapus</button></td>
                                                        </tr>
                                                    {/foreach}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>		
                </div>
            </div>
        </div>
        <div class="column_right">
            <div class="column_middle_grid1">
                <div class="profile_picture">
                    <a href=""><img src="{base_url()}assets/images/no-img.png" alt="">	</a>		         
                    <div class="profile_picture_name">
                        <h2>Administrator</h2>
                        <p>Superuser</p>
                    </div>
                    <span><a href="#"> <img src="{base_url()}assets/images/follow_user.png" alt=""> </a></span>
                </div>
                <div class="articles_list">
                    <ul>
                        <li><a href="#" class="red"> <img src="{base_url()}assets/images/comments.png" alt=""> 23</a></li>
                        <li><a href="#" class="purple"> <img src="{base_url()}assets/images/views.png" alt=""> 841</a></li>
                        <li><a href="#" class="yellow"> <img src="{base_url()}assets/images/likes.png" alt=""> 49</a></li>
                        <div class="clear"></div>	
                    </ul>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
{/block}

{block name="addon_plugins"}
    <link href="{base_url()}assets/assets/data-tables/bootstrap3/dataTables.bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="{base_url()}assets/assets/data-tables/jquery.dataTables.js"></script>
    <script src="{base_url()}assets/assets/data-tables/bootstrap3/dataTables.bootstrap.js"></script>
{/block}

{block name="addon_scripts"}
    <script type="text/javascript">
        $(document).ready(function () {
            $('#example1').DataTable();
            $('#example2').DataTable();
            $('#example3').DataTable();
        });
        $(function () {
            $('#container').highcharts({
                chart: {
                    type: 'bar'
                },
                title: {
                    text: 'Tingkat Pemerintahan'
                },
                xAxis: {
                    categories: ['Pemerintah Pusat', 'Pemerintah Provinsi', 'Pemerintah Kota']
                },
                yAxis: {
                    title: {
                        text: 'Fruit eaten'
                    }
                },
                series: [{
                        name: 'Jane',
                        data: [1, 0, 4]
                    }, {
                        name: 'John',
                        data: [5, 7, 3]
                    }]
            });
        });
    </script>
{/block}