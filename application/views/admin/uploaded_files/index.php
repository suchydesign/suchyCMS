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
		<th>title</th>
		<th>description</th>
		<th>filename</th>
		<th>created</th>
		<th>active</th>
		<th>comments</th>
		<th>users_id</th>
		<th>file_types_id</th>
		<th colspan="3">actions</th>
	</tr>
	<?php foreach($uploaded_files as $_uploaded_files): ?>
	<tr>
		<td><?=$_uploaded_files->id; ?></td>
		<td><?=$_uploaded_files->title; ?></td>
		<td><?=$_uploaded_files->description; ?></td>
		<td><?=$_uploaded_files->filename; ?></td>
		<td><?=$_uploaded_files->created; ?></td>
		<td><?=$_uploaded_files->active; ?></td>
		<td><?=$_uploaded_files->comments; ?></td>
		<td><?=$_uploaded_files->users_id; ?></td>
		<td><?=$_uploaded_files->file_types_id; ?></td>
		<td><?=anchor('admin/uploaded_files/' . $_uploaded_files->id, 'view'); ?></td>
		<td><?=anchor('admin/uploaded_files/edit/' . $_uploaded_files->id, 'edit'); ?></td>
		<td><?php 
			echo form_open(current_url());
			echo form_hidden('id', $_uploaded_files->id);
			echo form_submit('delete', 'Delete');
			echo form_close();
		?></td>
	</tr>
	<?php endforeach; ?>
</table>
<ul>
	<li><?=anchor('admin/uploaded_files', 'View all'); ?></li>
	<li><?=anchor('admin/uploaded_files/new', 'New'); ?></li>
</ul>