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
                <h3>KELUHAN DAN TANGGAPAN</h3>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">Keluahan</a></li>
                                <li><a href="#profile" data-toggle="tab">Tanggapan</a></li>
                                <li><a href="#messages" data-toggle="tab">Messages</a></li>
                                <li><a href="#settings" data-toggle="tab">Settings</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home">
                                    {foreach $data.keluhan_terkini->result() as $keluhan}
                                        <h1>{$keluhan->UserID}</h1>
                                        <h3>{$keluhan->IsiKeluhan}</h3>
                                    {/foreach}
                                </div>
                                <div class="tab-pane" id="profile">...
                                    <input type="text" name="name" required>
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
                        <p>Jangan menyerah atas impianmu. Impian memberimu tujuan hidup. Ingatlah, bahwa sukses bukan kunci utama kebahagiaan. Semangat! </p>
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
            <!--d<iv class="column_right_grid">
                <div class="newsletter">
                    <h3>Join the newsletter</h3>
                    <form>
                        <span>
                            <i><img src="{base_url()}assets/images/mail.png" alt="" /></i>
                            <input type="text" value="Enter your email" onfocus="this.value = '';" onblur="if (this.value == '') {
                                        this.value = 'Enter your email';
                                    }">
                        </span>			 	    
                        <input type="submit" class="my_button" value="Subscribe">
                    </form>
                </div>
            </div>
            <div class="column_right_grid downloading_uploading">
                <ul>
                    <li>                              
                        <div class="progress">
                            <div class="progress-bar" style="width:81%"> </div>
                        </div>
                        <div class="clearfix">
                            <p class="downloading"> <i><img src="{base_url()}assets/images/download.png" alt="" /></i> Downloading...</p>
                            <p class="percentage">81<em>%</em></p>
                            <div class="clear"></div>
                        </div>
                    </li>
                    <li>                              
                        <div class="progress">
                            <div class="progress-bar uploading" style="width:43%"> </div>
                        </div>
                        <div class="clearfix">
                            <p class="downloading"><i><img src="{base_url()}assets/images/upload.png" alt="" /></i> Uploading...</p>
                            <p class="percentage">43<em>%</em></p>
                            <div class="clear"></div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="column_right_grid date_events">
                <h3><a href="#" id="slide_prev"><img src="{base_url()}assets/images/arrow-left.png" alt="" /></a> Wednesday <a href="#" id="slide_next"><img src="images/arrow-right.png" alt="" /></a></h3>
                <ul id="slide" class="event_dates">					            
                    <li>26</li>
                    <li>25</li>
                    <li>24</li>
                    <li>23</li>
                    <li>22</li>
                    <li>21</li>
                    <li>20</li>
                    <li>19</li>
                    <li>18</li>
                    <li>17</li>
                    <li>16</li>
                    <li>15</li>
                    <li>14</li>
                    <li>13</li>
                    <li>12</li>
                    <li>11</li>
                    <li>10</li>
                    <li>9</li>
                    <li>8</li>
                    <li>7</li>
                    <li>6</li>
                    <li>5</li>
                    <li>4</li>
                    <li>3</li>
                    <li>2</li>
                    <li>1</li>
                    <li>31</li>
                    <li>30</li>
                    <li>29</li>
                    <li>28</li>
                    <li>27</li>
                </ul>
                <div class="button"><a href="#">Add Event</a></div>											 				
                <script type="text/javascript">
                    $(function () {
                        $('#slide').ulslide({
                            effect: {
                                type: 'carousel', // slide or fade
                                axis: 'x', // x, y
                                showCount: 1
                            },
                            nextButton: '#slide_next',
                            prevButton: '#slide_prev',
                            duration: 800,
                            /*autoslide: 2000,*/
                            easing: 'easeOutBounce'
                        });
                    });
                </script>
            </div>
            <div class="column_right_grid calender">
                <div class="cal1"> </div>
            </div>-->
        </div>
        <div class="clear"></div>
    </div>
{/block}
