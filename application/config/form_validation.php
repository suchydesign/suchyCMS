<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['access/_update'] = array(
	array(
		'field' => 'id',
		'label' => 'id',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'select',
		'label' => 'select',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'create',
		'label' => 'create',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'update',
		'label' => 'update',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'delete',
		'label' => 'delete',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'applications_id',
		'label' => 'applications_id',
		'rules' => 'trim|required|integer|xss_clean'
	));

$config['access/_create'] = array(
	array(
		'field' => 'select',
		'label' => 'select',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'create',
		'label' => 'create',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'update',
		'label' => 'update',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'delete',
		'label' => 'delete',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'applications_id',
		'label' => 'applications_id',
		'rules' => 'trim|required|integer|xss_clean'
	));

$config['access/_destroy'] = array(
	array(
		'field' => 'id',
		'label' => 'id',
		'rules' => 'trim|required|integer|xss_clean'
	)
);

$config['applications/_update'] = array(
	array(
		'field' => 'id',
		'label' => 'id',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'name',
		'label' => 'name',
		'rules' => 'trim|required|xss_clean'
	));

$config['applications/_create'] = array(
	array(
		'field' => 'name',
		'label' => 'name',
		'rules' => 'trim|required|xss_clean'
	));

$config['applications/_destroy'] = array(
	array(
		'field' => 'id',
		'label' => 'id',
		'rules' => 'trim|required|integer|xss_clean'
	)
);

$config['articles/_update'] = array(
	array(
		'field' => 'id',
		'label' => 'id',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'title',
		'label' => 'title',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'seo_url',
		'label' => 'seo_url',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'keywords',
		'label' => 'keywords',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'description',
		'label' => 'description',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'content',
		'label' => 'content',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'active',
		'label' => 'active',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'comments',
		'label' => 'comments',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'categories_id',
		'label' => 'categories_id',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'uploaded_files_id',
		'label' => 'uploaded_files_id',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'users_id',
		'label' => 'users_id',
		'rules' => 'trim|required|integer|xss_clean'
	));

$config['articles/_create'] = array(
	array(
		'field' => 'title',
		'label' => 'title',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'seo_url',
		'label' => 'seo_url',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'keywords',
		'label' => 'keywords',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'description',
		'label' => 'description',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'content',
		'label' => 'content',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'active',
		'label' => 'active',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'comments',
		'label' => 'comments',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'categories_id',
		'label' => 'categories_id',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'uploaded_files_id',
		'label' => 'uploaded_files_id',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'users_id',
		'label' => 'users_id',
		'rules' => 'trim|required|integer|xss_clean'
	));

$config['articles/_destroy'] = array(
	array(
		'field' => 'id',
		'label' => 'id',
		'rules' => 'trim|required|integer|xss_clean'
	)
);

$config['categories/_update'] = array(
	array(
		'field' => 'id',
		'label' => 'id',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'title',
		'label' => 'title',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'seo_url',
		'label' => 'seo_url',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'keywords',
		'label' => 'keywords',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'description',
		'label' => 'description',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'active',
		'label' => 'active',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'order',
		'label' => 'order',
		'rules' => 'trim|required|integer|xss_clean'
	));

$config['categories/_create'] = array(
	array(
		'field' => 'title',
		'label' => 'title',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'seo_url',
		'label' => 'seo_url',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'keywords',
		'label' => 'keywords',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'description',
		'label' => 'description',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'active',
		'label' => 'active',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'order',
		'label' => 'order',
		'rules' => 'trim|required|integer|xss_clean'
	));

$config['categories/_destroy'] = array(
	array(
		'field' => 'id',
		'label' => 'id',
		'rules' => 'trim|required|integer|xss_clean'
	)
);

$config['comments/_update'] = array(
	array(
		'field' => 'id',
		'label' => 'id',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'title',
		'label' => 'title',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'content',
		'label' => 'content',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'active',
		'label' => 'active',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'users_id',
		'label' => 'users_id',
		'rules' => 'trim|required|integer|xss_clean'
	));

$config['comments/_create'] = array(
	array(
		'field' => 'title',
		'label' => 'title',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'content',
		'label' => 'content',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'active',
		'label' => 'active',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'users_id',
		'label' => 'users_id',
		'rules' => 'trim|required|integer|xss_clean'
	));

$config['comments/_destroy'] = array(
	array(
		'field' => 'id',
		'label' => 'id',
		'rules' => 'trim|required|integer|xss_clean'
	)
);

$config['file_types/_update'] = array(
	array(
		'field' => 'id',
		'label' => 'id',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'name',
		'label' => 'name',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'mime_type',
		'label' => 'mime_type',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'ext',
		'label' => 'ext',
		'rules' => 'trim|required|xss_clean'
	));

$config['file_types/_create'] = array(
	array(
		'field' => 'name',
		'label' => 'name',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'mime_type',
		'label' => 'mime_type',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'ext',
		'label' => 'ext',
		'rules' => 'trim|required|xss_clean'
	));

