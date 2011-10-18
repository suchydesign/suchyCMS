<?php $this->load->view('layout_parts/header'); ?>
<ul id="menu">
<?php $this->load->view('admin/layout_parts/menu'); ?>
</ul>
<h2>List</h2>
<div id="error_message">	
	<?php if(isset($success)): ?>
		<p class="success"><?=$success; ?></p>
	<?php endif; ?>
	<?=validation_errors(); ?>
</div>
<table>
	<tr>
		<th>id</th>
		<th>select</th>
		<th>create</th>
		<th>update</th>
		<th>delete</th>
		<th>applications_id</th>
		<th colspan="3">actions</th>
	</tr>
	<?php foreach($access as $_access): ?>
	<tr>
		<td><?=$_access->id; ?></td>
		<td><?=$_access->select; ?></td>
		<td><?=$_access->create; ?></td>
		<td><?=$_access->update; ?></td>
		<td><?=$_access->delete; ?></td>
		<td><?=$_access->applications_id; ?></td>
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
<ul>
	<li><?=anchor('admin/access', 'View all'); ?></li>
	<li><?=anchor('admin/access/new', 'New'); ?></li>
</ul>
<?php $this->load->view('layout_parts/footer'); ?>