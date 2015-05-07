<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-01 02:39:31
         compiled from "application\views\layout\menu_pembimbing.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2322654f217fc833183-86402460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '364caf757490f5a4acb3b83d01dfd3987ea17a82' => 
    array (
      0 => 'application\\views\\layout\\menu_pembimbing.tpl',
      1 => 1425152370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2322654f217fc833183-86402460',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f217fc84a882_23278636',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f217fc84a882_23278636')) {function content_54f217fc84a882_23278636($_smarty_tpl) {?><!-- BEGIN Navlist -->
	<ul class="nav nav-list">
		<li class="active">
			<a href="<?php echo base_url();?>
">
				<i class="fa fa-home"></i>
				<span>Beranda</span>
			</a>
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
			<a href="#" class="dropdown-toggle">
				<i class="fa fa-list"></i>
				<span>Pendaftaran Bimbingan</span>
				<b class="arrow fa fa-angle-right"></b>
			</a>

			<!-- BEGIN Submenu -->
			<ul class="submenu">
				<li><a href="#">Belum Verifikasi</a></li>
				<li><a href="#">Sudah Verifikasi</a></li>
			</ul>
			<!-- END Submenu -->
		</li>
		<li>
			<a href="#" class="dropdown-toggle">
				<i class="fa fa-list"></i>
				<span>Mahasiswa Bimbingan Aktif</span>
				<b class="arrow fa fa-angle-right"></b>
			</a>

			<!-- BEGIN Submenu -->
			<ul class="submenu">
				<li><a href="#">Absensi Mahasiswa</a></li>
				<li><a href="#">Laporan Mahasiswa</a></li>
				<li><a href="#">Log Mahasiswa</a></li>
				<li><a href="#">Nilai Mahasiswa</a></li>
				<li><a href="#">Penilaian Mahasiswa</a></li>
			</ul>
			<!-- END Submenu -->
		</li>
		<li>
			<a href="<?php echo base_url();?>
">
				<i class="fa fa-home"></i>
				<span>Surat Keterangan</span>
			</a>
		</li>
	</ul>
	<!-- END Navlist --><?php }} ?>
