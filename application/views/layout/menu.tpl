<!-- BEGIN Sidebar -->
<div id="sidebar" class="navbar-collapse collapse">
    {if in_array("admin", $groups) or in_array("superadmin", $groups)}
        {include file='layout/menu_admin.tpl'}
    {else if in_array("Pembimbing",$groups)}
        {include file='layout/menu_pembimbing.tpl'}
    {else}
        {include file='layout/menu_pemohon.tpl'}            
    {/if}
    <!-- BEGIN Sidebar Collapse Button -->
    <div id="sidebar-collapse" class="visible-lg">
        <i class="fa fa-angle-double-left"></i>
    </div>
    <!-- END Sidebar Collapse Button -->
</div>
<!-- END Sidebar -->