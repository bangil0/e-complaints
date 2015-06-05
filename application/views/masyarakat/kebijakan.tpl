{extends file='layout/master.tpl'}

{block name="breadcrumb"}
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Kebijakan</li>
    </ol>
{/block}

{block name="content"}
    <div class="col-lg-8">
        <!-- start:state overview -->
        <div class="border-head">
            <h3><strong> Kebijakan </strong> Pemerintah</h3>
        </div>
        <div class="panel panel-primary">
            <div class="panel-primary panel-drop">
                <div class="panel-heading">
                    <header class="panel-title">
                        <h2><b>Survei mengenai KPK - Polri</b></h2>
                    </header>
                    <div style="color: #39B6AE;font-size:10pt;">
                        2015-06-04 10:42:36BelumPendidikanKabupaten Tasikmalaya
                    </div>
                </div>
                <div class="panel-body">
                    Pada 20 Februari 2015, Presiden telah melantik 3 Pelaksana Tugas (Plt) Pimpinan KPK. Ketiga nama tersebut adalah Taufiequrrahman Ruki (Purnawirawan Polri, Mantan Ketua KPK), Indriyanto Seno Adjie (Praktisi Hukum, Guru Besar Hukum Pidana Universitas Krisnadwipayana), dan Johan Budi S.P. (Deputi Penindakan/Juru Bicara KPK). 

                    Di sisi lain, Presiden juga telah menarik pengusulan Komjen Budi Gunawan sebagai calon Kapolri dan mengajukan penggantinya yaitu Komjen Badrodin Haiti.

                    Pertanyaan:


                    1. Bagaimana pandangan anda mengenai keputusan Presiden untuk tidak melantik Komjen Budi Gunawan sebagai Kapolri?

                    A. Setuju
                    B. Tidak Setuju


                    2. Apakah anda optimis Komjen Badrodin Haiti (Calon Kapolri) dapat membawa Polri menjadi lebih baik?

                    A. Optimis
                    B. Pesimis
                    C. Tidak Tahu


                    3. Bagaimana pandangan anda mengenai figur tiga Plt. Pimpinan KPK yang baru dilantik Presiden?

                    A. Tepat
                    B. Tidak Tepat
                    C. Tidak Tahu


                    4. Apakah anda optimis Plt. Pimpinan KPK dapat membawa KPK menjadi lebih baik?

                    A. Optimis
                    B. Pesimis
                    C. Tidak Tahu


                    5. Apakah penunjukan Calon Kapolri baru dan pengangkatan Plt. Pimpinan KPK dapat meredam konflik KPK - Polri?

                    A. Ya
                    B. Tidak
                    C. Ragu-ragu


                    Contoh Jawaban:
                    1. A
                    2. B
                    3. A
                    4. A
                    5. B
                </div>
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-primary panel-drop">
                <div class="panel-heading">
                    <header class="panel-title">
                        <h2><b>Survei Layanan Dasar Publik (LDP) - Pertanahan (1)</b></h2>
                    </header>
                    <div style="color: #39B6AE;font-size:10pt;">
                        2015-06-04 10:42:36BelumPendidikanKabupaten Tasikmalaya
                    </div>
                </div>
                <div class="panel-body">
                    "Survei UKP4. Apakah pernah mengecek sertipikat tanah/mengurus peralihan hak di BPN? Jika ya, di BPN mana dan berapa hari prosesnya?". Contoh jawaban: BPN1(spasi)Ya/PeralihanHak/Bogor/1 hari
                </div>
            </div>
        </div>
        <!-- end:state overview -->
    </div>
    {include file="masyarakat/widget_right.tpl"}
{/block}

{block name="addon_styles"}
    <link href="{base_url()}assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet">
    <link rel="stylesheet" href="{base_url()}assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{base_url()}assets/css/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="{base_url()}assets/css/owl.transitions.css">
{/block}

{block name="addon_scripts"}
    <script src="{base_url()}assets/js/owl.carousel.js" ></script>
    <script src="{base_url()}assets/js/jquery.customSelect.min.js" ></script>
{/block}
