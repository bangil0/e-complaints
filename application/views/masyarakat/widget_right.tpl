{foreach $data.identitas->result() as $row}
    <div class="col-lg-4">
        <!-- start:user info -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <header class="panel-title">
                    <div class="text-center">
                        <strong>
                            {if $row->Nama eq ""}
                                Belum Ada Nama
                            {else}
                                {$row->Nama}
                            {/if}
                        </strong>
                    </div>
                </header>
            </div>
            <div class="panel-body">
                <div class="text-center" id="author">
                    {if $row->photo eq ""}
                        <img src="{base_url()}assets/img/avatar-mini.jpg" class="img-center img-thumbnail img-responsive">
                    {else}
                        <img src="{base_url()}assets/img/{$row->photo}" class="img-center img-thumbnail img-responsive">
                    {/if}
                    <h3>{$row->Nama}</h3>
                    <small class="label label-info">Terakhir login {date('h:m', $user->last_login)}</small>
                    <p>Masyarakat</p>
                    <p class="sosmed-author">
                        <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus"></i></a>
                        <a href="#"><i class="fa fa-linkedin" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin"></i></a>
                    </p>
                </div>
            </div>
        </div>
        <!-- end:user info -->
        <!-- start:user info table -->
        <section class="panel">
            <div class="panel-body">
                <a href="#" class="task-thumb">
                    {if $row->photo eq ""}
                        <img src="{base_url()}assets/img/avatar-mini.jpg" class="img-center img-thumbnail img-responsive">
                    {else}
                        <img src="{base_url()}assets/img/{$row->photo}" class="img-center img-thumbnail img-responsive">
                    {/if}
                    
                </a>
                <div class="task-thumb-details">
                    <h1><a href="#">{$row->Nama}</a></h1>
                    <p>({$row->email})</p>
                </div>
            </div>
            <table class="table table-hover personal-task">
                <tbody>
                    <tr>
                        <td>
                            <i class=" fa fa-tasks"></i>
                        </td>
                        <td><label class="label label-warning">Belum Ditanggapi</label></td>
                        <td> <label class="label label-warning">{$data.jumlah_keluhan.belum}</label></td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fa fa-exclamation-triangle"></i>
                        </td>
                        <td><label class="label label-default">Proses Ditanggapi</label></td>
                        <td> <label class="label label-default">{$data.jumlah_keluhan.proses}</label></td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fa fa-envelope"></i>
                        </td>
                        <td><label class="label label-info">Sudah Ditanggapi</label></td>
                        <td> <label class="label label-info">{$data.jumlah_keluhan.selesai}</label></td>
                    </tr>
                </tbody>
            </table>
        </section>
        <!-- end:user info table -->
    </div>
{/foreach}