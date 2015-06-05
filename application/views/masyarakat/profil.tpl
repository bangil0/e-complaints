{extends file='layout/master.tpl'}

{block name="breadcrumb"}
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Profil</li>
    </ol>
{/block}

{block name="content"}
    <div class="col-lg-8">
        <!-- start:state overview -->
        <div class="panel panel-body">
            <div class="table-responsive">
                <h3 align="left">Profil Identitas Diri</h3>
                <br>
                <table class="table table-striped">
                    {foreach $data.identitas->result() as $row}
                        <tr>
                            <td rowspan="8" width="200">
                                {if $row->photo eq ""}
                                    <img src="{base_url()}assets/img/avatar-mini.jpg" class="img-center img-thumbnail img-responsive">
                                {else}
                                    <img src="{base_url()}assets/img/{$row->photo}" class="img-center img-thumbnail img-responsive">
                                {/if}
                            </td>
                            <td><b>Username</b></td>
                            <td>{$row->username}</td>
                        </tr>
                        <tr>
                            <td><b>Nama</b></td>
                            <td>{$row->Nama}</td>
                        </tr>
                        <tr>
                            <td><b>Email</b></td>
                            <td>{$row->email}</td>
                        </tr>
                        <tr>
                            <td><b>Telepon</b></td>
                            <td>{$row->Telepon}</td>
                        </tr>
                        <tr>
                            <td><b>Jenis Kelamin</b></td>
                            <td>{$row->JenisKelamin}</td>
                        </tr>
                        <tr>
                            <td><b>Tanggal Lahir</b></td>
                            <td>{$row->TanggalLahir}</td>
                        </tr>
                        <tr>
                            <td><b>No Identitas</b></td>
                            <td>{$row->NoIdentitas}</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><a href="{site_url('masyarakat/profil/edit/')}/{$row->ID}" type="button" name="Edit" class="btn btn-warning"><span class="fa fa-user"></span> Edit Identitas Diri</a></td>
                        </tr>
                    {/foreach}
                </table>
            </div>
        </div>
    </div>
    {include file="masyarakat/widget_right.tpl"}
{/block}

{block name="addon_styles"}
    <link href="{base_url()}assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet">
    <link rel="stylesheet" href="{base_url()}assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{base_url()}assets/css/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="{base_url()}assets/css/owl.transitions.css">
{/block}
