<h2>Show</h2>
<table>
	<?=form_open(current_url()); ?>
	<tr>
		<th>id</th>
		<td><?=$access[0]->id; ?></td>
	</tr>
	<tr>
		<th>select</th>
		<td><?=yes_no($this, $access[0]->select); ?></td>
	</tr>
	<tr>
		<th>create</th>
		<td><?=yes_no($this, $access[0]->create); ?></td>
	</tr>
	<tr>
		<th>update</th>
		<td><?=yes_no($this, $access[0]->update); ?></td>
	</tr>
	<tr>
		<th>delete</th>
		<td><?=yes_no($this, $access[0]->delete); ?></td>
	</tr>
	<tr>
		<th>update_all</th>
		<td><?=yes_no($this, $access[0]->update_all); ?></td>
	</tr>
	<tr>
		<th>delete_all</th>
		<td><?=yes_no($this, $access[0]->delete_all); ?></td>
	</tr>
	<tr>
		<th>groups_id</th>
		<td><?=$groups[0]->name; ?></td>
	</tr>
	<tr>
		<th>applications_id</th>
		<td><?=$applications[0]->name; ?></td>
	</tr>

</table>
<ul>
	<li><?=anchor('admin/access', 'View all'); ?></li>
	<li><?=anchor('admin/access/edit/' . $access[0]->id, 'Edit'); ?></li>
	<li><?=anchor('admin/access/new', 'New'); ?></li>
	<li><?php 
		echo form_open(site_url('admin/access'));
		echo form_hidden('id', $access[0]->id);
		echo form_submit('delete', 'Delete');
		echo form_close();
	?></li>
</ul>