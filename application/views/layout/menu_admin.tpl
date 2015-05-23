<div class="navbar-header">
    <button type="button" class="btn-block btn-drop navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <strong>MENU</strong>
    </button>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
        <li class="active">
            <a href="{site_url('administrator')}">
                <div class="text-center">
                    <i class="fa fa-dashboard fa-3x"></i><br>
                    Beranda
                </div>
            </a>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <div class="text-center">
                    <i class="fa fa-laptop fa-3x"></i><br>
                    Akun Pemerintah <span class="caret"></span>
                </div>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="{site_url('administrator/pemerintahkota')}"><i class="fa fa-lemon-o"></i> Pemerintah Kota</a></li>
                <li><a href="{site_url('administrator/pemerintahprovinsi')}"><i class="fa fa-puzzle-piece"></i> Pemerintah Provinsi</a></li>
                <li><a href="{site_url('administrator/pemerintahpusat')}"><i class="fa fa-file"></i> Pemerintah Pusat</a></li>
            </ul>
        </li>
        <li>
            <a href="{site_url('administrator/user_masyarakat')}">
                <div class="text-center">
                    <i class="fa fa-location-arrow fa-3x"></i><br>
                    Akun Masyarakat
                </div>
            </a>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <div class="text-center">
                    <i class="fa fa-list fa-3x"></i><br>
                    Tingkatan Daerah <span class="caret"></span>
                </div>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="{site_url('administrator/tingkatkota')}"><i class="fa fa-list-alt"></i> Tingkat Kota</a></li>
                <li><a href="{site_url('administrator/tingkatprovinsi')}"><i class="fa fa-list-ul"></i> Tingkat Provinsi</a></li>
                <li><a href="{site_url('administrator/tingkatpusat')}"><i class="fa fa-columns"></i> Tingkat Pusat</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <div class="text-center">
                    <i class="fa fa-folder-open fa-3x"></i><br>
                    Complaint <span class="caret"></span>
                </div>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="{site_url('administrator/datakeluhan')}"><i class="fa fa-table"></i> Data Keluhan</a></li>
                <li><a href="{site_url('administrator/datatanggapan')}"><i class="fa fa-table"></i> Data Tanggapan</a></li>
                <li><a href="{site_url('administrator/datakategori')}"><i class="fa fa-table"></i> Data Kategori</a></li>
            </ul>
        </li>
        <li>
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <div class="text-center">
                    <i class="fa fa-bar-chart-o fa-3x"></i><br>
                    Report & Graph <span class="caret"></span>
                </div>
            </a>
        </li>
    </ul>
</div><!-- /.navbar-collapse -->