<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>E-Complaints</title>
        <meta name="description" content="E-Complaint Responsive Admin Templates" />
        <meta name="keywords" content="resposinve, admin dashboard, admin page, admin template" />
        <meta name="author" content="Candra Dwi Waskito" />
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" href="{base_url()}assets/css/font-awesome.min.css" />
        <link rel="stylesheet" href="{base_url()}assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="{base_url()}assets/css/bootstrap-reset.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{base_url()}assets/css/style.css">

        <!-- css hanya untuk di page ini saja -->
    {block name="addon_styles"}{/block}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- start:wrapper -->
    <div id="wrapper">
        <!-- Header Top -->
        {include file='layout/header-top.tpl'}

        <!-- start:header -->
            {include file='layout/header.tpl'}
        <!-- end:header -->

        <!-- start:main -->
        <div class="container">
            <div id="main">
                <!-- start:breadcrumb -->
            {block name="breadcrumb"}{/block}
            <!-- end:breadcrumb -->   

            <div class="row" id="home-content">
            {block name="content"}{/block}
        </div>
        <div class="row">
        {block name="content_tambahan"}{/block}
    </div>
</div>
</div>
<!-- end:main -->

<!-- start:footer -->
{include file='layout/footer.tpl'}
{include file='layout/footer-bottom.tpl'}
<!-- end:footer -->
</div>
<!-- end:wrapper -->

<!-- start:javascript -->
<!-- javascript default for all pages-->
<script src="{base_url()}assets/js/jquery-1.11.1.min.js"></script>
<script src="{base_url()}assets/js/bootstrap.min.js"></script>

<!-- javascript for Srikandi admin -->
<script src="{base_url()}assets/js/themes.js"></script>
<script src="{base_url()}assets/js/jquery.scrollTo.min.js"></script>
<script src="{base_url()}assets/js/jquery.nicescroll.js"></script>
<script src="{base_url()}assets/js/jquery.sparkline.js" type="text/javascript"></script>
<script class="include" type="text/javascript" src="{base_url()}assets/js/jquery.dcjqaccordion.2.7.min.js"></script>
<script src="{base_url()}assets/js/respond.min.js" ></script>
<!-- end:javascript -->

{block name="addon_scripts"}{/block}
</body>
</html>	