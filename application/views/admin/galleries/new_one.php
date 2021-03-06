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
		<th><label for="seo_url">seo_url</label></th>
		<td><?=form_input('seo_url', ($this->input->post('seo_url') ? $this->input->post('seo_url') : '')); ?></td>
	</tr>
	<tr>
		<th><label for="keywords">keywords</label></th>
		<td><?=form_input('keywords', ($this->input->post('keywords') ? $this->input->post('keywords') : '')); ?></td>
	</tr>
	<tr>
		<th><label for="description">description</label></th>
		<td><?=form_textarea('description', ($this->input->post('description') ? $this->input->post('description') : '')); ?></td>
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
		<th><label for="categories_id">categories_id</label></th>
		<td>
			<?php if(!empty($categories)): ?>
			<select name="categories_id">
			<?php foreach($categories as $_categories): ?>
				<option value="<?=$_categories->id; ?>"><?=$_categories->id; ?></option>
			<?php endforeach; ?>
			</select>
			<?php else: ?>
				<?=form_input('categories_id', ($this->input->post('categories_id') ? $this->input->post('categories_id') : '')); ?>
			<?php endif; ?>
		</td>
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
	</tr>	<tr>
		<td colspan="2"><?=form_submit('create', 'Create'); ?></td>
	</tr>
	<?=form_close(); ?>
</table>
<ul>
	<li><?=anchor('admin/galleries', 'View all'); ?></li>
</ul>