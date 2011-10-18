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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'files_id',
		'label' => 'files_id',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'files_id',
		'label' => 'files_id',
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

$config['articles_has_comments/_update'] = array(
	array(
		'field' => 'articles_id',
		'label' => 'articles_id',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'comments_id',
		'label' => 'comments_id',
		'rules' => 'trim|required|integer|xss_clean'
	)
);

$config['articles_has_comments/_create'] = array(
	array(
		'field' => 'articles_id',
		'label' => 'articles_id',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'comments_id',
		'label' => 'comments_id',
		'rules' => 'trim|required|integer|xss_clean'
	)
);

$config['articles_has_comments/_destroy'] = array(
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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

$config['files/_update'] = array(
	array(
		'field' => 'FILE_ID',
		'label' => 'FILE_ID',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'FILE_NAME',
		'label' => 'FILE_NAME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'FILE_TYPE',
		'label' => 'FILE_TYPE',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'TABLESPACE_NAME',
		'label' => 'TABLESPACE_NAME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'TABLE_CATALOG',
		'label' => 'TABLE_CATALOG',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'TABLE_SCHEMA',
		'label' => 'TABLE_SCHEMA',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'TABLE_NAME',
		'label' => 'TABLE_NAME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'LOGFILE_GROUP_NAME',
		'label' => 'LOGFILE_GROUP_NAME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'LOGFILE_GROUP_NUMBER',
		'label' => 'LOGFILE_GROUP_NUMBER',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'ENGINE',
		'label' => 'ENGINE',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'FULLTEXT_KEYS',
		'label' => 'FULLTEXT_KEYS',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'DELETED_ROWS',
		'label' => 'DELETED_ROWS',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'UPDATE_COUNT',
		'label' => 'UPDATE_COUNT',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'FREE_EXTENTS',
		'label' => 'FREE_EXTENTS',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'TOTAL_EXTENTS',
		'label' => 'TOTAL_EXTENTS',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'EXTENT_SIZE',
		'label' => 'EXTENT_SIZE',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'INITIAL_SIZE',
		'label' => 'INITIAL_SIZE',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'MAXIMUM_SIZE',
		'label' => 'MAXIMUM_SIZE',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'AUTOEXTEND_SIZE',
		'label' => 'AUTOEXTEND_SIZE',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'CREATION_TIME',
		'label' => 'CREATION_TIME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'LAST_UPDATE_TIME',
		'label' => 'LAST_UPDATE_TIME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'LAST_ACCESS_TIME',
		'label' => 'LAST_ACCESS_TIME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'RECOVER_TIME',
		'label' => 'RECOVER_TIME',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'TRANSACTION_COUNTER',
		'label' => 'TRANSACTION_COUNTER',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'VERSION',
		'label' => 'VERSION',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'ROW_FORMAT',
		'label' => 'ROW_FORMAT',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'TABLE_ROWS',
		'label' => 'TABLE_ROWS',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'AVG_ROW_LENGTH',
		'label' => 'AVG_ROW_LENGTH',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'DATA_LENGTH',
		'label' => 'DATA_LENGTH',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'MAX_DATA_LENGTH',
		'label' => 'MAX_DATA_LENGTH',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'INDEX_LENGTH',
		'label' => 'INDEX_LENGTH',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'DATA_FREE',
		'label' => 'DATA_FREE',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'CREATE_TIME',
		'label' => 'CREATE_TIME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'UPDATE_TIME',
		'label' => 'UPDATE_TIME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'CHECK_TIME',
		'label' => 'CHECK_TIME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'CHECKSUM',
		'label' => 'CHECKSUM',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'STATUS',
		'label' => 'STATUS',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'EXTRA',
		'label' => 'EXTRA',
		'rules' => 'trim|required|xss_clean'
	),
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
		'field' => 'created',
		'label' => 'created',
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
	));

