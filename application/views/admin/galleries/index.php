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
		<th>created</th>
		<th>active</th>
		<th>comments</th>
		<th>categories_id</th>
		<th>users_id</th>
		<th colspan="3">actions</th>
	</tr>
	<?php foreach($galleries as $_galleries): ?>
	<tr>
		<th class="idcol"><?=$_galleries->id; ?></th>
		<td><?=$_galleries->title; ?></td>
		<td><?=$_galleries->seo_url; ?></td>
		<td><?=$_galleries->keywords; ?></td>
		<td><?=$_galleries->description; ?></td>
		<td><?=$_galleries->created; ?></td>
		<td><?=$_galleries->active; ?></td>
		<td><?=$_galleries->comments; ?></td>
		<td><?=$_galleries->categories_id; ?></td>
		<td><?=$_galleries->users_id; ?></td>
		<td><?=anchor('admin/galleries/' . $_galleries->id, 'view'); ?></td>
		<td><?=anchor('admin/galleries/edit/' . $_galleries->id, 'edit'); ?></td>
		<td><?php 
			echo form_open(current_url());
			echo form_hidden('id', $_galleries->id);
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
	<li><?=anchor('admin/galleries', 'View all'); ?></li>
	<li><?=anchor('admin/galleries/new', 'New'); ?></li>
</ul>