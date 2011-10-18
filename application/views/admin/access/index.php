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
		<th>application</th>
		<th colspan="3">actions</th>
	</tr>
	<?php foreach($access as $_access): ?>
	<tr>
		<td><?=$_access->id; ?></td>
		<td><?=$_access->select; ?></td>
		<td><?=$_access->create; ?></td>
		<td><?=$_access->update; ?></td>
		<td><?=$_access->delete; ?></td>
		<td><?=$_access->name; ?></td>
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