$config['file_types/_destroy'] = array(
	array(
		'field' => 'id',
		'label' => 'id',
		'rules' => 'trim|required|integer|xss_clean'
	)
);

$config['galleries/_update'] = array(
	array(
		'field' => 'id',
		'label' => 'id',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'title',
		'label' => 'title',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'seo_url',
		'label' => 'seo_url',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'keywords',
		'label' => 'keywords',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'description',
		'label' => 'description',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'active',
		'label' => 'active',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'comments',
		'label' => 'comments',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'categories_id',
		'label' => 'categories_id',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'users_id',
		'label' => 'users_id',
		'rules' => 'trim|required|integer|xss_clean'
	));

$config['galleries/_create'] = array(
	array(
		'field' => 'title',
		'label' => 'title',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'seo_url',
		'label' => 'seo_url',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'keywords',
		'label' => 'keywords',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'description',
		'label' => 'description',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'active',
		'label' => 'active',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'comments',
		'label' => 'comments',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'categories_id',
		'label' => 'categories_id',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'users_id',
		'label' => 'users_id',
		'rules' => 'trim|required|integer|xss_clean'
	));

$config['galleries/_destroy'] = array(
	array(
		'field' => 'id',
		'label' => 'id',
		'rules' => 'trim|required|integer|xss_clean'
	)
);

$config['groups/_update'] = array(
	array(
		'field' => 'id',
		'label' => 'id',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'name',
		'label' => 'name',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'active',
		'label' => 'active',
		'rules' => 'trim|required|integer|xss_clean'
	));

$config['groups/_create'] = array(
	array(
		'field' => 'name',
		'label' => 'name',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'active',
		'label' => 'active',
		'rules' => 'trim|required|integer|xss_clean'
	));

$config['groups/_destroy'] = array(
	array(
		'field' => 'id',
		'label' => 'id',
		'rules' => 'trim|required|integer|xss_clean'
	)
);

$config['static_pages/_update'] = array(
	array(
		'field' => 'id',
		'label' => 'id',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'title',
		'label' => 'title',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'seo_url',
		'label' => 'seo_url',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'keywords',
		'label' => 'keywords',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'description',
		'label' => 'description',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'content',
		'label' => 'content',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'active',
		'label' => 'active',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'order',
		'label' => 'order',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'users_id',
		'label' => 'users_id',
		'rules' => 'trim|required|integer|xss_clean'
	));

$config['static_pages/_create'] = array(
	array(
		'field' => 'title',
		'label' => 'title',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'seo_url',
		'label' => 'seo_url',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'keywords',
		'label' => 'keywords',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'description',
		'label' => 'description',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'content',
		'label' => 'content',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'active',
		'label' => 'active',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'order',
		'label' => 'order',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'users_id',
		'label' => 'users_id',
		'rules' => 'trim|required|integer|xss_clean'
	));

$config['static_pages/_destroy'] = array(
	array(
		'field' => 'id',
		'label' => 'id',
		'rules' => 'trim|required|integer|xss_clean'
	)
);

$config['uploaded_files/_update'] = array(
	array(
		'field' => 'id',
		'label' => 'id',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'title',
		'label' => 'title',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'description',
		'label' => 'description',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'filename',
		'label' => 'filename',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'active',
		'label' => 'active',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'comments',
		'label' => 'comments',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'users_id',
		'label' => 'users_id',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'file_types_id',
		'label' => 'file_types_id',
		'rules' => 'trim|required|integer|xss_clean'
	));

$config['uploaded_files/_create'] = array(
	array(
		'field' => 'title',
		'label' => 'title',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'description',
		'label' => 'description',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'filename',
		'label' => 'filename',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'active',
		'label' => 'active',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'comments',
		'label' => 'comments',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'users_id',
		'label' => 'users_id',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'file_types_id',
		'label' => 'file_types_id',
		'rules' => 'trim|required|integer|xss_clean'
	));

$config['uploaded_files/_destroy'] = array(
	array(
		'field' => 'id',
		'label' => 'id',
		'rules' => 'trim|required|integer|xss_clean'
	)
);

$config['users/_update'] = array(
	array(
		'field' => 'id',
		'label' => 'id',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'name',
		'label' => 'name',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'surname',
		'label' => 'surname',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'email',
		'label' => 'email',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'passwd',
		'label' => 'passwd',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'active',
		'label' => 'active',
		'rules' => 'trim|required|integer|xss_clean'
	));

$config['users/_create'] = array(
	array(
		'field' => 'name',
		'label' => 'name',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'surname',
		'label' => 'surname',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'email',
		'label' => 'email',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'passwd',
		'label' => 'passwd',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'active',
		'label' => 'active',
		'rules' => 'trim|required|integer|xss_clean'
	));

$config['users/_destroy'] = array(
	array(
		'field' => 'id',
		'label' => 'id',
		'rules' => 'trim|required|integer|xss_clean'
	)
);
