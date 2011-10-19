<h2>List</h2>
<div id="error_message">	
	<?php if(isset($success)): ?>
		<p class="success"><?=$success; ?></p>
	<?php endif; ?>
	<?=validation_errors(); ?>
</div>
<ul class="paginator">
	<?=$this->pagination->create_links(); ?>
</ul>
<table>
	<tr>
		<th>id</th>
		<th>select</th>
		<th>create</th>
		<th>update</th>
		<th>delete</th>
		<th>update_all</th>
		<th>delete_all</th>
		<th>groups</th>
		<th>application</th>
		<th colspan="3">actions</th>
	</tr>
	<?php foreach($access as $_access): ?>
	<tr>
		<th class="idcol"><?=$_access->id; ?></th>
		<td><?=yes_no($this, $_access->select); ?></td>
		<td><?=yes_no($this, $_access->create); ?></td>
		<td><?=yes_no($this, $_access->update); ?></td>
		<td><?=yes_no($this, $_access->delete); ?></td>
		<td><?=yes_no($this, $_access->update_all); ?></td>
		<td><?=yes_no($this, $_access->delete_all); ?></td>
		<td><?=anchor('admin/groups/' . $_access->groups_id, $_access->gname); ?></td>
		<td><?=anchor('admin/applications/' . $_access->applications_id, $_access->name); ?></td>
		<td><?=anchor('admin/access/' . $_access->id, 'view'); ?></td>
		<td><?=anchor('admin/access/edit/' . $_access->id, 'edit'); ?></td>
		<td><?php 
			echo form_open(current_url());
			echo form_hidden('id', $_access->id);
			echo form_submit('delete', 'Delete');
			echo form_close();
		?></td>
	</tr>
	<?php endforeach; ?>
</table>
<ul class="paginator">
	<?=$this->pagination->create_links(); ?>
</ul>
<ul>
	<li><?=anchor('admin/access', 'View all'); ?></li>
	<li><?=anchor('admin/access/new', 'New'); ?></li>
</ul>