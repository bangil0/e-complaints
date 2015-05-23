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
                        <i class="fa fa-graduation-cap"></i>
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
                        <i class="fa fa-gift"></i>
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
                        <i class="fa fa-gift"></i>
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
        <div class="border-head">
                <h3><strong> Jumlah User Aktif</strong> Masyarakat dan Pemerintah</h3>
            </div>
        <div class="row state-overview">
            <div class="col-lg-6 col-sm-6">
                <section class="panel">
                    <div class="symbol yellow">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                    <div class="value">
                        <h1 class=" count4">
                            0
                        </h1>
                        <p>Masyarakat</p>
                    </div>
                </section>
            </div>
            <div class="col-lg-6 col-sm-6">
                <section class="panel">
                    <div class="symbol purple">
                        <i class="fa fa-money"></i>
                    </div>
                    <div class="value">
                        <h1 class=" count5">
                            0
                        </h1>
                        <p>Pemerintah</p>
                    </div>
                </section>
            </div>
        </div>
        <!-- end:state overview -->

        <!--custom chart start-->
        <div class="border-head">
            <h3><strong>Graph</strong> Earning</h3>
        </div>
        <div class="container2" id="container2"></div>
        <br>
        <div class="border-head">
            <h3><strong>Statistik Tingkatan Pemerintahan</strong></h3>
        </div>
            <div id="container"></div>
        <!--custom chart end-->
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

        function countMasyarakat(count)
        {
            var div_by = 100,
                    speed = Math.round(count / div_by),
                    $display = $('.count4'), run_count = 1,
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
        function countPemerintah(count)
        {
            var div_by = 100,
                    speed = Math.round(count / div_by),
                    $display = $('.count5'), run_count = 1,
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

        countBelum({$data.keluhan.belum});
        countProses({$data.keluhan.proses});
        countSelesai({$data.keluhan.selesai});

        countMasyarakat({$data.users.masyarakat});
        countPemerintah({$data.users.pemerintah});

        //owl carousel
        $(document).ready(function () {
            $("#owl-demo").owlCarousel({
                navigation: true,
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true,
                autoPlay: true
            });
        });

        //custom select box
        $(function () {
            $('select.styled').customSelect();

            $('#container').highcharts({ chart: {
                    type: 'bar'
                },
                title: {
                    text: 'Tingkat Pemerintahan'
                },
                xAxis: {
                    categories: ['Kota', 'Provinsi', 'Pusat']
                },
                yAxis: {
                    title: {
                        text: 'Fruit eaten'
                    }
                },
                series: [{
                        name: 'Jane',
                        data: [1, 4, 4]
                    }, {
                        name: 'John',
                        data: [5, 7, 3]
                    }]
            });
        });
        $(function () {
            var colors = Highcharts.getOptions().colors,
                    categories = ['MSIE', 'Firefox', 'Chrome', 'Safari', 'Opera'],
                    data = [{
                            y: 55.11,
                            color: colors[0],
                            drilldown: {
                                name: 'MSIE versions',
                                categories: ['MSIE 6.0', 'MSIE 7.0', 'MSIE 8.0', 'MSIE 9.0'],
                                data: [10.85, 7.35, 33.06, 2.81],
                                color: colors[0]
                            }
                        }, {
                            y: 21.63,
                            color: colors[1],
                            drilldown: {
                                name: 'Firefox versions', categories: ['Firefox 2.0', 'Firefox 3.0', 'Firefox 3.5', 'Firefox 3.6', 'Firefox 4.0'],
                                data: [0.20, 0.83, 1.58, 13.12, 5.43],
                                color: colors[1]
                            }
                        }, {
                            y: 11.94,
                            color: colors[2],
                            drilldown: {
                                name: 'Chrome versions', categories: ['Chrome 5.0', 'Chrome 6.0', 'Chrome 7.0', 'Chrome 8.0', 'Chrome 9.0',
                                    'Chrome 10.0', 'Chrome 11.0', 'Chrome 12.0'],
                                data: [0.12, 0.19, 0.12, 0.36, 0.32, 9.91, 0.50, 0.22],
                                color: colors[2]
                            }
                        }, {
                            y: 7.15,
                            color: colors[3],
                            drilldown: {
                                name: 'Safari versions',
                                categories: ['Safari 5.0', 'Safari 4.0', 'Safari Win 5.0', 'Safari 4.1', 'Safari/Maxthon',
                                    'Safari 3.1', 'Safari 4.1'],
                                data: [4.55, 1.42, 0.23, 0.21, 0.20, 0.19, 0.14],
                                color: colors[3]
                            }
                        }, {
                            y: 2.14,
                            color: colors[4],
                            drilldown: {
                                name: 'Opera versions',
                                categories: ['Opera 9.x', 'Opera 10.x', 'Opera 11.x'],
                                data: [0.12, 0.37, 1.65],
                                color: colors[4]
                            }
                        }],
                    browserData = [],
                    versionsData = [],
                    i, j,
                    dataLen = data.length,
                    drillDataLen,
                    brightness;


            // Build the data arrays
            for (i = 0; i < dataLen; i += 1) {
                // add browser data
                browserData.push({
                    name: categories[i],
                    y: data[i].y,
                    color: data[i].color
                });

                // add version data
                drillDataLen = data[i].drilldown.data.length;
                for (j = 0; j < drillDataLen; j += 1) {
                    brightness = 0.2 - (j / drillDataLen) / 5;
                    versionsData.push({
                        name: data[i].drilldown.categories[j],
                        y: data[i].drilldown.data[j],
                        color: Highcharts.Color(data[i].color).brighten(brightness).get()
                    });
                }
            }

            // Create the chart
            $('#container2').highcharts({
                chart: {
                    type: 'pie'
                },
                title: {
                    text: 'Browser market share, April, 2011'
                },
                yAxis: {
                    title: {
                        text: 'Total percent market share'
                    }
                },
                plotOptions: {
                    pie: {
                        shadow: false,
                        center: ['50%', '50%']
                    }
                },
                tooltip: {
                    valueSuffix: '%'
                },
                series: [{
                        name: 'Browsers',
                        data: browserData,
                        size: '60%',
                        dataLabels: {
                            formatter: function () {
                                return this.y > 5 ? this.point.name : null;
                            },
                            color: 'white',
                            distance: -30
                        }
                    }, {
                        name: 'Versions',
                        data: versionsData,
                        size: '80%',
                        innerSize: '60%',
                        dataLabels: {
                            formatter: function () {
                                // display only if larger than 1
                                return this.y > 1 ? '<b>' + this.point.name + ':</b> ' + this.y + '%' : null;
                            }
                        }
                    }]
            });
        });
    </script>
{/block}
