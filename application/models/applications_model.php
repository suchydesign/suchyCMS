<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Applications_model extends MY_Model 
{
	public function __construct()
    {
        parent::__construct();
		$this->tableName = 'applications';
		$this->_set_data_types();
		$this->_set_belongs_to();
    }
}

/* End of file applications_model.php */
/* Location: ./application/models/applications_model.php */