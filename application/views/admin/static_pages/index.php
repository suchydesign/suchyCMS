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
		<th>order</th>
		<th>users_id</th>
		<th colspan="3">actions</th>
	</tr>
	<?php foreach($static_pages as $_static_pages): ?>
	<tr>
		<th class="idcol"><?=$_static_pages->id; ?></th>
		<td><?=$_static_pages->title; ?></td>
		<td><?=$_static_pages->seo_url; ?></td>
		<td><?=$_static_pages->keywords; ?></td>
		<td><?=$_static_pages->description; ?></td>
		<td><?=$_static_pages->content; ?></td>
		<td><?=$_static_pages->created; ?></td>
		<td><?=$_static_pages->active; ?></td>
		<td><?=$_static_pages->order; ?></td>
		<td><?=$_static_pages->users_id; ?></td>
		<td><?=anchor('admin/static_pages/' . $_static_pages->id, 'view'); ?></td>
		<td><?=anchor('admin/static_pages/edit/' . $_static_pages->id, 'edit'); ?></td>
		<td><?php 
			echo form_open(current_url());
			echo form_hidden('id', $_static_pages->id);
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
	<li><?=anchor('admin/static_pages', 'View all'); ?></li>
	<li><?=anchor('admin/static_pages/new', 'New'); ?></li>
</ul>