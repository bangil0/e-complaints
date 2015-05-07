<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-03 20:04:15
         compiled from "application\views\layout\menu_pemohon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1554754f605af57f406-67412453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7bd03bc523afc75ca0c09a10503e25608fbca24' => 
    array (
      0 => 'application\\views\\layout\\menu_pemohon.tpl',
      1 => 1425231262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1554754f605af57f406-67412453',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f605af7484f3_35459088',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f605af7484f3_35459088')) {function content_54f605af7484f3_35459088($_smarty_tpl) {?><!-- BEGIN Navlist -->
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
            <i class="fa fa-th-list"></i>
            <span>Menu Utama</span>
            <b class="arrow fa fa-angle-right"></b>
        </a>
        <!-- BEGIN Submenu -->
        <ul class="submenu">
            <li><a href="#">Halaman</a></li>
            <li><a href="#">Tata Cara</a></li>
            <li><a href="#">Kontak Kami</a></li>
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
