{extends file='layout/master.tpl'}

{block name="breadcrumb"}
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Statistik</li>
    </ol>
{/block}

{block name="content"}
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-6">
                <!-- start:state overview -->
                <div class="panel panel-body">
                    <div id="container"></div>
                    <center>
                        <a type="button" class="btn btn-primary btn-lg btn-drop" data-toggle="modal" data-target="#jumlah_perstatus">
                            Detail Informasi
                        </a>
                    </center>
                </div>
                <!-- end:state overview -->
            </div>
            <div class="col-lg-6">
                <!-- start:state overview -->
                <div class="panel panel-body">
                    <div id="container2"></div>
                    <center>
                        <a type="button" class="btn btn-primary btn-lg btn-drop" data-toggle="modal" data-target="#grafik_perkategori">
                            Detail Informasi
                        </a>
                    </center>
                </div>
                <!-- end:state overview -->
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-6">
            </div>
            <div class="col-lg-6">
            </div>
        </div>
    </div>
    {*{include file="pemerintah/widget_right.tpl"}*}
{/block}
{block name="content_tambahan"}
    <!-- Modal -->
    <div class="modal fade" id="jumlah_perstatus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Jumlah Keluhan Berdasarkan Status</h4>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <th>Nama Kategori</th>
                            <th>Jumlah</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Belum</td>
                                    <td><b>{$data.jumlah_keluhan.belum}</b></td>
                                </tr>
                                <tr>
                                    <td>Proses</td>
                                    <td><b>{$data.jumlah_keluhan.proses}</b></td>
                                </tr>
                                <tr>
                                    <td>Sedang</td>
                                    <td><b>{$data.jumlah_keluhan.selesai}</b></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="grafik_perkategori" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Jumlah Keluhan Berdasarkan Kategori</h4>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <th>Nama Kategori</th>
                            <th>Jumlah</th>
                            </thead>
                            <tbody>
                                {foreach $data.grafik_perkategori->result() as $row}
                                    <tr>
                                        <td>{$row->Nama}</td>
                                        <td><b>{$row->Total}</b></td>
                                    </tr>
                                {/foreach}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

        function countBelum(count)
        {
            var div_by = 100,
                    speed = Math.round(count / div_by),
                    $display = $('.count'), run_count = 1,
                    int_speed = 24;
            var int = setInterval(function () {
                if (run_count < div_by) {
                    $display.text(speed * run_count);
                    run_count++;
                } else if (parseInt($display.text()) < count) {
                    var curr_count = parseInt($display.text()) + 1;
                    $display.text(curr_count);
                } else {
                    clearInterval(int);
                }
            }, int_speed);
        }
        function countProses(count)
        {
            var div_by = 100,
                    speed = Math.round(count / div_by),
                    $display = $('.count2'), run_count = 1,
                    int_speed = 24;
            var int = setInterval(function () {
                if (run_count < div_by) {
                    $display.text(speed * run_count);
                    run_count++;
                } else if (parseInt($display.text()) < count) {
                    var curr_count = parseInt($display.text()) + 1;
                    $display.text(curr_count);
                } else {
                    clearInterval(int);
                }
            }, int_speed);
        }
        function countSelesai(count)
        {
            var div_by = 100,
                    speed = Math.round(count / div_by),
                    $display = $('.count3'), run_count = 1,
                    int_speed = 24;
            var int = setInterval(function () {
                if (run_count < div_by) {
                    $display.text(speed * run_count);
                    run_count++;
                } else if (parseInt($display.text()) < count) {
                    var curr_count = parseInt($display.text()) + 1;
                    $display.text(curr_count);
                } else {
                    clearInterval(int);
                }
            }, int_speed);
        }

        countBelum({$data.jumlah_keluhan.belum});
        countProses({$data.jumlah_keluhan.proses});
        countSelesai({$data.jumlah_keluhan.selesai});

        // chart pertama
        $(function () {
            $('#container').highcharts({
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false
                },
                title: {
                    text: 'Jumlah Keluhan Berdasarkan Status'
                },
                tooltip: {
                    pointFormat: '{literal}{series.name}: <b>{point.percentage:.1f}%</b>{/literal}'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{literal}{point.name}</b>: {point.percentage:.1f} %{/literal}',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }
                    }
                },
                series: [{
                        type: 'pie',
                        name: 'Total',
                        data: [
                            ['Belum', {$data.jumlah_keluhan.belum}],
                            ['Proses', {$data.jumlah_keluhan.proses}],
                            ['Selesai', {$data.jumlah_keluhan.selesai}],
                        ]
                    }]
            });
        });
        // chart kedua
        $(function () {
            $('#container2').highcharts({
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false
                },
                title: {
                    text: 'Jumlah Keluhan Berdasarkan Kategori'
                },
                tooltip: {
                    pointFormat: '{literal}{series.name}: <b>{point.percentage:.1f}%</b>{/literal}'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{literal}{point.name}</b>: {point.percentage:.1f} %{/literal}',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }
                    }
                },
                series: [{
                        type: 'pie',
                        name: 'Total',
                        data: [
        {foreach $data.grafik_perkategori->result() as $kategori}
                            ['{$kategori->Nama}', {$kategori->Total}],
        {/foreach}
                        ]
                    }]
            });
        });
    </script>
{/block}
