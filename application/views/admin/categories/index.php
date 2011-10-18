<?php $this->load->view('layout_parts/header'); ?>
<ul id="menu">
<?php $this->load->view('admin/layout_parts/menu'); ?>
</ul>
<h2>List</h2>
<div id="error_message">	
	<?php if(isset($success)): ?>
		<p class="success"><?=$success; ?></p>
	<?php endif; ?>
	<?=validation_errors(); ?>
</div>
<table>
	<tr>
		<th>id</th>
		<th>title</th>
		<th>seo_url</th>
		<th>keywords</th>
		<th>description</th>
		<th>active</th>
		<th>order</th>
		<th colspan="3">actions</th>
	</tr>
	<?php foreach($categories as $_categories): ?>
	<tr>
		<td><?=$_categories->id; ?></td>
		<td><?=$_categories->title; ?></td>
		<td><?=$_categories->seo_url; ?></td>
		<td><?=$_categories->keywords; ?></td>
		<td><?=$_categories->description; ?></td>
		<td><?=$_categories->active; ?></td>
		<td><?=$_categories->order; ?></td>
		<td><?=anchor('admin/categories/' . $_categories->id, 'view'); ?></td>
		<td><?=anchor('admin/categories/edit/' . $_categories->id, 'edit'); ?></td>
		<td><?php 
			echo form_open(current_url());
			echo form_hidden('id', $_categories->id);
			echo form_submit('delete', 'Delete');
			echo form_close();
		?></td>
	</tr>
	<?php endforeach; ?>
</table>
<ul>
	<li><?=anchor('admin/categories', 'View all'); ?></li>
	<li><?=anchor('admin/categories/new', 'New'); ?></li>
</ul>
<?php $this->load->view('layout_parts/footer'); ?>