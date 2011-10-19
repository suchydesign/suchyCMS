<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('yes_no'))
{
	function yes_no($obj, $param)
	{
		if($param >= 1)
			return $obj->lang->line('cms_yes');
		else
			return $obj->lang->line('cms_no');
	}
}

if ( ! function_exists('yes_no_form_select'))
{
	function yes_no_form_select($obj = '', $name, $selected = 0)
	{
		if(($selected >= 1))
			$selected = 1;
		else
			$selected = 0;
		$array = array(
			0 => $obj->lang->line('cms_no'),
			1 => $obj->lang->line('cms_yes')
		);
		return form_dropdown($name, $array, $selected);
	}
}
