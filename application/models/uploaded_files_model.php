<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Uploaded_files_model extends MY_Model 
{
	public function __construct()
    {
        parent::__construct();
		$this->tableName = 'uploaded_files';
		$this->_set_data_types();
		$this->_set_belongs_to();
    }
}

/* End of file uploaded_files_model.php */
/* Location: ./application/models/uploaded_files_model.php */