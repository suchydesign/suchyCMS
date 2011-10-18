<h2>Edit</h2>
<div id="error_message">	
	<?php if(isset($success)): ?>
		<p class="success"><?=$success; ?></p>
	<?php endif; ?>
	<?=validation_errors(); ?>
</div>
<table>
	<?=form_open(current_url()); ?>
		<?=form_hidden('id', $applications[0]->id); ?>
	<tr>
		<th><label for="name">name</label></th>
		<td><?=form_input('name', ($this->input->post('name') ? $this->input->post('name') : $applications[0]->name)); ?></td>
	</tr>
	<tr>
		<td colspan="2"><?=form_submit('update', 'Update'); ?></td>
	</tr>
	<?=form_close(); ?>
</table>
<ul>
	<li><?=anchor('admin/applications', 'View all'); ?></li>
	<li><?=anchor('admin/applications/' . $applications[0]->id, 'View'); ?></li>
	<li><?=anchor('admin/applications/new', 'New'); ?></li>
	<li><?php 
		echo form_open(site_url('admin/applications'));
		echo form_hidden('id', $applications[0]->id);
		echo form_submit('delete', 'Delete');
		echo form_close();
	?></li>
</ul>