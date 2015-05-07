<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-27 00:26:07
         compiled from "/var/www/ion_auth/application/views/layout/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34649193054ef572f8254c1-24496022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '153fa0754530910361a2a3e6505919f4fd16edbe' => 
    array (
      0 => '/var/www/ion_auth/application/views/layout/menu.tpl',
      1 => 1424969497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34649193054ef572f8254c1-24496022',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ef572f835c15_38360069',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ef572f835c15_38360069')) {function content_54ef572f835c15_38360069($_smarty_tpl) {?><!-- BEGIN Sidebar -->
<div id="sidebar" class="navbar-collapse collapse">
<!-- BEGIN Navlist -->
<ul class="nav nav-list">
<!-- BEGIN Search Form -->
<li>
<form target="#" method="GET" class="search-form">
<span class="search-pan">
<button type="submit">
<i class="fa fa-search"></i>
</button>
<input type="text" name="search" placeholder="Search ..." autocomplete="off" />
</span>
</form>
</li>
<!-- END Search Form -->
<li class="active">
<a href="index.html">
<i class="fa fa-dashboard"></i>
<span>Dashboard</span>
</a>
</li>

<li>
<a href="typography.html">
<i class="fa fa-text-width"></i>
<span>Typography</span>
</a>
</li>

<li>
<a href="#" class="dropdown-toggle">
<i class="fa fa-desktop"></i>
<span>UI Elements</span>
<b class="arrow fa fa-angle-right"></b>
</a>

<!-- BEGIN Submenu -->
<ul class="submenu">
<li><a href="ui_general.html">General</a></li>
<li><a href="ui_button.html">Button</a></li>
<li><a href="ui_tabs.html">Tab & Accordion</a></li>
<li><a href="ui_slider.html">Slider</a></li>
<li><a href="ui_tile.html">Tile</a></li>
<li><a href="ui_timeline.html">Timeline</a></li>
<li><a href="ui_chart.html">Chart</a></li>
<li><a href="ui_message.html">Conversation</a></li>
<li><a href="ui_horizontal-menu.html">Horizontal Menu</a></li>
<li><a href="ui_icon.html">Icon</a></li>
</ul>
<!-- END Submenu -->
</li>

<li>
<a href="#" class="dropdown-toggle">
<i class="fa fa-edit"></i>
<span>Forms</span>
<b class="arrow fa fa-angle-right"></b>
</a>

<!-- BEGIN Submenu -->
<ul class="submenu">
<li><a href="form_layout.html">Layout</a></li>
<li><a href="form_component.html">Component</a></li>
<li><a href="form_wizard.html">Wizard</a></li>
<li><a href="form_validation.html">Validation</a></li>
</ul>
<!-- END Submenu -->
</li>

<li>
<a href="#" class="dropdown-toggle">
<i class="fa fa-list"></i>
<span>Tables</span>
<b class="arrow fa fa-angle-right"></b>
</a>

<!-- BEGIN Submenu -->
<ul class="submenu">
<li><a href="table_basic.html">Basic</a></li>
<li><a href="table_advance.html">Advance</a></li>
<li><a href="table_dynamic.html">Dynamic</a></li>
</ul>
<!-- END Submenu -->
</li>

<li>
<a href="#" class="dropdown-toggle">
<i class="fa fa-globe"></i>
<span>Maps</span>
<b class="arrow fa fa-angle-right"></b>
</a>

<!-- BEGIN Submenu -->
<ul class="submenu">
<li><a href="map_google.html">Google Maps</a></li>
<li><a href="map_vector.html">Vector Maps</a></li>
</ul>
<!-- END Submenu -->
</li>

<li>
<a href="box.html">
<i class="fa fa-list-alt"></i>
<span>Box</span>
</a>
</li>

<li>
<a href="calendar.html">
<i class="fa fa-calendar"></i>
<span>Calendar</span>
</a>
</li>

<li>
<a href="gallery.html">
<i class="fa fa-picture-o"></i>
<span>Gallery</span>
</a>
</li>

<li>
<a href="grid.html">
<i class="fa fa-th"></i>
<span>Griding System</span>
</a>
</li>

<li>
<a href="#" class="dropdown-toggle">
<i class="fa fa-file-text-o"></i>
<span>Sample Pages</span>
<b class="arrow fa fa-angle-right"></b>
</a>

<!-- BEGIN Submenu -->
<ul class="submenu">
<li><a href="extra_login.html">Login &amp; Register</a></li>
<li><span>Email</span>
<ul>
<li><a href="extra_mail-list.html">Inbox</a></li>
<li><a href="extra_mail-msg.html">Mail Thread</a></li>
<li><a href="extra_mail-compose.html">Compose</a></li>
</ul>
</li>
<li><a href="extra_profile.html">User Profile</a></li>
<li><a href="extra_invoice.html">Invoice</a></li>
<li><a href="extra_search.html">Search Results</a></li>
</ul>
<!-- END Submenu -->
</li>

<li>
<a href="#" class="dropdown-toggle">
<i class="fa fa-file"></i>
<span>Other Pages</span>
<b class="arrow fa fa-angle-right"></b>
</a>

<!-- BEGIN Submenu -->
<ul class="submenu">
<li><a href="more_blank.html">Blank Page</a></li>
<li><a href="more_full-width.html">Full Width Page</a></li>
<li><span>Errors</span>
<ul>
<li><a href="more_error-404.html">Error 404</a></li>
<li><a href="more_error-500.html">Error 500</a></li>
</ul>
</li>
<li><a href="more_set-skin.html">Skin</a></li>
<li><a href="more_set-sidebar-navbar-color.html">Sidebar &amp; Navbar</a></li>
<li><a href="more_sidebar-collapsed.html">Collapsed Sidebar</a></li>
</ul>
<!-- END Submenu -->
</li>
</ul>
<!-- END Navlist -->

<!-- BEGIN Sidebar Collapse Button -->
<div id="sidebar-collapse" class="visible-lg">
<i class="fa fa-angle-double-left"></i>
</div>
<!-- END Sidebar Collapse Button -->
</div>
<!-- END Sidebar --><?php }} ?>
