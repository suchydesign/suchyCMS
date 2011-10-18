<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends MY_Model 
{
	public function __construct()
    {
        parent::__construct();
		$this->tableName = 'users';
		$this->_set_data_types();
		$this->_set_belongs_to();
    }
}

/* End of file users_model.php */
/* Location: ./application/models/users_model.php */