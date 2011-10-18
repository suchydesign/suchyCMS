<h2>Show</h2>
<table>
	<?=form_open(current_url()); ?>
	<tr>
		<th>id</th>
		<td><?=$uploaded_files[0]->id; ?></td>
	</tr>
	<tr>
		<th>title</th>
		<td><?=$uploaded_files[0]->title; ?></td>
	</tr>
	<tr>
		<th>description</th>
		<td><?=$uploaded_files[0]->description; ?></td>
	</tr>
	<tr>
		<th>filename</th>
		<td><?=$uploaded_files[0]->filename; ?></td>
	</tr>
	<tr>
		<th>created</th>
		<td><?=$uploaded_files[0]->created; ?></td>
	</tr>
	<tr>
		<th>active</th>
		<td><?=$uploaded_files[0]->active; ?></td>
	</tr>
	<tr>
		<th>comments</th>
		<td><?=$uploaded_files[0]->comments; ?></td>
	</tr>
	<tr>
		<th>users_id</th>
		<td><?=$uploaded_files[0]->users_id; ?></td>
	</tr>
	<tr>
		<th>file_types_id</th>
		<td><?=$uploaded_files[0]->file_types_id; ?></td>
	</tr>

</table>
<ul>
	<li><?=anchor('admin/uploaded_files', 'View all'); ?></li>
	<li><?=anchor('admin/uploaded_files/edit/' . $uploaded_files[0]->id, 'Edit'); ?></li>
	<li><?=anchor('admin/uploaded_files/new', 'New'); ?></li>
	<li><?php 
		echo form_open(site_url('admin/uploaded_files'));
		echo form_hidden('id', $uploaded_files[0]->id);
		echo form_submit('delete', 'Delete');
		echo form_close();
	?></li>
</ul>