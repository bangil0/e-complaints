<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-01 22:24:14
         compiled from "application/views/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123283063055438f2a354ba5-83171398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47eff05f8e941ace49344ecbcc1ae9b382cc2787' => 
    array (
      0 => 'application/views/index.tpl',
      1 => 1430493848,
      2 => 'file',
    ),
    '5a0496d1be03a684617aa67f94e3776dac6262db' => 
    array (
      0 => 'application/views/layout/master.tpl',
      1 => 1430493692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123283063055438f2a354ba5-83171398',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55438f2a56a524_22288202',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55438f2a56a524_22288202')) {function content_55438f2a56a524_22288202($_smarty_tpl) {?><!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
    <title>E-Complains</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="<?php echo base_url();?>
assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?php echo base_url();?>
assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?php echo base_url();?>
assets/css/nav.css" rel="stylesheet" type="text/css" media="all"/>
    <link href='http://fonts.googleapis.com/css?family=Carrois+Gothic+SC' rel='stylesheet' type='text/css'>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
assets/js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
assets/js/login.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
assets/js/Chart.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
assets/js/jquery.easing.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
assets/js/jquery.ulslide.js"><?php echo '</script'; ?>
>
    <!----Calender -------->
    <link rel="stylesheet" href="<?php echo base_url();?>
assets/css/clndr.css" type="text/css" />
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/underscore-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src= "<?php echo base_url();?>
assets/js/moment-2.2.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/clndr.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/site.js"><?php echo '</script'; ?>
>
    <!----End Calender -------->
</head>
<body>			       
    <!-- Header -->
    <?php echo $_smarty_tpl->getSubTemplate ('layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="main">  
        
    <div class="wrap">  		 
        <div class="column_left">
            <div class="column_right_grid">
                <div class="newsletter">
                    <table>
                        <tr>
                            <td width=10st &nbsp; </td>
                            <td><h3 align="left">Ajukan Keluhan Anda</h3> </td>
                        </tr>
                    </table>

                    <form>
                        <span>
                            <i><img src="images/keluhan2.png" alt="" /></i>
                            <input type="text" value="Apa Keluhan Anda">			 
                        </span>	

                        <div class="dropdown">
                            <div class="col-md-5">
                                <select class="form-control" name="kategori_keluhan">
                                    <option>A</option>
                                    <option>B</option>
                                </select>
                            </div>
                        </div>

                        <br>
                        <br>

                        <button type="button" class="btn btn-default btn-danger">Laporkan</button>
                    </form>
                </div>

            </div>

            <br><br>



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
            <center>

                <div class="column_right_grid">
                    <div class="newsletter">
                        <h3>Join the newsletter</h3>
                        <form>
                            <span>
                                <i><img src="images/mail.png" alt="" /></i>
                                <input type="text" value="Enter your email" >
                            </span>			 	    
                            <input type="submit" class="my_button" value="Subscribe">
                        </form>
                    </div>
                </div>
                <div class="column_right_grid sign-in">
                    <div class="sign_in">
                        <h3>Sign in to your account</h3>
                        <form>
                            <span>
                                <i><img src="images/mail.png" alt="" /></i><input type="text" value="Enter your email" >
                            </span>
                            <span>
                                <i><img src="images/lock.png" alt="" /></i>
                                <input type="password" placeholder="password">
                            </span>
                            <input type="submit" class="my-button" value="Sign In">
                        </form>
                        <h4><a href="#">Forget Password?</a></h4>				   
                    </div>
                    <div class="signin_facebook">
                        <p><a href="#">  <i> <img src="images/facebook.png" alt="" /></i>Sign in with facebook</a></p>
                    </div>
                </div>
                <div class="column_right_grid downloading_uploading">
                    <ul>
                        <li>                              
                            <div class="progress">
                                <div class="progress-bar" style="width:81%"> </div>
                            </div>
                            <div class="clearfix">
                                <p class="downloading"> <i><img src="images/download.png" alt="" /></i> Downloading...</p>
                                <p class="percentage">81<em>%</em></p>
                                <div class="clear"></div>
                            </div>
                        </li>
                        <li>                              
                            <div class="progress">
                                <div class="progress-bar uploading" style="width:43%"> </div>
                            </div>
                            <div class="clearfix">
                                <p class="downloading"><i><img src="images/upload.png" alt="" /></i> Uploading...</p>
                                <p class="percentage">43<em>%</em></p>
                                <div class="clear"></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="column_right_grid date_events">
                    <h3><a href="#" id="slide_prev"><img src="images/arrow-left.png" alt="" /></a> Wednesday <a href="#" id="slide_next"><img src="images/arrow-right.png" alt="" /></a></h3>
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
                    <?php echo '<script'; ?>
 type="text/javascript">
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
                    <?php echo '</script'; ?>
>
                </div>
                <div class="column_right_grid calender">
                    <div class="cal1"> </div>
                </div>
            </center>
        </div>
        <div class="clear"></div>
    </div>

    </div>
    <div class="copy-right">
        <?php echo $_smarty_tpl->getSubTemplate ('layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>   
</body>
<!-- Addons Plugins -->


<!-- Addons Scripts -->

</html><?php }} ?>
