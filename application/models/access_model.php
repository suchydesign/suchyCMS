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
	
	public function all($page = 0)
	{
		$limit = $this->config->item('cms_list_limit');
		$query = $this->db->select('access.*, applications.name')
						  ->from($this->tableName)
						  ->join('applications', 'access.applications_id = applications.id')
						  ->limit($limit, $page)
						  ->get();
		if($query)
			return $this->_return_array_of_obj($query->result());
		else
			return $this->_error();
	}

}

/* End of file access_model.php */
/* Location: ./application/models/access_model.php */