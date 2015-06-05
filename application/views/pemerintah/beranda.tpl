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
            <h3><strong>Jumlah Keluhan</strong> Berdasarkan Status</h3>
        </div>
        <div class="row state-overview">
            <div class="col-lg-4 col-sm-4">
                <section class="panel">
                    <div class="symbol red">
                        <i class="fa fa-frown-o"></i>
                    </div>
                    <div class="value">
                        <h1 class="count">
                            0
                        </h1>
                        <p>Belum</p>
                    </div>
                </section>
            </div>
            <div class="col-lg-4 col-sm-4">
                <section class="panel">
                    <div class="symbol yellow">
                        <i class="fa fa-spinner"></i>
                    </div>
                    <div class="value">
                        <h1 class="count2">
                            0
                        </h1>
                        <p>Proses</p>
                    </div>
                </section>
            </div>
            <div class="col-lg-4 col-sm-4">
                <section class="panel">
                    <div class="symbol terques">
                        <i class="fa fa-check-square-o"></i>
                    </div>
                    <div class="value">
                        <h1 class="count3">
                            0
                        </h1>
                        <p>Selesai</p>
                    </div>
                </section>
            </div>
        </div>
        <div class="panel panel-body">
            <div id="container"></div>
        </div>
        <div class="panel panel-body">
            <div id="container2"></div>
        </div>
        <!-- end:state overview -->
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
