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
		<th>name</th>
		<th>mime_type</th>
		<th>ext</th>
		<th colspan="3">actions</th>
	</tr>
	<?php foreach($file_types as $_file_types): ?>
	<tr>
		<td><?=$_file_types->id; ?></td>
		<td><?=$_file_types->name; ?></td>
		<td><?=$_file_types->mime_type; ?></td>
		<td><?=$_file_types->ext; ?></td>
		<td><?=anchor('admin/file_types/' . $_file_types->id, 'view'); ?></td>
		<td><?=anchor('admin/file_types/edit/' . $_file_types->id, 'edit'); ?></td>
		<td><?php 
			echo form_open(current_url());
			echo form_hidden('id', $_file_types->id);
			echo form_submit('delete', 'Delete');
			echo form_close();
		?></td>
	</tr>
	<?php endforeach; ?>
</table>
<ul>
	<li><?=anchor('admin/file_types', 'View all'); ?></li>
	<li><?=anchor('admin/file_types/new', 'New'); ?></li>
</ul>
<?php $this->load->view('layout_parts/footer'); ?>