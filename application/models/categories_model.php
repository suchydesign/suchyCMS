<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categories_model extends MY_Model 
{
	public function __construct()
    {
        parent::__construct();
		$this->tableName = 'categories';
		$this->_set_data_types();
		$this->_set_belongs_to();
    }
}

/* End of file categories_model.php */
/* Location: ./application/models/categories_model.php */