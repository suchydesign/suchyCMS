<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sk" lang="sk">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>suchyCMS</title>
		<link rel="stylesheet" href="<?=base_url(); ?>public/css/reset.css" type="text/css" media="screen,projection" /> 
		<link rel="stylesheet" href="<?=base_url(); ?>public/css/admin/screen.css" type="text/css" media="screen,projection" /> 
		<meta name="author" content="Peter Bielik, www.suchydesign.sk" />
	</head>
	<body>
		<div id="all">
			<div id="header">
				<h1>suchyCMS</h1>
				<?=form_open(current_url()); ?>
					<?=form_submit('logout', 'Logout'); ?>
				<?=form_close(); ?>
			</div>
			<div id="container">
<?php $this->load->view('admin/layout_parts/menu');
