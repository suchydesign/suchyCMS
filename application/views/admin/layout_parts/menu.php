<ul id="menu">	
	<li><?=anchor('admin/articles', 'Content'); ?>
		<ul>
			<li><?=anchor('admin/articles', 'Articles'); ?></li>
			<li><?=anchor('admin/galleries', 'Galleries'); ?></li>
			<li><?=anchor('admin/static_pages', 'Static_pages'); ?></li>
			<li><?=anchor('admin/categories', 'Categories'); ?></li>
			<li><?=anchor('admin/comments', 'Comments'); ?></li>
		</ul>
	</li>
	<li><?=anchor('admin/uploaded_files', 'Files'); ?>
		<ul>
			<li><?=anchor('admin/uploaded_files', 'Uploaded_files'); ?></li>
			<li><?=anchor('admin/file_types', 'File_types'); ?></li>
		</ul>
	</li>
	<li><?=anchor('admin/users', 'Users'); ?>
		<ul>
			<li><?=anchor('admin/users', 'Users'); ?></li>
			<li><?=anchor('admin/groups', 'Groups'); ?></li>
		</ul>
	</li>
	<li><?=anchor('admin/applications', 'System'); ?>
		<ul>
			<li><?=anchor('admin/applications', 'Applications'); ?></li>
			<li><?=anchor('admin/access', 'Access'); ?></li>
		</ul>	
	</li>	
</ul>