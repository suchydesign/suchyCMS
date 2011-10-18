<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model
{
	protected $tableName = '';
	protected $pk = 'id';
	protected $dataTypes = array();
	protected $belongsTo = array();

	public function __construct()
    {
        parent::__construct();
    }
	
	public function all($page)
	{
		$limit = $this->config->item('cms_list_limit');
		$query = $this->db->limit($limit, $page)
						  ->get($this->tableName);
		if($query)
			return $this->_return_array_of_obj($query->result());
		else
			return $this->_error();
	}
	
	public function find($data) 
	{			
		$query = $this->db->get_where($this->tableName, $data);
		if($query)
			return $this->_return_array_of_obj($query->result());
		else
			return $this->_error();
	}
	
	public function create($data)
	{
		$query = $this->db->insert($this->tableName, $data);
		if($query)
			return TRUE;
		else
			return $this->_error();
	}
	
	public function update($data)
	{
		$query = $this->db->where($this->pk, $data['id'])
						->update($this->tableName, $data);
		if($query)
			return TRUE;
		else
			return $this->_error();
	}
	
	public function delete($data)
	{
		$query = $this->db->delete($this->tableName, $data);
		if($query)
			return TRUE;
		else
			return $this->_error();
	}
	
	protected function _return_array_of_obj($result)
	{
		$return = array();
		foreach($result as $row)
			$return[] = $row;
			
		return $return;
	}
	
	protected function _set_data_types()
	{
		$table = 'COLUMNS';
		$oldDB = $this->db->database;
		
		$dbi = $this->load->database('info_schema', true);
		
		$query = $dbi->get_where($table, array('TABLE_NAME' => $this->tableName));
		$data = $this->_return_array_of_obj($query->result());

		foreach($data as $d)
			$this->dataTypes[$d->COLUMN_NAME] = strtolower($d->DATA_TYPE);
		
		$this->load->database('default', true);
	}
	
	public function get_data_types()
	{
		return $this->dataTypes;
	}
	
	protected function _set_belongs_to()
	{
		foreach($this->get_data_types() as $k => $v)
			if(substr($k, -3, 3) == '_id')	
				array_push($this->belongsTo, substr($k, 0, -3));
	}
	
	public function get_belongs_to()
	{
		return $this->belongsTo;
	}
	
	protected function _error()
	{
		show_error('A Database Error Occurred');
		return false;
	}

}

/* End of file MY_Model.php */
/* Location: ./application/core/MY_Model.php */