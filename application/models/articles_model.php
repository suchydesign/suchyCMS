<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articles_model extends MY_Model 
{
	public function __construct()
    {
        parent::__construct();
		$this->tableName = 'articles';
		$this->_set_data_types();
		$this->_set_belongs_to();
    }
}

/* End of file articles_model.php */
/* Location: ./application/models/articles_model.php */