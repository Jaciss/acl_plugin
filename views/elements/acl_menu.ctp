<div class="acl_menu">
<?php print $html->image('/acl/img/tango/32x32/places/folder.png', array('align' => 'absmiddle')) ?><?php print $html->link('Acl Menu', array('action'=>'index', 'admin'=>true)) ?>

<?php print $html->image('/acl/img/tango/32x32/apps/system-users.png', array('align' => 'absmiddle')) ?><?php print $html->link('Manage Aros', array('action'=>'aros', 'admin'=>true)) ?>

<?php print $html->image('/acl/img/tango/32x32/apps/preferences-system-windows.png', array('align' => 'absmiddle')) ?><?php print $html->link('Manage Acos', array('action'=>'acos', 'admin'=>true)) ?>

<?php print $html->image('/acl/img/tango/32x32/emblems/emblem-readonly.png', array('align' => 'absmiddle')) ?><?php print $html->link('Manage Permissions', array('action'=>'permissions', 'admin'=>true)) ?>
</div>