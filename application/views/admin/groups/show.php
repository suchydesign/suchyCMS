<?php $this->load->view('layout_parts/header'); ?>
<ul id="menu">
<?php $this->load->view('admin/layout_parts/menu'); ?>
</ul>
<h2>Show</h2>
<table>
	<?=form_open(current_url()); ?>
	<tr>
		<th>id</th>
		<td><?=$groups[0]->id; ?></td>
	</tr>
	<tr>
		<th>name</th>
		<td><?=$groups[0]->name; ?></td>
	</tr>
	<tr>
		<th>created</th>
		<td><?=$groups[0]->created; ?></td>
	</tr>
	<tr>
		<th>active</th>
		<td><?=$groups[0]->active; ?></td>
	</tr>

</table>
<ul>
	<li><?=anchor('admin/groups', 'View all'); ?></li>
	<li><?=anchor('admin/groups/edit/' . $groups[0]->id, 'Edit'); ?></li>
	<li><?=anchor('admin/groups/new', 'New'); ?></li>
	<li><?php 
		echo form_open(site_url('admin/groups'));
		echo form_hidden('id', $groups[0]->id);
		echo form_submit('delete', 'Delete');
		echo form_close();
	?></li>
</ul>
<?php $this->load->view('layout_parts/footer'); ?>