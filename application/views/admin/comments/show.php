<h2>Show</h2>
<table>
	<?=form_open(current_url()); ?>
	<tr>
		<th>id</th>
		<td><?=$comments[0]->id; ?></td>
	</tr>
	<tr>
		<th>title</th>
		<td><?=$comments[0]->title; ?></td>
	</tr>
	<tr>
		<th>content</th>
		<td><?=$comments[0]->content; ?></td>
	</tr>
	<tr>
		<th>created</th>
		<td><?=$comments[0]->created; ?></td>
	</tr>
	<tr>
		<th>active</th>
		<td><?=$comments[0]->active; ?></td>
	</tr>
	<tr>
		<th>users_id</th>
		<td><?=$comments[0]->users_id; ?></td>
	</tr>

</table>
<ul>
	<li><?=anchor('admin/comments', 'View all'); ?></li>
	<li><?=anchor('admin/comments/edit/' . $comments[0]->id, 'Edit'); ?></li>
	<li><?=anchor('admin/comments/new', 'New'); ?></li>
	<li><?php 
		echo form_open(site_url('admin/comments'));
		echo form_hidden('id', $comments[0]->id);
		echo form_submit('delete', 'Delete');
		echo form_close();
	?></li>
</ul>