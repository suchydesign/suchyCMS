<h2>Edit</h2>
<div id="error_message">	
	<?php if(isset($success)): ?>
		<p class="success"><?=$success; ?></p>
	<?php endif; ?>
	<?=validation_errors(); ?>
</div>
<table>
	<?=form_open(current_url()); ?>
		<?=form_hidden('id', $access[0]->id); ?>
	<tr>
		<th><label for="select">select</label></th>
		<td><?=form_input('select', ($this->input->post('select') ? $this->input->post('select') : $access[0]->select)); ?></td>
	</tr>
	<tr>
		<th><label for="create">create</label></th>
		<td><?=form_input('create', ($this->input->post('create') ? $this->input->post('create') : $access[0]->create)); ?></td>
	</tr>
	<tr>
		<th><label for="update">update</label></th>
		<td><?=form_input('update', ($this->input->post('update') ? $this->input->post('update') : $access[0]->update)); ?></td>
	</tr>
	<tr>
		<th><label for="delete">delete</label></th>
		<td><?=form_input('delete', ($this->input->post('delete') ? $this->input->post('delete') : $access[0]->delete)); ?></td>
	</tr>

	<tr>
		<th><label for="applications_id">applications_id</label></th>
		<td>			
			<?php if(!empty($applications)): ?>
			<select name="applications_id">
			<?php foreach($applications as $_applications): ?>
				<option value="<?=$_applications->id; ?>" <?php if($_applications->id == ($this->input->post('applications_id') ? $this->input->post('applications_id') : $access[0]->applications_id)) echo "selected=\"selected\""; ?>><?=$_applications->name; ?></option>
			<?php endforeach; ?>
			</select>
			<?php else: ?>
				<?=form_input('applications_id', ($this->input->post('applications_id') ? $this->input->post('applications_id') : $access[0]->applications_id)); ?>
			<?php endif; ?>
		</td>
	</tr>	<tr>
		<td colspan="2">
			<?=form_submit('update_acc', 'Update'); ?></td>
	</tr>
	<?=form_close(); ?>
</table>
<ul>
	<li><?=anchor('admin/access', 'View all'); ?></li>
	<li><?=anchor('admin/access/' . $access[0]->id, 'View'); ?></li>
	<li><?=anchor('admin/access/new', 'New'); ?></li>
	<li><?php 
		echo form_open(site_url('admin/access'));
		echo form_hidden('id', $access[0]->id);
		echo form_submit('delete', 'Delete');
		echo form_close();
	?></li>
</ul>