<?php $this->load->view('layout_parts/header'); ?>
<ul id="menu">
<?php $this->load->view('admin/layout_parts/menu'); ?>
</ul>
<h2>Edit</h2>
<div id="error_message">	
	<?php if(isset($success)): ?>
		<p class="success"><?=$success; ?></p>
	<?php endif; ?>
	<?=validation_errors(); ?>
</div>
<table>
	<?=form_open(current_url()); ?>
		<?=form_hidden('id', $groups[0]->id); ?>
	<tr>
		<th><label for="name">name</label></th>
		<td><?=form_input('name', ($this->input->post('name') ? $this->input->post('name') : $groups[0]->name)); ?></td>
	</tr>
	<tr>
		<th><label for="created">created</label></th>
		<td><?=form_input('created', ($this->input->post('created') ? $this->input->post('created') : $groups[0]->created)); ?></td>
	</tr>
	<tr>
		<th><label for="active">active</label></th>
		<td><?=form_input('active', ($this->input->post('active') ? $this->input->post('active') : $groups[0]->active)); ?></td>
	</tr>
	<tr>
		<td colspan="2"><?=form_submit('update', 'Update'); ?></td>
	</tr>
	<?=form_close(); ?>
</table>
<ul>
	<li><?=anchor('admin/groups', 'View all'); ?></li>
	<li><?=anchor('admin/groups/' . $groups[0]->id, 'View'); ?></li>
	<li><?=anchor('admin/groups/new', 'New'); ?></li>
	<li><?php 
		echo form_open(site_url('admin/groups'));
		echo form_hidden('id', $groups[0]->id);
		echo form_submit('delete', 'Delete');
		echo form_close();
	?></li>
</ul>
<?php $this->load->view('layout_parts/footer'); ?>