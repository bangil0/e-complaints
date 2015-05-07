<!-- BEGIN Navlist -->
<ul class="nav nav-list">
    <li class="active">
        <a href="{base_url()}">
            <i class="fa fa-home"></i>
            <span>Beranda</span>
        </a>
    </li>
    <li {if ($data.meta.menu.menu_utama == '1')} class="active" {/if}>
        <a href="#" class="dropdown-toggle">
            <i class="fa fa-th-list"></i>
            <span>Menu Utama</span>
            <b class="arrow fa fa-angle-right"></b>
        </a>
        <!-- BEGIN Submenu -->
        <ul class="submenu">
            <li {if ($data.meta.sub_menu == 'halaman')} class="active"{/if}>
                <a href="{base_url()}administrator/halaman">Halaman</a>
            </li>
            <li {if ($data.meta.sub_menu == 'tatacara')} class="active" {/if}>
                <a href="{base_url()}administrator/tatacara">Tata Cara</a></li>
            <li {if ($data.meta.sub_menu == 'kontakkami')} class="active" {/if}>
                <a href="{base_url()}administrator/kontakkami">Kontak Kami</a></li>
        </ul>
        <!-- END Submenu -->
    </li>
    <li {if ($data.meta.menu.menu_berita == '1')} class="active" {/if}>
        <a href="#" class="dropdown-toggle">
            <i class="fa fa-th-list"></i>
            <span>Informasi Berita</span>
            <b class="arrow fa fa-angle-right"></b>
        </a>
        <!-- BEGIN Submenu -->
        <ul class="submenu">
            <li {if ($data.meta.sub_menu == 'berita')} class="active"{/if}>
                <a href="{base_url()}administrator/berita">Berita</a>
            </li>
            <li {if ($data.meta.sub_menu == 'kategori_berita')} class="active" {/if}>
                <a href="{base_url()}administrator/kategori_berita">Kategori Berita</a></li>
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
    <li {if ($data.meta.sub_menu == 'pengujian')} class="active" {/if}>
        <a href="{base_url()}administrator/pengujian">
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
    <li {if ($data.meta.menu.menu_pegawai == '1')} class="active" {/if}>
        <a href="#" class="dropdown-toggle">
            <i class="fa fa-list"></i>
            <span>Data Pegawai</span>
            <b class="arrow fa fa-angle-right"></b>
        </a>

        <!-- BEGIN Submenu -->
        <ul class="submenu">
            <li {if ($data.meta.sub_menu == 'administrator')} class="active" {/if}><a href="{base_url()}administrator/data_administrator">Data Administrator</a></li>
            <li {if ($data.meta.sub_menu == 'bendahara')} class="active" {/if}><a href="{base_url()}administrator/data_bendahara">Data Bendahara</a></li>
            <li {if ($data.meta.sub_menu == 'operator')} class="active" {/if}><a href="{base_url()}administrator/data_operator">Data Operator</a></li>
            <li {if ($data.meta.sub_menu == 'pejabat')} class="active" {/if}><a href="{base_url()}administrator/data_pejabat">Data Pejabat</a></li>
            <li {if ($data.meta.sub_menu == 'pembimbing')} class="active" {/if}><a href="{base_url()}administrator/data_pembimbing">Data Pembimbing</a></li>
        </ul>
        <!-- END Submenu -->
    </li>
    <li {if ($data.meta.menu.menu_layanan == '1')} class="active" {/if}>
        <a href="#" class="dropdown-toggle">
            <i class="fa fa-list"></i>
            <span>Pelayanan PKL/TA</span>
            <b class="arrow fa fa-angle-right"></b>
        </a>

        <!-- BEGIN Submenu -->
        <ul class="submenu">
            <li {if ($data.meta.sub_menu == 'pemohon')} class="active" {/if}><a href="{base_url()}administrator/pemohon">Data Pemohon</a></li>
            <li {if ($data.meta.sub_menu == 'kuesioner')} class="active" {/if}><a href="{base_url()}administrator/kuesioner">Kuesioner Mahasiswa</a></li>
            <li {if ($data.meta.sub_menu == 'layanan_internet')} class="active" {/if}><a href="{base_url()}administrator/internet">Layanan Internet</a></li>
            <li {if ($data.meta.sub_menu == 'nametag')} class="active" {/if}><a href="{base_url()}administrator/nametag">Name Tag</a></li>
            <li {if ($data.meta.sub_menu == 'nilai_mahasiswa')} class="active" {/if}><a href="{base_url()}administrator/nilai">Nilai Mahasiswa</a></li>
            <li {if ($data.meta.sub_menu == 'surat_jawaban')} class="active" {/if}><a href="{base_url()}administrator/surat">Surat Jawaban</a></li>
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
<!-- END Navlist -->