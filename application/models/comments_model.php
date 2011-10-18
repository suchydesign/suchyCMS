<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comments_model extends MY_Model 
{
	public function __construct()
    {
        parent::__construct();
		$this->tableName = 'comments';
		$this->_set_data_types();
		$this->_set_belongs_to();
    }
}

/* End of file comments_model.php */
/* Location: ./application/models/comments_model.php */