$config['files/_create'] = array(
	array(
		'field' => 'FILE_ID',
		'label' => 'FILE_ID',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'FILE_NAME',
		'label' => 'FILE_NAME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'FILE_TYPE',
		'label' => 'FILE_TYPE',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'TABLESPACE_NAME',
		'label' => 'TABLESPACE_NAME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'TABLE_CATALOG',
		'label' => 'TABLE_CATALOG',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'TABLE_SCHEMA',
		'label' => 'TABLE_SCHEMA',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'TABLE_NAME',
		'label' => 'TABLE_NAME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'LOGFILE_GROUP_NAME',
		'label' => 'LOGFILE_GROUP_NAME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'LOGFILE_GROUP_NUMBER',
		'label' => 'LOGFILE_GROUP_NUMBER',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'ENGINE',
		'label' => 'ENGINE',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'FULLTEXT_KEYS',
		'label' => 'FULLTEXT_KEYS',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'DELETED_ROWS',
		'label' => 'DELETED_ROWS',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'UPDATE_COUNT',
		'label' => 'UPDATE_COUNT',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'FREE_EXTENTS',
		'label' => 'FREE_EXTENTS',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'TOTAL_EXTENTS',
		'label' => 'TOTAL_EXTENTS',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'EXTENT_SIZE',
		'label' => 'EXTENT_SIZE',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'INITIAL_SIZE',
		'label' => 'INITIAL_SIZE',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'MAXIMUM_SIZE',
		'label' => 'MAXIMUM_SIZE',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'AUTOEXTEND_SIZE',
		'label' => 'AUTOEXTEND_SIZE',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'CREATION_TIME',
		'label' => 'CREATION_TIME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'LAST_UPDATE_TIME',
		'label' => 'LAST_UPDATE_TIME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'LAST_ACCESS_TIME',
		'label' => 'LAST_ACCESS_TIME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'RECOVER_TIME',
		'label' => 'RECOVER_TIME',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'TRANSACTION_COUNTER',
		'label' => 'TRANSACTION_COUNTER',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'VERSION',
		'label' => 'VERSION',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'ROW_FORMAT',
		'label' => 'ROW_FORMAT',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'TABLE_ROWS',
		'label' => 'TABLE_ROWS',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'AVG_ROW_LENGTH',
		'label' => 'AVG_ROW_LENGTH',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'DATA_LENGTH',
		'label' => 'DATA_LENGTH',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'MAX_DATA_LENGTH',
		'label' => 'MAX_DATA_LENGTH',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'INDEX_LENGTH',
		'label' => 'INDEX_LENGTH',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'DATA_FREE',
		'label' => 'DATA_FREE',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'CREATE_TIME',
		'label' => 'CREATE_TIME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'UPDATE_TIME',
		'label' => 'UPDATE_TIME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'CHECK_TIME',
		'label' => 'CHECK_TIME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'CHECKSUM',
		'label' => 'CHECKSUM',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'STATUS',
		'label' => 'STATUS',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'EXTRA',
		'label' => 'EXTRA',
		'rules' => 'trim|required|xss_clean'
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
		'field' => 'created',
		'label' => 'created',
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
	));

$config['files/_destroy'] = array(
	array(
		'field' => 'id',
		'label' => 'id',
		'rules' => 'trim|required|integer|xss_clean'
	)
);

$config['files_has_comments/_update'] = array(
	array(
		'field' => 'files_id',
		'label' => 'files_id',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'comments_id',
		'label' => 'comments_id',
		'rules' => 'trim|required|integer|xss_clean'
	)
);

$config['files_has_comments/_create'] = array(
	array(
		'field' => 'files_id',
		'label' => 'files_id',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'comments_id',
		'label' => 'comments_id',
		'rules' => 'trim|required|integer|xss_clean'
	)
);

