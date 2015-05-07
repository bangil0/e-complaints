<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-01 03:41:47
         compiled from "application\views\layout\menu_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1430054f214703ab206-96890163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09561e10f3e0e5cf68552b2d1cf4ae8a74f07051' => 
    array (
      0 => 'application\\views\\layout\\menu_admin.tpl',
      1 => 1425156099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1430054f214703ab206-96890163',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f214703bac13_18313263',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f214703bac13_18313263')) {function content_54f214703bac13_18313263($_smarty_tpl) {?><!-- BEGIN Navlist -->
	<ul class="nav nav-list">
		<li class="active">
			<a href="<?php echo base_url();?>
">
				<i class="fa fa-home"></i>
				<span>Beranda</span>
			</a>
		</li>

		<li <?php if (($_smarty_tpl->tpl_vars['data']->value['meta']['menu_utama']=='1')) {?>
				class="active"
			<?php }?>>
			<a href="#" class="dropdown-toggle">
				<i class="fa fa-th-list"></i>
					<span>Menu Utama</span>
				<b class="arrow fa fa-angle-right"></b>
			</a>

			<!-- BEGIN Submenu -->
			<ul class="submenu">
				<li <?php if (($_smarty_tpl->tpl_vars['data']->value['meta']['sub_menu']=='halaman')) {?> 
						class="active" 
					<?php }?>>
					<a href="<?php echo base_url();?>
administrator/halaman">Halaman</a></li>
				<li <?php if (($_smarty_tpl->tpl_vars['data']->value['meta']['sub_menu']=='tatacara')) {?> 
						class="active" 
					<?php }?>>
					<a href="<?php echo base_url();?>
administrator/tatacara">Tata Cara</a></li>
				<li <?php if (($_smarty_tpl->tpl_vars['data']->value['meta']['sub_menu']=='kontakkami')) {?> 
						class="active" 
					<?php }?>>
					<a href="<?php echo base_url();?>
administrator/kontakkami">Kontak Kami</a></li>
			</ul>
			<!-- END Submenu -->
		</li>

		<li>
			<a href="#" class="dropdown-toggle">
				<i class="fa fa-envelope"></i>
				<span>Kotak Pesan</span>
				<b class="arrow fa fa-angle-right"></b>
			</a>

			<!-- BEGIN Submenu -->
			<ul class="submenu">
			<li><a href="#">Buat Pesan</a></li>
			<li><a href="#">Pesan Masuk</a></li>
			<li><a href="#">Pesan Kotak Kami</a></li>
			<li><a href="#">Pesan Keluar</a></li>
			</ul>
		<!-- END Submenu -->
		</li>
		<li>
			<a href="#">
				<i class="fa fa-table fa-fw"></i>
				<span>Data Pengujian</span>
			</a>
		</li>
		<li>
			<a href="#">
				<i class="fa fa-table fa-fw"></i>
				<span>Data Kompetensi</span>
			</a>
		</li>
		<li>
			<a href="#" class="dropdown-toggle">
				<i class="fa fa-list"></i>
				<span>Data Pegawai</span>
				<b class="arrow fa fa-angle-right"></b>
			</a>

			<!-- BEGIN Submenu -->
			<ul class="submenu">
				<li><a href="#">Data Administrator</a></li>
				<li><a href="#">Data Bendahara</a></li>
				<li><a href="#">Data Operator</a></li>
				<li><a href="#">Data Pejabat</a></li>
				<li><a href="#">Data Pembimbing</a></li>
			</ul>
			<!-- END Submenu -->
		</li>
		<li>
			<a href="#" class="dropdown-toggle">
				<i class="fa fa-list"></i>
				<span>Pelayanan PKL/TA</span>
				<b class="arrow fa fa-angle-right"></b>
			</a>

			<!-- BEGIN Submenu -->
			<ul class="submenu">
				<li><a href="#">Data Pemohon</a></li>
				<li><a href="#">Kuesioner Mahasiswa</a></li>
				<li><a href="#">Layanan Internet</a></li>
				<li><a href="#">Name Tag</a></li>
				<li><a href="#">Nilai Mahasiswa</a></li>
				<li><a href="#">Surat Jawaban</a></li>
			</ul>
			<!-- END Submenu -->
		</li>
		<li>
			<a href="#" class="dropdown-toggle">
				<i class="fa fa-list"></i>
				<span>Pelayanan Pengujian</span>
				<b class="arrow fa fa-angle-right"></b>
			</a>

			<!-- BEGIN Submenu -->
			<ul class="submenu">
				<li><a href="#">Data Pemohon</a></li>
				<li><a href="#">Data Pengujian</a></li>
				<li><a href="#">Laporan Pengujian</a></li>
				<li><a href="#">Kuesioner</a></li>
			</ul>
			<!-- END Submenu -->
		</li>
	</ul>
	<!-- END Navlist --><?php }} ?>
