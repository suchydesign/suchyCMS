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
		<th>created</th>
		<th>active</th>
		<th colspan="3">actions</th>
	</tr>
	<?php foreach($groups as $_groups): ?>
	<tr>
		<td><?=$_groups->id; ?></td>
		<td><?=$_groups->name; ?></td>
		<td><?=$_groups->created; ?></td>
		<td><?=$_groups->active; ?></td>
		<td><?=anchor('admin/groups/' . $_groups->id, 'view'); ?></td>
		<td><?=anchor('admin/groups/edit/' . $_groups->id, 'edit'); ?></td>
		<td><?php 
			echo form_open(current_url());
			echo form_hidden('id', $_groups->id);
			echo form_submit('delete', 'Delete');
			echo form_close();
		?></td>
	</tr>
	<?php endforeach; ?>
</table>
<ul>
	<li><?=anchor('admin/groups', 'View all'); ?></li>
	<li><?=anchor('admin/groups/new', 'New'); ?></li>
</ul>
<?php $this->load->view('layout_parts/footer'); ?>