$config['files_has_comments/_destroy'] = array(
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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

$config['galleries_has_comments/_update'] = array(
	array(
		'field' => 'galleries_id',
		'label' => 'galleries_id',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'comments_id',
		'label' => 'comments_id',
		'rules' => 'trim|required|integer|xss_clean'
	)
);

$config['galleries_has_comments/_create'] = array(
	array(
		'field' => 'galleries_id',
		'label' => 'galleries_id',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'comments_id',
		'label' => 'comments_id',
		'rules' => 'trim|required|integer|xss_clean'
	)
);

$config['galleries_has_comments/_destroy'] = array(
	array(
		'field' => 'id',
		'label' => 'id',
		'rules' => 'trim|required|integer|xss_clean'
	)
);

$config['galleries_has_files/_update'] = array(
	array(
		'field' => 'galleries_id',
		'label' => 'galleries_id',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'files_id',
		'label' => 'files_id',
		'rules' => 'trim|required|integer|xss_clean'
	)
);

$config['galleries_has_files/_create'] = array(
	array(
		'field' => 'galleries_id',
		'label' => 'galleries_id',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'files_id',
		'label' => 'files_id',
		'rules' => 'trim|required|integer|xss_clean'
	)
);

$config['galleries_has_files/_destroy'] = array(
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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

$config['groups_has_access/_update'] = array(
	array(
		'field' => 'groups_id',
		'label' => 'groups_id',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'access_id',
		'label' => 'access_id',
		'rules' => 'trim|required|integer|xss_clean'
	)
);

$config['groups_has_access/_create'] = array(
	array(
		'field' => 'groups_id',
		'label' => 'groups_id',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'access_id',
		'label' => 'access_id',
		'rules' => 'trim|required|integer|xss_clean'
	)
);

$config['groups_has_access/_destroy'] = array(
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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

$config['users_has_groups/_update'] = array(
	array(
		'field' => 'users_id',
		'label' => 'users_id',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'groups_id',
		'label' => 'groups_id',
		'rules' => 'trim|required|integer|xss_clean'
	)
);

$config['users_has_groups/_create'] = array(
	array(
		'field' => 'users_id',
		'label' => 'users_id',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'groups_id',
		'label' => 'groups_id',
		'rules' => 'trim|required|integer|xss_clean'
	)
);

$config['users_has_groups/_destroy'] = array(
	array(
		'field' => 'id',
		'label' => 'id',
		'rules' => 'trim|required|integer|xss_clean'
	)
);

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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'files_id',
		'label' => 'files_id',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'files_id',
		'label' => 'files_id',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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

$config['files/_update'] = array(
	array(
		'field' => 'FILE_ID',
		'label' => 'FILE_ID',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'FILE_NAME',
		'label' => 'FILE_NAME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'FILE_TYPE',
		'label' => 'FILE_TYPE',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'TABLESPACE_NAME',
		'label' => 'TABLESPACE_NAME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'TABLE_CATALOG',
		'label' => 'TABLE_CATALOG',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'TABLE_SCHEMA',
		'label' => 'TABLE_SCHEMA',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'TABLE_NAME',
		'label' => 'TABLE_NAME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'LOGFILE_GROUP_NAME',
		'label' => 'LOGFILE_GROUP_NAME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'LOGFILE_GROUP_NUMBER',
		'label' => 'LOGFILE_GROUP_NUMBER',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'ENGINE',
		'label' => 'ENGINE',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'FULLTEXT_KEYS',
		'label' => 'FULLTEXT_KEYS',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'DELETED_ROWS',
		'label' => 'DELETED_ROWS',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'UPDATE_COUNT',
		'label' => 'UPDATE_COUNT',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'FREE_EXTENTS',
		'label' => 'FREE_EXTENTS',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'TOTAL_EXTENTS',
		'label' => 'TOTAL_EXTENTS',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'EXTENT_SIZE',
		'label' => 'EXTENT_SIZE',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'INITIAL_SIZE',
		'label' => 'INITIAL_SIZE',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'MAXIMUM_SIZE',
		'label' => 'MAXIMUM_SIZE',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'AUTOEXTEND_SIZE',
		'label' => 'AUTOEXTEND_SIZE',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'CREATION_TIME',
		'label' => 'CREATION_TIME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'LAST_UPDATE_TIME',
		'label' => 'LAST_UPDATE_TIME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'LAST_ACCESS_TIME',
		'label' => 'LAST_ACCESS_TIME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'RECOVER_TIME',
		'label' => 'RECOVER_TIME',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'TRANSACTION_COUNTER',
		'label' => 'TRANSACTION_COUNTER',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'VERSION',
		'label' => 'VERSION',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'ROW_FORMAT',
		'label' => 'ROW_FORMAT',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'TABLE_ROWS',
		'label' => 'TABLE_ROWS',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'AVG_ROW_LENGTH',
		'label' => 'AVG_ROW_LENGTH',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'DATA_LENGTH',
		'label' => 'DATA_LENGTH',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'MAX_DATA_LENGTH',
		'label' => 'MAX_DATA_LENGTH',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'INDEX_LENGTH',
		'label' => 'INDEX_LENGTH',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'DATA_FREE',
		'label' => 'DATA_FREE',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'CREATE_TIME',
		'label' => 'CREATE_TIME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'UPDATE_TIME',
		'label' => 'UPDATE_TIME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'CHECK_TIME',
		'label' => 'CHECK_TIME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'CHECKSUM',
		'label' => 'CHECKSUM',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'STATUS',
		'label' => 'STATUS',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'EXTRA',
		'label' => 'EXTRA',
		'rules' => 'trim|required|xss_clean'
	),
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
		'field' => 'created',
		'label' => 'created',
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
	));

$config['files/_create'] = array(
	array(
		'field' => 'FILE_ID',
		'label' => 'FILE_ID',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'FILE_NAME',
		'label' => 'FILE_NAME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'FILE_TYPE',
		'label' => 'FILE_TYPE',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'TABLESPACE_NAME',
		'label' => 'TABLESPACE_NAME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'TABLE_CATALOG',
		'label' => 'TABLE_CATALOG',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'TABLE_SCHEMA',
		'label' => 'TABLE_SCHEMA',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'TABLE_NAME',
		'label' => 'TABLE_NAME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'LOGFILE_GROUP_NAME',
		'label' => 'LOGFILE_GROUP_NAME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'LOGFILE_GROUP_NUMBER',
		'label' => 'LOGFILE_GROUP_NUMBER',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'ENGINE',
		'label' => 'ENGINE',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'FULLTEXT_KEYS',
		'label' => 'FULLTEXT_KEYS',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'DELETED_ROWS',
		'label' => 'DELETED_ROWS',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'UPDATE_COUNT',
		'label' => 'UPDATE_COUNT',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'FREE_EXTENTS',
		'label' => 'FREE_EXTENTS',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'TOTAL_EXTENTS',
		'label' => 'TOTAL_EXTENTS',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'EXTENT_SIZE',
		'label' => 'EXTENT_SIZE',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'INITIAL_SIZE',
		'label' => 'INITIAL_SIZE',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'MAXIMUM_SIZE',
		'label' => 'MAXIMUM_SIZE',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'AUTOEXTEND_SIZE',
		'label' => 'AUTOEXTEND_SIZE',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'CREATION_TIME',
		'label' => 'CREATION_TIME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'LAST_UPDATE_TIME',
		'label' => 'LAST_UPDATE_TIME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'LAST_ACCESS_TIME',
		'label' => 'LAST_ACCESS_TIME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'RECOVER_TIME',
		'label' => 'RECOVER_TIME',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'TRANSACTION_COUNTER',
		'label' => 'TRANSACTION_COUNTER',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'VERSION',
		'label' => 'VERSION',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'ROW_FORMAT',
		'label' => 'ROW_FORMAT',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'TABLE_ROWS',
		'label' => 'TABLE_ROWS',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'AVG_ROW_LENGTH',
		'label' => 'AVG_ROW_LENGTH',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'DATA_LENGTH',
		'label' => 'DATA_LENGTH',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'MAX_DATA_LENGTH',
		'label' => 'MAX_DATA_LENGTH',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'INDEX_LENGTH',
		'label' => 'INDEX_LENGTH',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'DATA_FREE',
		'label' => 'DATA_FREE',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'CREATE_TIME',
		'label' => 'CREATE_TIME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'UPDATE_TIME',
		'label' => 'UPDATE_TIME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'CHECK_TIME',
		'label' => 'CHECK_TIME',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'CHECKSUM',
		'label' => 'CHECKSUM',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'STATUS',
		'label' => 'STATUS',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'EXTRA',
		'label' => 'EXTRA',
		'rules' => 'trim|required|xss_clean'
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
		'field' => 'created',
		'label' => 'created',
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
	));

$config['files/_destroy'] = array(
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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

$config['groups_has_access/_update'] = array(
	array(
		'field' => 'groups_id',
		'label' => 'groups_id',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'access_id',
		'label' => 'access_id',
		'rules' => 'trim|required|integer|xss_clean'
	)
);

$config['groups_has_access/_create'] = array(
	array(
		'field' => 'groups_id',
		'label' => 'groups_id',
		'rules' => 'trim|required|integer|xss_clean'
	),
	array(
		'field' => 'access_id',
		'label' => 'access_id',
		'rules' => 'trim|required|integer|xss_clean'
	)
);

$config['groups_has_access/_destroy'] = array(
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
		'field' => 'created',
		'label' => 'created',
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
