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
		<th>content</th>
		<th>created</th>
		<th>active</th>
		<th>users_id</th>
		<th colspan="3">actions</th>
	</tr>
	<?php foreach($comments as $_comments): ?>
	<tr>
		<th class="idcol"><?=$_comments->id; ?></th>
		<td><?=$_comments->title; ?></td>
		<td><?=$_comments->content; ?></td>
		<td><?=$_comments->created; ?></td>
		<td><?=$_comments->active; ?></td>
		<td><?=$_comments->users_id; ?></td>
		<td><?=anchor('admin/comments/' . $_comments->id, 'view'); ?></td>
		<td><?=anchor('admin/comments/edit/' . $_comments->id, 'edit'); ?></td>
		<td><?php 
			echo form_open(current_url());
			echo form_hidden('id', $_comments->id);
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
	<li><?=anchor('admin/comments', 'View all'); ?></li>
	<li><?=anchor('admin/comments/new', 'New'); ?></li>
</ul>