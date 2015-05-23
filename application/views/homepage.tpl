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
        <div class="border-head">
            <h3><strong> Keluhan </strong> Terkini</h3>
        </div>
        <div class="panel panel-body">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab">Keluahan</a></li>
                <li><a href="#tanggapan" data-toggle="tab">Tanggapan</a></li>
                <li><a href="#peta" data-toggle="tab">Peta</a></li>

            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    {foreach $data.keluhan_terkini->result() as $keluhan}
                        <div>
                            <h2>{$keluhan->UserID}</h2>
                            {$keluhan->Tanggal}
                        </div>
                        <div>
                            <h4>{$keluhan->IsiKeluhan}</h4>
                        </div>
                        <div>
                            <h6>   
                                {$keluhan->KodeTingkatan}
                                {$keluhan->Tipe}
                                {$keluhan->KategoriID}
                                {$keluhan->StatusKeluhan}
                            </h6>
                        </div>
                        <br>
                    {/foreach}
                </div>
                <div class="tab-pane" id="tanggapan">
                    {foreach $data.keluhan_terkini->result() as $keluhan}
                        <div>
                            <h2>{$keluhan->UserID}</h2>
                            {$keluhan->Tanggal}
                        </div>
                        <div>
                            <h4>{$keluhan->IsiKeluhan}</h4>
                        </div>
                        <div>
                            <h6>   
                                {$keluhan->KodeTingkatan}
                                {$keluhan->Tipe}
                                {$keluhan->KategoriID}
                                {$keluhan->StatusKeluhan}
                            </h6>
                        </div>
                        <br>
                    {/foreach}
                </div>
                <div class="tab-pane" id="messages">...
                    <input type="text" name="address" required>
                </div>
                <div class="tab-pane" id="settings">...</div>
            </div>
        </div>
        <!-- end:state overview -->
    </div>
    {include file="administrator/widget_right.tpl"}
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
{/block}
