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
		<th><label for="surname">surname</label></th>
		<td><?=form_input('surname', ($this->input->post('surname') ? $this->input->post('surname') : '')); ?></td>
	</tr>
	<tr>
		<th><label for="email">email</label></th>
		<td><?=form_input('email', ($this->input->post('email') ? $this->input->post('email') : '')); ?></td>
	</tr>
	<tr>
		<th><label for="passwd">passwd</label></th>
		<td><?=form_input('passwd', ($this->input->post('passwd') ? $this->input->post('passwd') : '')); ?></td>
	</tr>
	<tr>
		<th><label for="active">active</label></th>
		<td><?=form_input('active', ($this->input->post('active') ? $this->input->post('active') : '')); ?></td>
	</tr>
	<tr>
		<td colspan="2"><?=form_submit('create', 'Create'); ?></td>
	</tr>
	<?=form_close(); ?>
</table>
<ul>
	<li><?=anchor('admin/users', 'View all'); ?></li>
</ul>