<?php $this->load->view('layout_parts/header'); ?>
<ul id="menu">
<?php $this->load->view('admin/layout_parts/menu'); ?>
</ul>
<h2>Show</h2>
<table>
	<?=form_open(current_url()); ?>
	<tr>
		<th>id</th>
		<td><?=$applications[0]->id; ?></td>
	</tr>
	<tr>
		<th>name</th>
		<td><?=$applications[0]->name; ?></td>
	</tr>

</table>
<ul>
	<li><?=anchor('admin/applications', 'View all'); ?></li>
	<li><?=anchor('admin/applications/edit/' . $applications[0]->id, 'Edit'); ?></li>
	<li><?=anchor('admin/applications/new', 'New'); ?></li>
	<li><?php 
		echo form_open(site_url('admin/applications'));
		echo form_hidden('id', $applications[0]->id);
		echo form_submit('delete', 'Delete');
		echo form_close();
	?></li>
</ul>
<?php $this->load->view('layout_parts/footer'); ?>