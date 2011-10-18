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
		<th>name</th>
		<th colspan="3">actions</th>
	</tr>
	<?php foreach($applications as $_applications): ?>
	<tr>
		<th class="idcol"><?=$_applications->id; ?></th>
		<td><?=$_applications->name; ?></td>
		<td><?=anchor('admin/applications/' . $_applications->id, 'view'); ?></td>
		<td><?=anchor('admin/applications/edit/' . $_applications->id, 'edit'); ?></td>
		<td><?php 
			echo form_open(current_url());
			echo form_hidden('id', $_applications->id);
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
	<li><?=anchor('admin/applications', 'View all'); ?></li>
	<li><?=anchor('admin/applications/new', 'New'); ?></li>
</ul>