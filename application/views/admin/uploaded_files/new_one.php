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
		<th><label for="title">title</label></th>
		<td><?=form_input('title', ($this->input->post('title') ? $this->input->post('title') : '')); ?></td>
	</tr>
	<tr>
		<th><label for="description">description</label></th>
		<td><?=form_textarea('description', ($this->input->post('description') ? $this->input->post('description') : '')); ?></td>
	</tr>
	<tr>
		<th><label for="filename">filename</label></th>
		<td><?=form_input('filename', ($this->input->post('filename') ? $this->input->post('filename') : '')); ?></td>
	</tr>
	<tr>
		<th><label for="active">active</label></th>
		<td><?=form_input('active', ($this->input->post('active') ? $this->input->post('active') : '')); ?></td>
	</tr>
	<tr>
		<th><label for="comments">comments</label></th>
		<td><?=form_input('comments', ($this->input->post('comments') ? $this->input->post('comments') : '')); ?></td>
	</tr>

	<tr>
		<th><label for="users_id">users_id</label></th>
		<td>
			<?php if(!empty($users)): ?>
			<select name="users_id">
			<?php foreach($users as $_users): ?>
				<option value="<?=$_users->id; ?>"><?=$_users->id; ?></option>
			<?php endforeach; ?>
			</select>
			<?php else: ?>
				<?=form_input('users_id', ($this->input->post('users_id') ? $this->input->post('users_id') : '')); ?>
			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<th><label for="file_types_id">file_types_id</label></th>
		<td>
			<?php if(!empty($file_types)): ?>
			<select name="file_types_id">
			<?php foreach($file_types as $_file_types): ?>
				<option value="<?=$_file_types->id; ?>"><?=$_file_types->id; ?></option>
			<?php endforeach; ?>
			</select>
			<?php else: ?>
				<?=form_input('file_types_id', ($this->input->post('file_types_id') ? $this->input->post('file_types_id') : '')); ?>
			<?php endif; ?>
		</td>
	</tr>	<tr>
		<td colspan="2"><?=form_submit('create', 'Create'); ?></td>
	</tr>
	<?=form_close(); ?>
</table>
<ul>
	<li><?=anchor('admin/uploaded_files', 'View all'); ?></li>
</ul>