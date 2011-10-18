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
	
	public function all()
	{
		$query = $this->db->select('access.*, applications.name')
						  ->from($this->tableName)
						  ->join('applications', 'access.applications_id = applications.id')
						  ->get();
		if($query)
			return $this->_return_array_of_obj($query->result());
	}

}

/* End of file access_model.php */
/* Location: ./application/models/access_model.php */