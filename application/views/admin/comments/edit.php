<h2>Edit</h2>
<div id="error_message">	
	<?php if(isset($success)): ?>
		<p class="success"><?=$success; ?></p>
	<?php endif; ?>
	<?=validation_errors(); ?>
</div>
<table>
	<?=form_open(current_url()); ?>
		<?=form_hidden('id', $comments[0]->id); ?>
	<tr>
		<th><label for="title">title</label></th>
		<td><?=form_input('title', ($this->input->post('title') ? $this->input->post('title') : $comments[0]->title)); ?></td>
	</tr>
	<tr>
		<th><label for="content">content</label></th>
		<td><?=form_textarea('content', ($this->input->post('content') ? $this->input->post('content') : $comments[0]->content)); ?></td>
	</tr>
	<tr>
		<th><label for="active">active</label></th>
		<td><?=form_input('active', ($this->input->post('active') ? $this->input->post('active') : $comments[0]->active)); ?></td>
	</tr>

	<tr>
		<th><label for="users_id">users_id</label></th>
		<td>			
			<?php if(!empty($users)): ?>
			<select name="users_id">
			<?php foreach($users as $_users): ?>
				<option value="<?=$_users->id; ?>" <?php if($_users->id == ($this->input->post('users_id') ? $this->input->post('users_id') : $comments[0]->users_id)) echo "selected=\"selected\""; ?>><?=$_users->id; ?></option>
			<?php endforeach; ?>
			</select>
			<?php else: ?>
				<?=form_input('users_id', ($this->input->post('users_id') ? $this->input->post('users_id') : $comments[0]->users_id)); ?>
			<?php endif; ?>
		</td>
	</tr>	<tr>
		<td colspan="2"><?=form_submit('update', 'Update'); ?></td>
	</tr>
	<?=form_close(); ?>
</table>
<ul>
	<li><?=anchor('admin/comments', 'View all'); ?></li>
	<li><?=anchor('admin/comments/' . $comments[0]->id, 'View'); ?></li>
	<li><?=anchor('admin/comments/new', 'New'); ?></li>
	<li><?php 
		echo form_open(site_url('admin/comments'));
		echo form_hidden('id', $comments[0]->id);
		echo form_submit('delete', 'Delete');
		echo form_close();
	?></li>
</ul>