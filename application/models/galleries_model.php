<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Galleries_model extends MY_Model 
{
	public function __construct()
    {
        parent::__construct();
		$this->tableName = 'galleries';
		$this->_set_data_types();
		$this->_set_belongs_to();
    }
}

/* End of file galleries_model.php */
/* Location: ./application/models/galleries_model.php */