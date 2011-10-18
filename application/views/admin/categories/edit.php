<h2>Edit</h2>
<div id="error_message">	
	<?php if(isset($success)): ?>
		<p class="success"><?=$success; ?></p>
	<?php endif; ?>
	<?=validation_errors(); ?>
</div>
<table>
	<?=form_open(current_url()); ?>
		<?=form_hidden('id', $categories[0]->id); ?>
	<tr>
		<th><label for="title">title</label></th>
		<td><?=form_input('title', ($this->input->post('title') ? $this->input->post('title') : $categories[0]->title)); ?></td>
	</tr>
	<tr>
		<th><label for="seo_url">seo_url</label></th>
		<td><?=form_input('seo_url', ($this->input->post('seo_url') ? $this->input->post('seo_url') : $categories[0]->seo_url)); ?></td>
	</tr>
	<tr>
		<th><label for="keywords">keywords</label></th>
		<td><?=form_input('keywords', ($this->input->post('keywords') ? $this->input->post('keywords') : $categories[0]->keywords)); ?></td>
	</tr>
	<tr>
		<th><label for="description">description</label></th>
		<td><?=form_textarea('description', ($this->input->post('description') ? $this->input->post('description') : $categories[0]->description)); ?></td>
	</tr>
	<tr>
		<th><label for="active">active</label></th>
		<td><?=form_input('active', ($this->input->post('active') ? $this->input->post('active') : $categories[0]->active)); ?></td>
	</tr>
	<tr>
		<th><label for="order">order</label></th>
		<td><?=form_input('order', ($this->input->post('order') ? $this->input->post('order') : $categories[0]->order)); ?></td>
	</tr>
	<tr>
		<td colspan="2"><?=form_submit('update', 'Update'); ?></td>
	</tr>
	<?=form_close(); ?>
</table>
<ul>
	<li><?=anchor('admin/categories', 'View all'); ?></li>
	<li><?=anchor('admin/categories/' . $categories[0]->id, 'View'); ?></li>
	<li><?=anchor('admin/categories/new', 'New'); ?></li>
	<li><?php 
		echo form_open(site_url('admin/categories'));
		echo form_hidden('id', $categories[0]->id);
		echo form_submit('delete', 'Delete');
		echo form_close();
	?></li>
</ul>