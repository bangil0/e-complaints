{extends file='layout/master.tpl'}

{block name="breadcrumb"}
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Keluhan</li>
    </ol>
{/block}

{block name="content"}
    <div class="col-lg-8">
        <div id="loading"></div>
        {foreach $data.keluhan_tanggapi->result() as $belum}
            <div class="panel panel-primary">
                <div class="panel-primary panel-drop">
                    <div class="panel-heading">
                        <header class="panel-title">
                            <h2><b>{$belum->Judul}</b></h2>
                        </header>
                        <div style="color: #39B6AE;font-size:10pt;">
                            <span class="fa fa-calendar"></span> {$belum->Tanggal}&nbsp;&nbsp;&nbsp;<span class="fa fa-android"></span> {$belum->StatusKeluhan}&nbsp;&nbsp;&nbsp;<span class="fa fa-building"></span> {$belum->Nama}&nbsp;&nbsp;&nbsp;<span class="fa fa-ambulance"></span> {$belum->email}
                        </div>
                    </div>
                    <div class="panel-body">
                        {$belum->IsiKeluhan}
                        <div class="well">
                            <form class="form-horizontal" method="post" id="form_tanggapi">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="hidden" name="KeluhanID" class="form-control" value="{$belum->ID}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <select name="StatusKeluhan" class="form-control">
                                            <option value="" selected="true" disabled="true">- Pilih -</option>
                                            <option value="Proses">Proses</option>
                                            <option value="Selesai">Selesai</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <textarea name="isi_tanggapan" class="form-control" placeholder="Apa keluhan anda ?"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="submit" name="Tanggapi" class="btn btn-primary btn-drop" value="Tanggapi">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        {/foreach}
    </div>
    {include file="pemerintah/widget_right.tpl"}
{/block}

{block name="addon_styles"}
    <link href="{base_url()}assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet">
    <link rel="stylesheet" href="{base_url()}assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{base_url()}assets/css/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="{base_url()}assets/css/owl.transitions.css">
{/block}

{block name="addon_scripts"}
    <script src="{base_url()}assets/js/owl.carousel.js" ></script>
    <script src="{base_url()}assets/js/jquery.customSelect.min.js" ></script>
    <script>
        $(document).ready(function () {
// add loading image to div

            $("#form_tanggapi").submit(function (e) {
                $('#loading').html('<img src="http://preloaders.net/preloaders/287/Filling%20broken%20ring.gif"> loading...');
                e.preventDefault();
                var tdata = $("#form_tanggapi").serializeArray();

                $.ajax({
                    type: "POST",
                    url: '{base_url()}pemerintah/tanggapi/',
                    data: tdata,
                    success: function (tdata)
                    {
                        setTimeout(function () {
                            $('#loading').html(tdata);
                        }, 2000);
                        window.location.href = '{site_url('pemerintah/keluhan')}';
                        //alert('SUCCESS!!');
                    },
                    error: function (XHR, status, response) {
                        alert('fail');
                    }

                });
            });
        });
    </script>
{/block}
