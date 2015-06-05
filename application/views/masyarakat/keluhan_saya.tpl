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
            <h3><strong> Keluhan </strong> Saya</h3>
        </div>
        <div class="panel panel-body">
            <ul class="nav nav-pills">
                <li class="active"><a href="#keluhan" data-toggle="tab">Keluhan</a></li>
                <li><a href="#grafik" data-toggle="tab">Grafik</a></li>
            </ul>
            <hr>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="keluhan">
                    {if count($data.keluhan_terkini) > 0 }
                        {foreach $data.keluhan_terkini as $keluhan}
                            <div class="panel panel-primary">
                                <div class="panel-primary panel-drop">
                                    <div class="panel-heading">
                                        <header class="panel-title">
                                            <h2><b>{$keluhan['Judul']}</b></h2>
                                        </header>
                                        <div style="color: #39B6AE;font-size:10pt;">
                                            <span class="fa fa-calendar"></span> {$keluhan['Tanggal']}&nbsp;&nbsp;&nbsp;<span class="fa fa-android"></span> {$keluhan['StatusKeluhan']} &nbsp;&nbsp;&nbsp;<span class="fa fa-building"></span> {$keluhan['NamaKategori']}&nbsp;&nbsp;&nbsp;<span class="fa fa-ambulance"></span> {$keluhan['NamaPemerintah']}
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        {$keluhan['IsiKeluhan']}
                                        <hr>
                                        {if $keluhan['IsiTanggapan'] != ""}
                                            <div class="well well-primary">
                                                <h3>{$keluhan['IsiTanggapan']}</h3>
                                            </div>                                            
                                        {/if}
                                    </div>
                                </div>
                            </div>
                        {/foreach}
                    {else}
                        <i>- belum ada keluhan </i>
                    {/if}
                </div>
                <div class="tab-pane" id="grafik">
                    <div id="container" style="width: 680px;text-align: center"></div>
                </div>
            </div>
        </div>
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
    <script src="{base_url()}assets/js/owl.carousel.js" ></script>
    <script src="{base_url()}assets/js/jquery.customSelect.min.js" ></script>
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>
    <script>
        $(function () {

            $(document).ready(function () {

                // Build the chart
                $('#container').highcharts({
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false
                    },
                    title: {
                        text: 'Jumlah Keluhan Saya'
                    },
                    tooltip: {
                        pointFormat: '{literal}{series.name}: <b>{point.percentage:.1f}%</b>{/literal}'
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: false
                            },
                            showInLegend: true
                        }
                    },
                    series: [{
                            type: 'pie',
                            name: 'Status',
                            data: [
                                ['Belum', {$data.grafik_keluhan.belum}],
                                ['Proses', {$data.grafik_keluhan.proses}],
                                ['Selesai', {$data.grafik_keluhan.selesai}],
                            ]
                        }]
                });
            });

        });
        /**
         * Sand-Signika theme for Highcharts JS
         * @author Torstein Honsi
         */

// Load the fonts
        Highcharts.createElement('link', {
            href: '//fonts.googleapis.com/css?family=Signika:400,700',
            rel: 'stylesheet',
            type: 'text/css'
        }, null, document.getElementsByTagName('head')[0]);

// Add the background image to the container
        Highcharts.wrap(Highcharts.Chart.prototype, 'getContainer', function (proceed) {
            proceed.call(this);
            this.container.style.background = 'url(http://www.highcharts.com/samples/graphics/sand.png)';
        });


        Highcharts.theme = {
            colors: ["#f45b5b", "#8085e9", "#8d4654", "#7798BF", "#aaeeee", "#ff0066", "#eeaaee",
                "#55BF3B", "#DF5353", "#7798BF", "#aaeeee"],
            chart: {
                backgroundColor: null,
                style: {
                    fontFamily: "Signika, serif"
                }
            },
            title: {
                style: {
                    color: 'black',
                    fontSize: '16px',
                    fontWeight: 'bold'
                }
            },
            subtitle: {
                style: {
                    color: 'black'
                }
            },
            tooltip: {
                borderWidth: 0
            },
            legend: {
                itemStyle: {
                    fontWeight: 'bold',
                    fontSize: '13px'
                }
            },
            xAxis: {
                labels: {
                    style: {
                        color: '#6e6e70'
                    }
                }
            },
            yAxis: {
                labels: {
                    style: {
                        color: '#6e6e70'
                    }
                }
            },
            plotOptions: {
                series: {
                    shadow: true
                },
                candlestick: {
                    lineColor: '#404048'
                },
                map: {
                    shadow: false
                }
            },
            // Highstock specific
            navigator: {
                xAxis: {
                    gridLineColor: '#D0D0D8'
                }
            },
            rangeSelector: {
                buttonTheme: {
                    fill: 'white',
                    stroke: '#C0C0C8',
                    'stroke-width': 1,
                    states: {
                        select: {
                            fill: '#D0D0D8'
                        }
                    }
                }
            },
            scrollbar: {
                trackBorderColor: '#C0C0C8'
            },
            // General
            background2: '#E0E0E8'

        };

// Apply the theme
        Highcharts.setOptions(Highcharts.theme);
    </script>
{/block}
