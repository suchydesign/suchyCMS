<h2>Edit</h2>
<div id="error_message">	
	<?php if(isset($success)): ?>
		<p class="success"><?=$success; ?></p>
	<?php endif; ?>
	<?=validation_errors(); ?>
</div>
<table>
	<?=form_open(current_url()); ?>
		<?=form_hidden('id', $galleries[0]->id); ?>
	<tr>
		<th><label for="title">title</label></th>
		<td><?=form_input('title', ($this->input->post('title') ? $this->input->post('title') : $galleries[0]->title)); ?></td>
	</tr>
	<tr>
		<th><label for="seo_url">seo_url</label></th>
		<td><?=form_input('seo_url', ($this->input->post('seo_url') ? $this->input->post('seo_url') : $galleries[0]->seo_url)); ?></td>
	</tr>
	<tr>
		<th><label for="keywords">keywords</label></th>
		<td><?=form_input('keywords', ($this->input->post('keywords') ? $this->input->post('keywords') : $galleries[0]->keywords)); ?></td>
	</tr>
	<tr>
		<th><label for="description">description</label></th>
		<td><?=form_textarea('description', ($this->input->post('description') ? $this->input->post('description') : $galleries[0]->description)); ?></td>
	</tr>
	<tr>
		<th><label for="created">created</label></th>
		<td><?=form_input('created', ($this->input->post('created') ? $this->input->post('created') : $galleries[0]->created)); ?></td>
	</tr>
	<tr>
		<th><label for="active">active</label></th>
		<td><?=form_input('active', ($this->input->post('active') ? $this->input->post('active') : $galleries[0]->active)); ?></td>
	</tr>
	<tr>
		<th><label for="comments">comments</label></th>
		<td><?=form_input('comments', ($this->input->post('comments') ? $this->input->post('comments') : $galleries[0]->comments)); ?></td>
	</tr>

	<tr>
		<th><label for="categories_id">categories_id</label></th>
		<td>			
			<?php if(!empty($categories)): ?>
			<select name="categories_id">
			<?php foreach($categories as $_categories): ?>
				<option value="<?=$_categories->id; ?>" <?php if($_categories->id == ($this->input->post('categories_id') ? $this->input->post('categories_id') : $galleries[0]->categories_id)) echo "selected=\"selected\""; ?>><?=$_categories->id; ?></option>
			<?php endforeach; ?>
			</select>
			<?php else: ?>
				<?=form_input('categories_id', ($this->input->post('categories_id') ? $this->input->post('categories_id') : $galleries[0]->categories_id)); ?>
			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<th><label for="users_id">users_id</label></th>
		<td>			
			<?php if(!empty($users)): ?>
			<select name="users_id">
			<?php foreach($users as $_users): ?>
				<option value="<?=$_users->id; ?>" <?php if($_users->id == ($this->input->post('users_id') ? $this->input->post('users_id') : $galleries[0]->users_id)) echo "selected=\"selected\""; ?>><?=$_users->id; ?></option>
			<?php endforeach; ?>
			</select>
			<?php else: ?>
				<?=form_input('users_id', ($this->input->post('users_id') ? $this->input->post('users_id') : $galleries[0]->users_id)); ?>
			<?php endif; ?>
		</td>
	</tr>	<tr>
		<td colspan="2"><?=form_submit('update', 'Update'); ?></td>
	</tr>
	<?=form_close(); ?>
</table>
<ul>
	<li><?=anchor('admin/galleries', 'View all'); ?></li>
	<li><?=anchor('admin/galleries/' . $galleries[0]->id, 'View'); ?></li>
	<li><?=anchor('admin/galleries/new', 'New'); ?></li>
	<li><?php 
		echo form_open(site_url('admin/galleries'));
		echo form_hidden('id', $galleries[0]->id);
		echo form_submit('delete', 'Delete');
		echo form_close();
	?></li>
</ul>