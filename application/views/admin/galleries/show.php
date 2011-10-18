<?php $this->load->view('layout_parts/header'); ?>
<ul id="menu">
<?php $this->load->view('admin/layout_parts/menu'); ?>
</ul>
<h2>Show</h2>
<table>
	<?=form_open(current_url()); ?>
	<tr>
		<th>id</th>
		<td><?=$galleries[0]->id; ?></td>
	</tr>
	<tr>
		<th>title</th>
		<td><?=$galleries[0]->title; ?></td>
	</tr>
	<tr>
		<th>seo_url</th>
		<td><?=$galleries[0]->seo_url; ?></td>
	</tr>
	<tr>
		<th>keywords</th>
		<td><?=$galleries[0]->keywords; ?></td>
	</tr>
	<tr>
		<th>description</th>
		<td><?=$galleries[0]->description; ?></td>
	</tr>
	<tr>
		<th>created</th>
		<td><?=$galleries[0]->created; ?></td>
	</tr>
	<tr>
		<th>active</th>
		<td><?=$galleries[0]->active; ?></td>
	</tr>
	<tr>
		<th>comments</th>
		<td><?=$galleries[0]->comments; ?></td>
	</tr>
	<tr>
		<th>categories_id</th>
		<td><?=$galleries[0]->categories_id; ?></td>
	</tr>
	<tr>
		<th>users_id</th>
		<td><?=$galleries[0]->users_id; ?></td>
	</tr>

</table>
<ul>
	<li><?=anchor('admin/galleries', 'View all'); ?></li>
	<li><?=anchor('admin/galleries/edit/' . $galleries[0]->id, 'Edit'); ?></li>
	<li><?=anchor('admin/galleries/new', 'New'); ?></li>
	<li><?php 
		echo form_open(site_url('admin/galleries'));
		echo form_hidden('id', $galleries[0]->id);
		echo form_submit('delete', 'Delete');
		echo form_close();
	?></li>
</ul>
<?php $this->load->view('layout_parts/footer'); ?>