<div class="header-top">
    <!-- start:navbar -->
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="container">
            <!-- start:navbar-header -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html"><i class="fa fa-cubes"></i> <strong>E-Com</strong>plaints<strong>.</strong></a>
            </div>

            {if $status eq true}
                <ul class="nav navbar-nav navbar-right top-menu">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="img/avatar1_small.jpg">
                            <span class="username">
                                {$user->username}
                            </span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <div class="log-arrow-up"></div>
                            <li><a href="#"><i class=" fa fa-male"></i>Profil</a></li>
                            <li><a href="#"><i class="fa fa-wrench"></i> Pengaturan</a></li>
                            <li><a href="#"><i class="fa fa-book"></i> Panduan</a></li>
                            <li><a href="{site_url('auth/logout')}"><i class="fa fa-sign-out"></i> Keluar</a></li>
                        </ul>
                    </li>
                </ul>
            {else}
                <div class="nav navbar-nav navbar-right top-menu">
                    <a style="color: white"> Masuk</a><a  style="color: white"> Registrasi?</a>
                </div>
            {/if}

        </div>
    </nav>
    <!-- end:navbar -->
</div>