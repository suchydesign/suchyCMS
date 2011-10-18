<?php $this->load->view('layout_parts/header'); ?>
<ul id="menu">
<?php $this->load->view('admin/layout_parts/menu'); ?>
</ul>
<h2>New</h2>
<div id="error_message">	
	<?php if(isset($success)): ?>
		<p class="success"><?=$success; ?></p>
	<?php endif; ?>
	<?=validation_errors(); ?>
</div>
<table>
	<?=form_open(current_url()); ?>
	<tr>
		<th><label for="name">name</label></th>
		<td><?=form_input('name', ($this->input->post('name') ? $this->input->post('name') : '')); ?></td>
	</tr>
	<tr>
		<th><label for="mime_type">mime_type</label></th>
		<td><?=form_input('mime_type', ($this->input->post('mime_type') ? $this->input->post('mime_type') : '')); ?></td>
	</tr>
	<tr>
		<th><label for="ext">ext</label></th>
		<td><?=form_input('ext', ($this->input->post('ext') ? $this->input->post('ext') : '')); ?></td>
	</tr>
	<tr>
		<td colspan="2"><?=form_submit('create', 'Create'); ?></td>
	</tr>
	<?=form_close(); ?>
</table>
<ul>
	<li><?=anchor('admin/file_types', 'View all'); ?></li>
</ul>
<?php $this->load->view('layout_parts/footer'); ?>