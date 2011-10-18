<h2>Edit</h2>
<div id="error_message">	
	<?php if(isset($success)): ?>
		<p class="success"><?=$success; ?></p>
	<?php endif; ?>
	<?=validation_errors(); ?>
</div>
<table>
	<?=form_open(current_url()); ?>
		<?=form_hidden('id', $articles[0]->id); ?>
	<tr>
		<th><label for="title">title</label></th>
		<td><?=form_input('title', ($this->input->post('title') ? $this->input->post('title') : $articles[0]->title)); ?></td>
	</tr>
	<tr>
		<th><label for="seo_url">seo_url</label></th>
		<td><?=form_input('seo_url', ($this->input->post('seo_url') ? $this->input->post('seo_url') : $articles[0]->seo_url)); ?></td>
	</tr>
	<tr>
		<th><label for="keywords">keywords</label></th>
		<td><?=form_input('keywords', ($this->input->post('keywords') ? $this->input->post('keywords') : $articles[0]->keywords)); ?></td>
	</tr>
	<tr>
		<th><label for="description">description</label></th>
		<td><?=form_textarea('description', ($this->input->post('description') ? $this->input->post('description') : $articles[0]->description)); ?></td>
	</tr>
	<tr>
		<th><label for="content">content</label></th>
		<td><?=form_textarea('content', ($this->input->post('content') ? $this->input->post('content') : $articles[0]->content)); ?></td>
	</tr>
	<tr>
		<th><label for="active">active</label></th>
		<td><?=form_input('active', ($this->input->post('active') ? $this->input->post('active') : $articles[0]->active)); ?></td>
	</tr>
	<tr>
		<th><label for="comments">comments</label></th>
		<td><?=form_input('comments', ($this->input->post('comments') ? $this->input->post('comments') : $articles[0]->comments)); ?></td>
	</tr>

	<tr>
		<th><label for="categories_id">categories_id</label></th>
		<td>			
			<?php if(!empty($categories)): ?>
			<select name="categories_id">
			<?php foreach($categories as $_categories): ?>
				<option value="<?=$_categories->id; ?>" <?php if($_categories->id == ($this->input->post('categories_id') ? $this->input->post('categories_id') : $articles[0]->categories_id)) echo "selected=\"selected\""; ?>><?=$_categories->id; ?></option>
			<?php endforeach; ?>
			</select>
			<?php else: ?>
				<?=form_input('categories_id', ($this->input->post('categories_id') ? $this->input->post('categories_id') : $articles[0]->categories_id)); ?>
			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<th><label for="uploaded_files_id">uploaded_files_id</label></th>
		<td>			
			<?php if(!empty($uploaded_files)): ?>
			<select name="uploaded_files_id">
			<?php foreach($uploaded_files as $_uploaded_files): ?>
				<option value="<?=$_uploaded_files->id; ?>" <?php if($_uploaded_files->id == ($this->input->post('uploaded_files_id') ? $this->input->post('uploaded_files_id') : $articles[0]->uploaded_files_id)) echo "selected=\"selected\""; ?>><?=$_uploaded_files->id; ?></option>
			<?php endforeach; ?>
			</select>
			<?php else: ?>
				<?=form_input('uploaded_files_id', ($this->input->post('uploaded_files_id') ? $this->input->post('uploaded_files_id') : $articles[0]->uploaded_files_id)); ?>
			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<th><label for="users_id">users_id</label></th>
		<td>			
			<?php if(!empty($users)): ?>
			<select name="users_id">
			<?php foreach($users as $_users): ?>
				<option value="<?=$_users->id; ?>" <?php if($_users->id == ($this->input->post('users_id') ? $this->input->post('users_id') : $articles[0]->users_id)) echo "selected=\"selected\""; ?>><?=$_users->id; ?></option>
			<?php endforeach; ?>
			</select>
			<?php else: ?>
				<?=form_input('users_id', ($this->input->post('users_id') ? $this->input->post('users_id') : $articles[0]->users_id)); ?>
			<?php endif; ?>
		</td>
	</tr>	<tr>
		<td colspan="2"><?=form_submit('update', 'Update'); ?></td>
	</tr>
	<?=form_close(); ?>
</table>
<ul>
	<li><?=anchor('admin/articles', 'View all'); ?></li>
	<li><?=anchor('admin/articles/' . $articles[0]->id, 'View'); ?></li>
	<li><?=anchor('admin/articles/new', 'New'); ?></li>
	<li><?php 
		echo form_open(site_url('admin/articles'));
		echo form_hidden('id', $articles[0]->id);
		echo form_submit('delete', 'Delete');
		echo form_close();
	?></li>
</ul>