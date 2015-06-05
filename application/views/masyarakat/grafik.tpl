{extends file='layout/master.tpl'}

{block name="breadcrumb"}
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Grafik</li>
    </ol>
{/block}

{block name="content"}
    <div class="col-lg-12">
        <!-- start:state overview -->
        <div class="panel panel-body">
            <ul class="nav nav-pills">
                <li class="active"><a href="#grafik_perkategori" data-toggle="tab">Grafik Keluhan Berdasarkan Kategori</a></li>
                <li><a href='#grafik_perkota' data-toggle="tab">Grafik Keluhan Kota</a></li>
                <li><a href='#grafik_perprovinsi' data-toggle="tab">Grafik Keluhan Provinsi</a></li>
                <li><a href='#grafik_perpusat' data-toggle="tab">Grafik Keluhan Pusat</a></li>
            </ul>
            <hr>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="grafik_perkategori">
                    <div id="container"></div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead style="text-align: center">
                            <th>Nama Kategori</th>
                            <th width='200' style="text-align: center">Total</th>
                            </thead>
                            <tbody>
                                {foreach $data.grafik_perkategori->result() as $kategori}
                                    <tr>
                                        <td>{$kategori->Nama}</td>
                                        <td style="background-color: #ff0;text-align: center;"><b>{$kategori->Total}</b></td>
                                    </tr>
                                {/foreach}
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" id="grafik_perkota">
                    <div id="container_perkota"></div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead style="text-align: center">
                            <th>Nama Kota</th>
                            <th width='200' style="text-align: center">Total</th>
                            </thead>
                            <tbody>
                                {foreach $data.grafik_perkota->result() as $kategori}
                                    <tr>
                                        <td>{$kategori->Nama}</td>
                                        <td style="background-color: #ff0;text-align: center;"><b>{$kategori->Total}</b></td>
                                    </tr>
                                {/foreach}
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" id="grafik_perprovinsi">
                    <div id="container_perprovinsi"></div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead style="text-align: center">
                            <th>Nama Provinsi</th>
                            <th width='200' style="text-align: center">Total</th>
                            </thead>
                            <tbody>
                                {foreach $data.grafik_perprovinsi->result() as $kategori}
                                    <tr>
                                        <td>{$kategori->Nama}</td>
                                        <td style="background-color: #ff0;text-align: center;"><b>{$kategori->Total}</b></td>
                                    </tr>
                                {/foreach}
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" id="grafik_perpusat">
                    <div id="container_perpusat"></div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead style="text-align: center">
                            <th>Nama Institusi</th>
                            <th width='200' style="text-align: center">Total</th>
                            </thead>
                            <tbody>
                                {foreach $data.grafik_perpusat->result() as $kategori}
                                    <tr>
                                        <td>{$kategori->Nama}</td>
                                        <td style="background-color: #ff0;text-align: center;"><b>{$kategori->Total}</b></td>
                                    </tr>
                                {/foreach}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {*    {include file="masyarakat/widget_right.tpl"}*}
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
        $(function () {
            // Radialize the colors
            Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function (color) {
                return {
                    radialGradient: {literal}{cx: 0.5, cy: 0.3, r: 0.7}{/literal},
                    stops: [
                        [0, color],
                        [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
                    ]
                };
            });
            // Build grafik berdasarkan kategori
            $('#container').highcharts({
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
                            },
                            connectorColor: 'silver'
                        }
                    }
                },
                series: [{
                        type: 'pie',
                        name: 'Kategori Keluhan',
                        data: [
        {foreach $data.grafik_perkategori->result() as $kategori}
                            ['{$kategori->Nama}',{$kategori->Total}],
        {/foreach}
                        ]
                    }]
            });
            // Build the chart
            $('#container_perkota').highcharts({
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false
                },
                title: {
                    text: 'Jumlah Keluhan Berdasarkan Kota'
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
                            },
                            connectorColor: 'silver'
                        }
                    }
                },
                series: [{
                        type: 'pie',
                        name: 'Kategori Keluhan',
                        data: [
        {foreach $data.grafik_perkota->result() as $kategori}
                            ['{$kategori->Nama}',{$kategori->Total}],
        {/foreach}
                        ]
                    }]
            });
            $('#container_perprovinsi').highcharts({
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false
                },
                title: {
                    text: 'Jumlah Keluhan Berdasarkan Provinsi'
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
                            },
                            connectorColor: 'silver'
                        }
                    }
                },
                series: [{
                        type: 'pie',
                        name: 'Total',
                        data: [
        {foreach $data.grafik_perprovinsi->result() as $kategori}
                            ['{$kategori->Nama}',{$kategori->Total}],
        {/foreach}
                        ]
                    }]
            });
            $('#container_perpusat').highcharts({
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false
                },
                title: {
                    text: 'Jumlah Keluhan Berdasarkan Pusat'
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
                            },
                            connectorColor: 'silver'
                        }
                    }
                },
                series: [{
                        type: 'pie',
                        name: 'Total',
                        data: [
        {foreach $data.grafik_perpusat->result() as $kategori}
                            ['{$kategori->Nama}',{$kategori->Total}],
        {/foreach}
                        ]
                    }]
            });
        });

    </script>
{/block}
