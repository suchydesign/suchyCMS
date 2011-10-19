<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('yes_no'))
{
	function yes_no($param)
	{
		if($param >= 1)
			return $this->lang->line('cms_yes');
		else {
			return $this->lang->line('cms_no');
	}
}