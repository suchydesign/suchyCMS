<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class File_types_model extends MY_Model 
{
	public function __construct()
    {
        parent::__construct();
		$this->tableName = 'file_types';
		$this->_set_data_types();
		$this->_set_belongs_to();
    }
}

/* End of file file_types_model.php */
/* Location: ./application/models/file_types_model.php */