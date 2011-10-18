<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Static_pages_model extends MY_Model 
{
	public function __construct()
    {
        parent::__construct();
		$this->tableName = 'static_pages';
		$this->_set_data_types();
		$this->_set_belongs_to();
    }
}

/* End of file static_pages_model.php */
/* Location: ./application/models/static_pages_model.php */