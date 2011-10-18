<h2>List</h2>
<div id="error_message">	
	<?php if(isset($success)): ?>
		<p class="success"><?=$success; ?></p>
	<?php endif; ?>
	<?=validation_errors(); ?>
</div>
<ul class="paginator">
	<?=$this->pagination->create_links(); ?>
</ul>
<table>
	<tr>
		<th>id</th>
		<th>title</th>
		<th>seo_url</th>
		<th>keywords</th>
		<th>description</th>
		<th>content</th>
		<th>created</th>
		<th>active</th>
		<th>comments</th>
		<th>categories_id</th>
		<th>uploaded_files_id</th>
		<th>users_id</th>
		<th colspan="3">actions</th>
	</tr>
	<?php foreach($articles as $_articles): ?>
	<tr>
		<td><?=$_articles->id; ?></td>
		<td><?=$_articles->title; ?></td>
		<td><?=$_articles->seo_url; ?></td>
		<td><?=$_articles->keywords; ?></td>
		<td><?=$_articles->description; ?></td>
		<td><?=$_articles->content; ?></td>
		<td><?=$_articles->created; ?></td>
		<td><?=$_articles->active; ?></td>
		<td><?=$_articles->comments; ?></td>
		<td><?=$_articles->categories_id; ?></td>
		<td><?=$_articles->uploaded_files_id; ?></td>
		<td><?=$_articles->users_id; ?></td>
		<td><?=anchor('admin/articles/' . $_articles->id, 'view'); ?></td>
		<td><?=anchor('admin/articles/edit/' . $_articles->id, 'edit'); ?></td>
		<td><?php 
			echo form_open(current_url());
			echo form_hidden('id', $_articles->id);
			echo form_submit('delete', 'Delete');
			echo form_close();
		?></td>
	</tr>
	<?php endforeach; ?>
</table>
<ul class="paginator">
	<?=$this->pagination->create_links(); ?>
</ul>
<ul>
	<li><?=anchor('admin/articles', 'View all'); ?></li>
	<li><?=anchor('admin/articles/new', 'New'); ?></li>
</ul>