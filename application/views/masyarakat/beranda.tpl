{extends file='layout/master.tpl'}

{block name="breadcrumb"}
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Beranda</li>
    </ol>
{/block}

{block name="content"}
    <div class="col-lg-8">
        <!-- start:state overview -->
        <div class="panel panel-body">
            <h3 align="left"><img src="{base_url()}assets/images/keluhan2.png" alt=""> Ajukan Keluhan Anda</h3>
            <br>
            <form class="form-horizontal" action="{site_url('masyarakat/insert')}" method="post">
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="Judul keluhan" name="judul">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <textarea name="isikeluhan" class="form-control" placeholder="Apa keluhan anda ?"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <select class="form-control" name="kategori_keluhan">
                            <option>-- Pilih Kategori --</option>
                            {foreach $data.kategori->result() as $row}
                                <option value="{$row->ID}">{$row->Nama}</option>
                            {/foreach}
                        </select>
                    </div>
                </div>
                <div class="col-md-6" style="top: 10px;">
                    <label for="exampleInputFile">Tingkat Pemerintahan</label> 
                    <div class="radio">
                        <label><input type="radio" id="kotacheck" name="rdtingkat" value="1">Pemerintah KOTA/KABUPATEN</label>
                        <label><input type="radio" id="provinsicheck" name="rdtingkat" value="2">Pemerintah PROVINSI</label><br>
                        <label><input type="radio" id="pusatcheck" name="rdtingkat" value="3">Pemerintah PUSAT</label>
                    </div>
                </div>
                <div class="col-md-6" style="top: 10px;">
                    <label>Pilih Kota/Kabupaten, Provinsi, Pusat</label>
                    <div class="dropdown">
                        <select class="form-control" name="kota" id="kotadropdown">
                            <option>-- Pilih Kota/Kabupaten --</option>
                            {foreach $data.kota->result() as $row}
                                <option value="{$row->ID}">{$row->Nama}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="dropdown" style="top:10px;">
                        <select class="form-control" name="provinsi" id="provinsidropdown">
                            <option>-- Pilih Provinsi --</option>
                            {foreach $data.provinsi->result() as $row}
                                <option value="{$row->ID}">{$row->Nama}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="dropdown" style="top:20px;">
                        <select class="form-control" name="pusat" id="pusatdropdown">
                            <option>-- Pilih Pusat --</option>
                            {foreach $data.pusat->result() as $row}
                                <option value="{$row->ID}">{$row->Nama}</option>
                            {/foreach}
                        </select>
                    </div>
                </div>
                <br>&nbsp;<br><br><br><br>
                <div class="col-md-12">
                    <div class="form-group" align="center">
                        <button type="submit" class="btn btn-primary btn-drop btn-lg">Laporkan Keluhan</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="border-head">
            <h3><strong> Keluhan </strong> Terkini</h3>
        </div>

        {foreach $data.keluhan_terkini as $keluhan}
            <div class="panel panel-primary">
                <div class="panel-primary panel-drop">
                    <div class="panel-heading">
                        <header class="panel-title">
                            <h3><b>{$keluhan['Judul']}</b></h3>
                        </header>
                        <div style="color: #39B6AE;font-size:10pt;">
                            <span class="fa fa-calendar"></span> {$keluhan['Tanggal']}&nbsp;&nbsp;&nbsp;<span class="fa fa-android"></span> {$keluhan['StatusKeluhan']} &nbsp;&nbsp;&nbsp;<span class="fa fa-building"></span> {$keluhan['NamaKategori']}&nbsp;&nbsp;&nbsp;<span class="fa fa-ambulance"></span> {$keluhan['NamaPemerintah']}
                        </div>
                    </div>
                    <div class="panel-body">
                        {$keluhan['IsiKeluhan']}
                    </div>
                </div>
            </div>
        {/foreach}
        <!-- end:state overview -->
    </div>
    {include file="masyarakat/widget_right.tpl"}
{/block}

{block name="addon_styles"}
    <link href="{base_url()}assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet">
    <link rel="stylesheet" href="{base_url()}assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{base_url()}assets/css/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="{base_url()}assets/css/owl.transitions.css">
{/block}

{block name="addon_scripts"}
    <script src="{base_url()}assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="{base_url()}assets/js/owl.carousel.js" ></script>
    <script src="{base_url()}assets/js/jquery.customSelect.min.js" ></script>
    <script src="{base_url()}assets/js/sparkline-chart.js"></script>
    <script src="{base_url()}assets/js/easy-pie-chart.js"></script>
    <!--<script src="{base_url()}assets/js/count.js"></script>-->
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script>
        $(document).ready(function () {
            //default
            $("#kotadropdown").prop("disabled", true);
            $("#provinsidropdown").prop("disabled", true);
            $("#pusatdropdown").prop("disabled", true);

            // cek kota
            $("#kotacheck").click(function () {
                $("#kotadropdown").prop("disabled", false);
                $("#provinsidropdown").prop("disabled", true);
                $("#pusatdropdown").prop("disabled", true);
            });
            // cek provinsi
            $("#provinsicheck").click(function () {
                $("#kotadropdown").prop("disabled", true);
                $("#provinsidropdown").prop("disabled", false);
                $("#pusatdropdown").prop("disabled", true);
            });
            // cek kota
            $("#pusatcheck").click(function () {
                $("#kotadropdown").prop("disabled", true);
                $("#provinsidropdown").prop("disabled", true);
                $("#pusatdropdown").prop("disabled", false);
            });
        });
    </script>
{/block}
