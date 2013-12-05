<div id="view_picker" style="width: 100%">
   <button id="admin_view" class="view">Admin</button>
   <button id="settings_view" class="view">Settings</button>
    <img id="trash" src="icons/trash.png" title="Delete Page">
</div>
<?php
//require_once('admin_view.php');

if(isset($_GET['view']) && $_GET['view']=='settings'){
    require_once('settings_view.php');
}

if(isset($_GET['view']) && $_GET['view']=='admin'){
    require_once('admin_view.php');
}

