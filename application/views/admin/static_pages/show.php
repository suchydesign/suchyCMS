<h2>Show</h2>
<table>
	<?=form_open(current_url()); ?>
	<tr>
		<th>id</th>
		<td><?=$static_pages[0]->id; ?></td>
	</tr>
	<tr>
		<th>title</th>
		<td><?=$static_pages[0]->title; ?></td>
	</tr>
	<tr>
		<th>seo_url</th>
		<td><?=$static_pages[0]->seo_url; ?></td>
	</tr>
	<tr>
		<th>keywords</th>
		<td><?=$static_pages[0]->keywords; ?></td>
	</tr>
	<tr>
		<th>description</th>
		<td><?=$static_pages[0]->description; ?></td>
	</tr>
	<tr>
		<th>content</th>
		<td><?=$static_pages[0]->content; ?></td>
	</tr>
	<tr>
		<th>created</th>
		<td><?=$static_pages[0]->created; ?></td>
	</tr>
	<tr>
		<th>active</th>
		<td><?=$static_pages[0]->active; ?></td>
	</tr>
	<tr>
		<th>order</th>
		<td><?=$static_pages[0]->order; ?></td>
	</tr>
	<tr>
		<th>users_id</th>
		<td><?=$static_pages[0]->users_id; ?></td>
	</tr>

</table>
<ul>
	<li><?=anchor('admin/static_pages', 'View all'); ?></li>
	<li><?=anchor('admin/static_pages/edit/' . $static_pages[0]->id, 'Edit'); ?></li>
	<li><?=anchor('admin/static_pages/new', 'New'); ?></li>
	<li><?php 
		echo form_open(site_url('admin/static_pages'));
		echo form_hidden('id', $static_pages[0]->id);
		echo form_submit('delete', 'Delete');
		echo form_close();
	?></li>
</ul>