<?php $this->load->view('layout_parts/header'); ?>
<ul id="menu">
<?php $this->load->view('admin/layout_parts/menu'); ?>
</ul>
<h2>Show</h2>
<table>
	<?=form_open(current_url()); ?>
	<tr>
		<th>id</th>
		<td><?=$categories[0]->id; ?></td>
	</tr>
	<tr>
		<th>title</th>
		<td><?=$categories[0]->title; ?></td>
	</tr>
	<tr>
		<th>seo_url</th>
		<td><?=$categories[0]->seo_url; ?></td>
	</tr>
	<tr>
		<th>keywords</th>
		<td><?=$categories[0]->keywords; ?></td>
	</tr>
	<tr>
		<th>description</th>
		<td><?=$categories[0]->description; ?></td>
	</tr>
	<tr>
		<th>active</th>
		<td><?=$categories[0]->active; ?></td>
	</tr>
	<tr>
		<th>order</th>
		<td><?=$categories[0]->order; ?></td>
	</tr>

</table>
<ul>
	<li><?=anchor('admin/categories', 'View all'); ?></li>
	<li><?=anchor('admin/categories/edit/' . $categories[0]->id, 'Edit'); ?></li>
	<li><?=anchor('admin/categories/new', 'New'); ?></li>
	<li><?php 
		echo form_open(site_url('admin/categories'));
		echo form_hidden('id', $categories[0]->id);
		echo form_submit('delete', 'Delete');
		echo form_close();
	?></li>
</ul>
<?php $this->load->view('layout_parts/footer'); ?>