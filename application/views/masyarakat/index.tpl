{extends file='layout/master.tpl'}
{block name="content"}
    <div class="wrap">  		 
        <div class="column_left" style="padding-right:60px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-body">
                        <h3 align="left"><img src="{base_url()}assets/images/keluhan2.png" alt=""> Ajukan Keluhan Anda</h3>
                        <br>
                        <form class="form-horizontal" action="{site_url('masyarakat/insert')}" method="post">
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
                                    <label><input type="radio" name="rdtingkat" value="1">Pemerintah KOTA/KABUPATEN</label>
                                    <label><input type="radio" name="rdtingkat" value="2">Pemerintah PROVINSI</label><br>
                                    <label><input type="radio" name="rdtingkat" value="3">Pemerintah PUSAT</label>
                                </div>
                            </div>
                            <div class="col-md-6" style="top: 10px;">
                                <label>Pilih Kota/Kabupaten, Provinsi, Pusat</label>
                                <div class="dropdown">
                                    <select class="form-control" name="kota">
                                        <option>-- Pilih Kota/Kabupaten --</option>
                                        {foreach $data.kota->result() as $row}
                                            <option value="{$row->ID}">{$row->Nama}</option>
                                        {/foreach}
                                    </select>
                                </div>
                                <div class="dropdown" style="top:10px;">
                                    <select class="form-control" name="provinsi">
                                        <option>-- Pilih Provinsi --</option>
                                        {foreach $data.provinsi->result() as $row}
                                            <option value="{$row->ID}">{$row->Nama}</option>
                                        {/foreach}
                                    </select>
                                </div>
                                <div class="dropdown" style="top:20px;">
                                    <select class="form-control" name="pusat">
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
                                    <button type="submit" class="btn btn-danger btn-lg">Laporkan Keluhan</button>
                                </div>
                            </div>
                        </form>
                    </div>		
                </div>
            </div>
                                    <div class="menu_box">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel panel-body">
                                                    <div id="container2" style="width: 100%;height: 400px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
            <div class="menu_box">
                <h3>Recent Update</h3>
                <div class="row">
                    <div class="col-md-12">
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
                    </div>
                </div>
            </div>
        </div>
        <div class="column_right">
            <div class="column_middle_grid1">
                <div class="profile_picture">
                    <a href=""><img src="{base_url()}assets/images/izul.png" alt="">	</a>		         
                    <div class="profile_picture_name">
                        <h2>Aizul Fadin </h2>
                        <p>Jangan menyerah atas impianmu. Impian memberimu tujuan hidup</p>
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
    <script src="http://code.highcharts.com/highcharts.js"></script>    
{/block}

{block name="addon_scripts"}
    <script type="text/javascript">
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
                                name: 'Firefox versions',
                                categories: ['Firefox 2.0', 'Firefox 3.0', 'Firefox 3.5', 'Firefox 3.6', 'Firefox 4.0'],
                                data: [0.20, 0.83, 1.58, 13.12, 5.43],
                                color: colors[1]
                            }
                        }, {
                            y: 11.94,
                            color: colors[2],
                            drilldown: {
                                name: 'Chrome versions',
                                categories: ['Chrome 5.0', 'Chrome 6.0', 'Chrome 7.0', 'Chrome 8.0', 'Chrome 9.0',
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
                    i,
                    j,
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
                    text: 'Keluhan berbagai Kategori'
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