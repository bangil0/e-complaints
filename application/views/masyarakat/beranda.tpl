{extends file='layout/master.tpl'}
{block name="content"}
    <div class="wrap">  		 
            <div class="column_left" style="padding-right:60px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-body">
                            <table>
                                <tr>
                                    <td width=10%> &nbsp; </td>
                                    <td width=10%><i><img src="{base_url()}assets/images/keluhan2.png" alt="" /></i> </td>
                                    <td width=4%> &nbsp; </td>
                                    <td><h3 align="left">Ajukan Keluhan Anda</h3> </td>

                                </tr>
                            </table>
                            <br>
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <textarea class="form-control" placeholder="Apa keluhan anda ?"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-5">
                                        <div class="dropdown">
                                            <select class="form-control" name="kategori_keluhan">
                                                <option>-- PILIH KATEGORI --</option>
                                                <option>A</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <table>
                                    <tr>
                                        <td width=5%>&nbsp;</td>
                                        <td width=40%>
                                            <div class="radio">
                                                <label><input type="radio" name="rdPst">Pemerintah Pusat</label>
                                            </div>
                                        </td>
                                        <td width=5%>&nbsp;</td>
                                        <td width=40%><select class="form-control" name="kategori_keluhan">
                                                <option>-- PILIH Lembaga Pemerintah --</option>
                                                <option>A</option>
                                                <option>B</option>
                                                <option>C</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td width=5%>&nbsp;</td>
                                        <td width=40%>
                                            <div class="radio">
                                                <label><input type="radio" name="rdProv">Pemerintah Provinsi</label>
                                            </div>
                                        </td>
                                        <td width=5%>&nbsp;</td>
                                        <td width=40%><select class="form-control" name="kategori_keluhan">
                                                <option>-- PILIH PROVINSI --</option>
                                                <option>A</option>
                                                <option>B</option>
                                                <option>C</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td width=5%>&nbsp;</td>
                                        <td width=40%>
                                            <div class="radio">
                                                <label><input type="radio" name="rdKota">Pemerintah KOTA/KABUPATEN</label>
                                            </div>
                                        </td>
                                        <td width=5%>&nbsp;</td>
                                        <td width=40%><select class="form-control" name="kategori_keluhan">
                                                <option>-- PILIH KOTA/KABUPATEN --</option>
                                                <option>A</option>
                                                <option>B</option>
                                                <option>C</option>
                                            </select></td>
                                    </tr>
                                </table>
                                <div class="form-group">
                                    <table>
                                        <tr>
                                            <td width=10%> &nbsp; </td>
                                            <td width=90%> <label for="exampleInputFile">Unggah Konten Pendukung</label> </td>
                                        </tr>
                                        <tr>
                                            <td width=10%> &nbsp; </td>
                                            <td width=90%> <input type="file" id="exampleInputFile"> </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="form-group" align="center">
                                    <button type="button" class="btn btn-danger btn-lg">Laporkan</button>
                                </div>
                            </form>


                        </div>		

                    </div>

                </div>
                <br><br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-body">
                            <h3>Keluhan dan Tanggapan</h3>
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">Keluahan</a></li>
                                <li><a href="#profile" data-toggle="tab">Tanggapan</a></li>
                                <li><a href="#messages" data-toggle="tab">Messages</a></li>
                                <li><a href="#settings" data-toggle="tab">Settings</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home">...</div>
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
                <div class="menu_box">
                    <h3>Menu Box</h3>
                    <div class="menu_box_list">
                        <ul>
                            <li><a href="#" class="messages"><span>Messages</span><label class="digits">24</label><div class="clear"></div></a></li>
                            <li class="active"><a href="#" class="invites"><span>Invites</span><label class="digits active">3</label><div class="clear"></div></a></li>
                            <li><a href="#" class="events"><span>Events</span><label class="digits">5</label><div class="clear"></div></a></li>
                            <li><a href="#" class="account_settings"><span>Account Settings</span></a></li>
                            <li><a href="#" class="statistics"><span>Statistics</span></a></li>						  	
                        </ul>
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
                <div class="column_right_grid">
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
                </div>
            </div>
            <div class="clear"></div>
        </div>
{/block}