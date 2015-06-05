{extends file='layout/master.tpl'}

{block name="breadcrumb"}
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">History Tanggapan</li>
    </ol>
{/block}

{block name="content"}
    <div class="col-lg-8">
        <ul id="myTab" class="nav nav-pills">
            <li class="active"><a href="#proses" data-toggle="tab">Proses</a></li>
            <li class=""><a href="#selesai" data-toggle="tab">Selesai</a></li>
        </ul>
        <hr>
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="proses">
                {if count($data.keluhan_proses->result())> 0}
                    {foreach $data.keluhan_proses->result() as $belum}
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
                                    <hr>
                                    <div class="well well-primary">
                                        <h4>{$belum->IsiTanggapan}</h4>
                                    </div>
                                    <a href="{site_url('pemerintah/ubah_status_keluhan')}/{$belum->KeluhanID}" class="btn btn-success btn-drop" >
                                        Ubah Status Selesai
                                    </a>
                                </div>
                            </div>
                        </div>
                    {/foreach}
                {else}
                    <div class="panel-body"><i>- Data Keluhan Tidak Ada -</i></div>
                {/if}
            </div>
            <div class="tab-pane fade" id="selesai">
                {if $data.keluhan_selesai->result() > 0}
                    {foreach $data.keluhan_selesai->result() as $belum}
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
                                    <hr>
                                    <div class="well well-primary">
                                        <h4>{$belum->IsiTanggapan}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {/foreach}
                {else}
                    <div class="panel-body"><i>- Data Keluhan Belum Ada -</i></div>
                {/if}
            </div>
        </div>
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
{/block}
