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
		<th>surname</th>
		<th>email</th>
		<th>passwd</th>
		<th>created</th>
		<th>active</th>
		<th colspan="3">actions</th>
	</tr>
	<?php foreach($users as $_users): ?>
	<tr>
		<td><?=$_users->id; ?></td>
		<td><?=$_users->name; ?></td>
		<td><?=$_users->surname; ?></td>
		<td><?=$_users->email; ?></td>
		<td><?=$_users->passwd; ?></td>
		<td><?=$_users->created; ?></td>
		<td><?=$_users->active; ?></td>
		<td><?=anchor('admin/users/' . $_users->id, 'view'); ?></td>
		<td><?=anchor('admin/users/edit/' . $_users->id, 'edit'); ?></td>
		<td><?php 
			echo form_open(current_url());
			echo form_hidden('id', $_users->id);
			echo form_submit('delete', 'Delete');
			echo form_close();
		?></td>
	</tr>
	<?php endforeach; ?>
</table>
<ul>
	<li><?=anchor('admin/users', 'View all'); ?></li>
	<li><?=anchor('admin/users/new', 'New'); ?></li>
</ul>
<?php $this->load->view('layout_parts/footer'); ?>