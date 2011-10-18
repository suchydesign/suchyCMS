<h2>Show</h2>
<table>
	<?=form_open(current_url()); ?>
	<tr>
		<th>id</th>
		<td><?=$users[0]->id; ?></td>
	</tr>
	<tr>
		<th>name</th>
		<td><?=$users[0]->name; ?></td>
	</tr>
	<tr>
		<th>surname</th>
		<td><?=$users[0]->surname; ?></td>
	</tr>
	<tr>
		<th>email</th>
		<td><?=$users[0]->email; ?></td>
	</tr>
	<tr>
		<th>passwd</th>
		<td><?=$users[0]->passwd; ?></td>
	</tr>
	<tr>
		<th>created</th>
		<td><?=$users[0]->created; ?></td>
	</tr>
	<tr>
		<th>active</th>
		<td><?=$users[0]->active; ?></td>
	</tr>

</table>
<ul>
	<li><?=anchor('admin/users', 'View all'); ?></li>
	<li><?=anchor('admin/users/edit/' . $users[0]->id, 'Edit'); ?></li>
	<li><?=anchor('admin/users/new', 'New'); ?></li>
	<li><?php 
		echo form_open(site_url('admin/users'));
		echo form_hidden('id', $users[0]->id);
		echo form_submit('delete', 'Delete');
		echo form_close();
	?></li>
</ul>