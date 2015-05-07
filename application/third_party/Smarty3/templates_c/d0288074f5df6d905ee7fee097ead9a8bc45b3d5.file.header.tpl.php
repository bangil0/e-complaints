<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-02 13:57:39
         compiled from "application\views\layout\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2852554473c54c0f47-68838834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0288074f5df6d905ee7fee097ead9a8bc45b3d5' => 
    array (
      0 => 'application\\views\\layout\\header.tpl',
      1 => 1430549831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2852554473c54c0f47-68838834',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554473c54d47d3_57173697',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554473c54d47d3_57173697')) {function content_554473c54d47d3_57173697($_smarty_tpl) {?><div class="wrap">	 
        <div class="header">
            <div class="header_top">
                <div class="menu">
                    <a class="toggleMenu" href="#"><img src="<?php echo base_url();?>
assets/images/nav.png" alt="" /></a>
                    <ul class="nav">
                        <li class="active"><a href="#"><i><img src="<?php echo base_url();?>
assets/images/home.png" alt="" /></i>Home</a></li>
                        <li><a href="#"><i><img src="<?php echo base_url();?>
assets/images/keluhan2.png" alt="" /></i>Keluhan<span class="messages">5</span></a></li>
                        <li><a href="#"><i><img src="<?php echo base_url();?>
assets/images/tracking_keluhan.png" alt="" /></i>Tracking Keluhan</a></li>
                        <li><a href="#"><i><img src="<?php echo base_url();?>
assets/images/statistics.png" alt="" /></i>Grafik Keluhan</a></li>
                        <div class="clear"></div>
                    </ul>
                    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
assets/js/responsive-nav.js"><?php echo '</script'; ?>
>
                </div>	
                <div class="profile_details">
                    <div id="loginContainer">
                        <a id="loginButton" class=""><span>Aizul Fadin</span></a>   
                        <div id="loginBox">                
                            <form id="loginForm">
                                <fieldset id="body">
                                    <div class="user-info">
                                        <h4>Hello,<a href="#"> Aizul Fadin</a></h4>
                                        <ul>
                                            <li class="profile active"><a href="#">Profile </a></li>
                                            <li class="logout"><a href="<?php echo base_url();?>
auth/logout"> Logout</a></li>
                                            <div class="clear"></div>		
                                        </ul>
                                    </div>			                            
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="profile_img">	
                        <a href="#"><img src="<?php echo base_url();?>
assets/images/izulIcon.png" alt="" />	</a>
                    </div>		
                    <div class="clear"></div>		  	
                </div>	
                <div class="clear"></div>				 
            </div>
        </div>	  					     
    </div><?php }} ?>
