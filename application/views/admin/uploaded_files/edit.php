<h2>Edit</h2>
<div id="error_message">	
	<?php if(isset($success)): ?>
		<p class="success"><?=$success; ?></p>
	<?php endif; ?>
	<?=validation_errors(); ?>
</div>
<table>
	<?=form_open(current_url()); ?>
		<?=form_hidden('id', $uploaded_files[0]->id); ?>
	<tr>
		<th><label for="title">title</label></th>
		<td><?=form_input('title', ($this->input->post('title') ? $this->input->post('title') : $uploaded_files[0]->title)); ?></td>
	</tr>
	<tr>
		<th><label for="description">description</label></th>
		<td><?=form_textarea('description', ($this->input->post('description') ? $this->input->post('description') : $uploaded_files[0]->description)); ?></td>
	</tr>
	<tr>
		<th><label for="filename">filename</label></th>
		<td><?=form_input('filename', ($this->input->post('filename') ? $this->input->post('filename') : $uploaded_files[0]->filename)); ?></td>
	</tr>
	<tr>
		<th><label for="active">active</label></th>
		<td><?=form_input('active', ($this->input->post('active') ? $this->input->post('active') : $uploaded_files[0]->active)); ?></td>
	</tr>
	<tr>
		<th><label for="comments">comments</label></th>
		<td><?=form_input('comments', ($this->input->post('comments') ? $this->input->post('comments') : $uploaded_files[0]->comments)); ?></td>
	</tr>

	<tr>
		<th><label for="users_id">users_id</label></th>
		<td>			
			<?php if(!empty($users)): ?>
			<select name="users_id">
			<?php foreach($users as $_users): ?>
				<option value="<?=$_users->id; ?>" <?php if($_users->id == ($this->input->post('users_id') ? $this->input->post('users_id') : $uploaded_files[0]->users_id)) echo "selected=\"selected\""; ?>><?=$_users->id; ?></option>
			<?php endforeach; ?>
			</select>
			<?php else: ?>
				<?=form_input('users_id', ($this->input->post('users_id') ? $this->input->post('users_id') : $uploaded_files[0]->users_id)); ?>
			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<th><label for="file_types_id">file_types_id</label></th>
		<td>			
			<?php if(!empty($file_types)): ?>
			<select name="file_types_id">
			<?php foreach($file_types as $_file_types): ?>
				<option value="<?=$_file_types->id; ?>" <?php if($_file_types->id == ($this->input->post('file_types_id') ? $this->input->post('file_types_id') : $uploaded_files[0]->file_types_id)) echo "selected=\"selected\""; ?>><?=$_file_types->id; ?></option>
			<?php endforeach; ?>
			</select>
			<?php else: ?>
				<?=form_input('file_types_id', ($this->input->post('file_types_id') ? $this->input->post('file_types_id') : $uploaded_files[0]->file_types_id)); ?>
			<?php endif; ?>
		</td>
	</tr>	<tr>
		<td colspan="2"><?=form_submit('update', 'Update'); ?></td>
	</tr>
	<?=form_close(); ?>
</table>
<ul>
	<li><?=anchor('admin/uploaded_files', 'View all'); ?></li>
	<li><?=anchor('admin/uploaded_files/' . $uploaded_files[0]->id, 'View'); ?></li>
	<li><?=anchor('admin/uploaded_files/new', 'New'); ?></li>
	<li><?php 
		echo form_open(site_url('admin/uploaded_files'));
		echo form_hidden('id', $uploaded_files[0]->id);
		echo form_submit('delete', 'Delete');
		echo form_close();
	?></li>
</ul>