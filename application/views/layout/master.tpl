<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
    <title>E-Complains</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="{base_url()}assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="{base_url()}assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="{base_url()}assets/css/nav.css" rel="stylesheet" type="text/css" media="all"/>
    <link href='http://fonts.googleapis.com/css?family=Carrois+Gothic+SC' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="{base_url()}assets/js/jquery.js"></script>
    <script type="text/javascript" src="{base_url()}assets/js/login.js"></script>
    <script type="text/javascript" src="{base_url()}assets/js/Chart.js"></script>
    <script type="text/javascript" src="{base_url()}assets/js/jquery.easing.js"></script>
    <script type="text/javascript" src="{base_url()}assets/js/jquery.ulslide.js"></script>
    <!----Calender -------->
    <link rel="stylesheet" href="{base_url()}assets/css/clndr.css" type="text/css" />
    <script src="{base_url()}assets/js/underscore-min.js"></script>
    <script src= "{base_url()}assets/js/moment-2.2.1.js"></script>
    <script src="{base_url()}assets/js/clndr.js"></script>
    <script src="{base_url()}assets/js/site.js"></script>
    <!----End Calender -------->
</head>
<body>			       
    <!-- Header -->
    {include file='layout/header.tpl'}
    <div class="main">  
        {block name="content"}{/block}
    </div>
    <div class="copy-right">
        {include file='layout/footer.tpl'}
    </div>   
</body>
<!-- Addons Plugins -->
{block name="addon_plugins"}{/block}

<!-- Addons Scripts -->
{block name="addon_scripts"}{/block}
</html>