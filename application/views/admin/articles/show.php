<h2>Show</h2>
<table>
	<?=form_open(current_url()); ?>
	<tr>
		<th>id</th>
		<td><?=$articles[0]->id; ?></td>
	</tr>
	<tr>
		<th>title</th>
		<td><?=$articles[0]->title; ?></td>
	</tr>
	<tr>
		<th>seo_url</th>
		<td><?=$articles[0]->seo_url; ?></td>
	</tr>
	<tr>
		<th>keywords</th>
		<td><?=$articles[0]->keywords; ?></td>
	</tr>
	<tr>
		<th>description</th>
		<td><?=$articles[0]->description; ?></td>
	</tr>
	<tr>
		<th>content</th>
		<td><?=$articles[0]->content; ?></td>
	</tr>
	<tr>
		<th>created</th>
		<td><?=$articles[0]->created; ?></td>
	</tr>
	<tr>
		<th>active</th>
		<td><?=$articles[0]->active; ?></td>
	</tr>
	<tr>
		<th>comments</th>
		<td><?=$articles[0]->comments; ?></td>
	</tr>
	<tr>
		<th>categories_id</th>
		<td><?=$articles[0]->categories_id; ?></td>
	</tr>
	<tr>
		<th>uploaded_files_id</th>
		<td><?=$articles[0]->uploaded_files_id; ?></td>
	</tr>
	<tr>
		<th>users_id</th>
		<td><?=$articles[0]->users_id; ?></td>
	</tr>

</table>
<ul>
	<li><?=anchor('admin/articles', 'View all'); ?></li>
	<li><?=anchor('admin/articles/edit/' . $articles[0]->id, 'Edit'); ?></li>
	<li><?=anchor('admin/articles/new', 'New'); ?></li>
	<li><?php 
		echo form_open(site_url('admin/articles'));
		echo form_hidden('id', $articles[0]->id);
		echo form_submit('delete', 'Delete');
		echo form_close();
	?></li>
</ul>