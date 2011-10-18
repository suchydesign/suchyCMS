<h2>Show</h2>
<table>
	<?=form_open(current_url()); ?>
	<tr>
		<th>id</th>
		<td><?=$file_types[0]->id; ?></td>
	</tr>
	<tr>
		<th>name</th>
		<td><?=$file_types[0]->name; ?></td>
	</tr>
	<tr>
		<th>mime_type</th>
		<td><?=$file_types[0]->mime_type; ?></td>
	</tr>
	<tr>
		<th>ext</th>
		<td><?=$file_types[0]->ext; ?></td>
	</tr>

</table>
<ul>
	<li><?=anchor('admin/file_types', 'View all'); ?></li>
	<li><?=anchor('admin/file_types/edit/' . $file_types[0]->id, 'Edit'); ?></li>
	<li><?=anchor('admin/file_types/new', 'New'); ?></li>
	<li><?php 
		echo form_open(site_url('admin/file_types'));
		echo form_hidden('id', $file_types[0]->id);
		echo form_submit('delete', 'Delete');
		echo form_close();
	?></li>
</ul>