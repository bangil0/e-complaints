<div class="navbar-header">
    <button type="button" class="btn-block btn-drop navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <strong>MENU</strong>
    </button>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
        <li class="active">
            <a href="{base_url()}pemerintah">
                <div class="text-center">
                    <i class="fa fa-home fa-3x"></i><br>
                    Beranda
                </div>
            </a>
        </li>
        <li class="dropdown">
            <a href="{site_url('pemerintah/keluhan')}">
                <div class="text-center">
                    <i class="fa fa-archive fa-3x"></i><br>
                    Keluhan Masuk
                </div>
            </a>
        </li>
        <li class="dropdown">
            <a href="{site_url('pemerintah/history')}">
                <div class="text-center">
                    <i class="fa fa-history fa-3x"></i><br>
                    History Tanggapan 
                </div>
            </a>
        </li>

        <li class="dropdown">
            <a href="{site_url('pemerintah/statistik')}">
                <div class="text-center">
                    <i class="fa fa-bar-chart-o fa-3x"></i><br>
                    Statistik
                </div>
            </a>
        </li>
        <li>
            <a href="{site_url('pemerintah/kebijakan')}">
                <div class="text-center">
                    <i class="fa fa-exclamation-circle fa-3x"></i><br>
                    Kebijakan
                </div>
            </a>
        </li>

    </ul>
</div><!-- /.navbar-collapse -->