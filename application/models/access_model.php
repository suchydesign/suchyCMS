<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Access_model extends MY_Model 
{
	public function __construct()
    {
        parent::__construct();
		$this->tableName = 'access';
		$this->_set_data_types();
		$this->_set_belongs_to();
    }
}

/* End of file access_model.php */
/* Location: ./application/models/access_model.php */