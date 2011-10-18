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
		<th><label for="select">select</label></th>
		<td><?=form_input('select', ($this->input->post('select') ? $this->input->post('select') : '')); ?></td>
	</tr>
	<tr>
		<th><label for="create">create</label></th>
		<td><?=form_input('create', ($this->input->post('create') ? $this->input->post('create') : '')); ?></td>
	</tr>
	<tr>
		<th><label for="update">update</label></th>
		<td><?=form_input('update', ($this->input->post('update') ? $this->input->post('update') : '')); ?></td>
	</tr>
	<tr>
		<th><label for="delete">delete</label></th>
		<td><?=form_input('delete', ($this->input->post('delete') ? $this->input->post('delete') : '')); ?></td>
	</tr>

	<tr>
		<th><label for="applications_id">applications_id</label></th>
		<td>
			<?php if(!empty($applications)): ?>
			<select name="applications_id">
			<?php foreach($applications as $_applications): ?>
				<option value="<?=$_applications->id; ?>"><?=$_applications->name; ?></option>
			<?php endforeach; ?>
			</select>
			<?php else: ?>
				<?=form_input('applications_id', ($this->input->post('applications_id') ? $this->input->post('applications_id') : '')); ?>
			<?php endif; ?>
		</td>
	</tr>	<tr>
		<td colspan="2"><?=form_submit('create_new', 'Create'); ?></td>
	</tr>
	<?=form_close(); ?>
</table>
<ul>
	<li><?=anchor('admin/access', 'View all'); ?></li>
</ul>