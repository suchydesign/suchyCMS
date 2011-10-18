<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Groups_model extends MY_Model 
{
	public function __construct()
    {
        parent::__construct();
		$this->tableName = 'groups';
		$this->_set_data_types();
		$this->_set_belongs_to();
    }
}

/* End of file groups_model.php */
/* Location: ./application/models/groups_model.php */