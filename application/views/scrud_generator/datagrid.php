<?php $this->load->view('layout_parts/header'); ?>
<ul id="menu">
<?php $this->load->view('layout_parts/menu'); ?>
</ul>
<h2>DataGrid for <?=$tableName; ?></h2>
<?=form_open(current_url()); ?>
<table>
	<?php foreach($table as $row): ?>
	<?php $id = $row->id; ?>
	<tr>
		<?php foreach($row as $key => $value): ?>
			<td><?=form_input($key . '[' . $id . ']', $value); ?></td>
		<?php endforeach; ?>
	</tr>
	<?php endforeach; ?>
</table>
<?=form_submit('updateGrid', 'Update Grid'); ?>
<?=form_close(); ?>
<?php $this->load->view('layout_parts/footer'); ?>