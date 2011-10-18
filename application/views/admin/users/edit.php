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
		<?=form_hidden('id', $users[0]->id); ?>
	<tr>
		<th><label for="name">name</label></th>
		<td><?=form_input('name', ($this->input->post('name') ? $this->input->post('name') : $users[0]->name)); ?></td>
	</tr>
	<tr>
		<th><label for="surname">surname</label></th>
		<td><?=form_input('surname', ($this->input->post('surname') ? $this->input->post('surname') : $users[0]->surname)); ?></td>
	</tr>
	<tr>
		<th><label for="email">email</label></th>
		<td><?=form_input('email', ($this->input->post('email') ? $this->input->post('email') : $users[0]->email)); ?></td>
	</tr>
	<tr>
		<th><label for="passwd">passwd</label></th>
		<td><?=form_input('passwd', ($this->input->post('passwd') ? $this->input->post('passwd') : $users[0]->passwd)); ?></td>
	</tr>
	<tr>
		<th><label for="created">created</label></th>
		<td><?=form_input('created', ($this->input->post('created') ? $this->input->post('created') : $users[0]->created)); ?></td>
	</tr>
	<tr>
		<th><label for="active">active</label></th>
		<td><?=form_input('active', ($this->input->post('active') ? $this->input->post('active') : $users[0]->active)); ?></td>
	</tr>
	<tr>
		<td colspan="2"><?=form_submit('update', 'Update'); ?></td>
	</tr>
	<?=form_close(); ?>
</table>
<ul>
	<li><?=anchor('admin/users', 'View all'); ?></li>
	<li><?=anchor('admin/users/' . $users[0]->id, 'View'); ?></li>
	<li><?=anchor('admin/users/new', 'New'); ?></li>
	<li><?php 
		echo form_open(site_url('admin/users'));
		echo form_hidden('id', $users[0]->id);
		echo form_submit('delete', 'Delete');
		echo form_close();
	?></li>
</ul>
<?php $this->load->view('layout_parts/footer'); ?>