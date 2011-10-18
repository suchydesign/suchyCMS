<h2>Edit</h2>
<div id="error_message">	
	<?php if(isset($success)): ?>
		<p class="success"><?=$success; ?></p>
	<?php endif; ?>
	<?=validation_errors(); ?>
</div>
<table>
	<?=form_open(current_url()); ?>
		<?=form_hidden('id', $static_pages[0]->id); ?>
	<tr>
		<th><label for="title">title</label></th>
		<td><?=form_input('title', ($this->input->post('title') ? $this->input->post('title') : $static_pages[0]->title)); ?></td>
	</tr>
	<tr>
		<th><label for="seo_url">seo_url</label></th>
		<td><?=form_input('seo_url', ($this->input->post('seo_url') ? $this->input->post('seo_url') : $static_pages[0]->seo_url)); ?></td>
	</tr>
	<tr>
		<th><label for="keywords">keywords</label></th>
		<td><?=form_input('keywords', ($this->input->post('keywords') ? $this->input->post('keywords') : $static_pages[0]->keywords)); ?></td>
	</tr>
	<tr>
		<th><label for="description">description</label></th>
		<td><?=form_textarea('description', ($this->input->post('description') ? $this->input->post('description') : $static_pages[0]->description)); ?></td>
	</tr>
	<tr>
		<th><label for="content">content</label></th>
		<td><?=form_textarea('content', ($this->input->post('content') ? $this->input->post('content') : $static_pages[0]->content)); ?></td>
	</tr>
	<tr>
		<th><label for="created">created</label></th>
		<td><?=form_input('created', ($this->input->post('created') ? $this->input->post('created') : $static_pages[0]->created)); ?></td>
	</tr>
	<tr>
		<th><label for="active">active</label></th>
		<td><?=form_input('active', ($this->input->post('active') ? $this->input->post('active') : $static_pages[0]->active)); ?></td>
	</tr>
	<tr>
		<th><label for="order">order</label></th>
		<td><?=form_input('order', ($this->input->post('order') ? $this->input->post('order') : $static_pages[0]->order)); ?></td>
	</tr>

	<tr>
		<th><label for="users_id">users_id</label></th>
		<td>			
			<?php if(!empty($users)): ?>
			<select name="users_id">
			<?php foreach($users as $_users): ?>
				<option value="<?=$_users->id; ?>" <?php if($_users->id == ($this->input->post('users_id') ? $this->input->post('users_id') : $static_pages[0]->users_id)) echo "selected=\"selected\""; ?>><?=$_users->id; ?></option>
			<?php endforeach; ?>
			</select>
			<?php else: ?>
				<?=form_input('users_id', ($this->input->post('users_id') ? $this->input->post('users_id') : $static_pages[0]->users_id)); ?>
			<?php endif; ?>
		</td>
	</tr>	<tr>
		<td colspan="2"><?=form_submit('update', 'Update'); ?></td>
	</tr>
	<?=form_close(); ?>
</table>
<ul>
	<li><?=anchor('admin/static_pages', 'View all'); ?></li>
	<li><?=anchor('admin/static_pages/' . $static_pages[0]->id, 'View'); ?></li>
	<li><?=anchor('admin/static_pages/new', 'New'); ?></li>
	<li><?php 
		echo form_open(site_url('admin/static_pages'));
		echo form_hidden('id', $static_pages[0]->id);
		echo form_submit('delete', 'Delete');
		echo form_close();
	?></li>
</ul>