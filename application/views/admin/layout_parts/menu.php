<ul id="menu">	
	<li><?=anchor('admin/access', 'Access'); ?></li>
	<li><?=anchor('admin/applications', 'Applications'); ?></li>
	<li><?=anchor('admin/articles', 'Articles'); ?></li>
	<li><?=anchor('admin/categories', 'Categories'); ?></li>
	<li><?=anchor('admin/comments', 'Comments'); ?></li>
	<li><?=anchor('admin/file_types', 'File_types'); ?></li>
	<li><?=anchor('admin/galleries', 'Galleries'); ?></li>
	<li><?=anchor('admin/groups', 'Groups'); ?></li>
	<li><?=anchor('admin/static_pages', 'Static_pages'); ?></li>
	<li><?=anchor('admin/uploaded_files', 'Uploaded_files'); ?></li>
	<li><?=anchor('admin/users', 'Users'); ?></li>
	<li><?=form_open(current_url()); ?>
		<?=form_submit('logout', 'Logout'); ?>
		<?=form_close(); ?>
	</li>
</ul>