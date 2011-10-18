<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Groups extends CI_Controller 
{
	protected $_editStatus = 'Operation complete.';
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Groups_model', 'groups');
		

	}

	public function index()
	{
		if($this->_destroy())
			$data['success'] = $this->_editStatus;
			
		$data['groups'] = $this->groups->all();
		$this->load->view('admin/groups/index', $data);
	}
	
	public function new_one()
	{
		if($this->_create())
			$data['success'] = $this->_editStatus;
			
		$data['groupsDataTypes'] = $this->groups->get_data_types();
		$this->load->view('admin/groups/new_one', $data);
	}
	
	protected function _create()
	{
		if($this->input->post('create'))
			if($this->form_validation->run('groups/_create'))
			{	
				unset($_POST['create']);
				if($this->groups->create($_POST))
				{	
					unset($_POST);
					return TRUE;
				}
			}
		return FALSE;
	}
	
	public function show($id)
	{
		if($data['groups'] = $this->groups->find(array('id' => $id)))
			$this->load->view('admin/groups/show', $data);
		else
			show_404(current_url());
	}
	
	public function edit($id)
	{
		if($this->_update())
			$data['success'] = $this->_editStatus;
			
		$data['groupsDataTypes'] = $this->groups->get_data_types();
		if($data['groups'] = $this->groups->find(array('id' => $id)))
			$this->load->view('admin/groups/edit', $data);
		else
			show_404(current_url());
	}
	
	protected function _update()
	{
		if($this->input->post('update'))
			if($this->form_validation->run('groups/_update'))
			{	
				unset($_POST['update']);
				if($this->groups->update($_POST))	
				{	
					unset($_POST);
					return TRUE;
				}
			}
		return FALSE;
	}
	
	protected function _destroy()
	{
		if($this->input->post('delete'))
			if($this->form_validation->run('groups/_destroy'))
			{
				unset($_POST['delete']);
				if($this->groups->delete($_POST))	
				{	
					unset($_POST);
					return TRUE;
				}
			}
		return FALSE;
	}
}

/* End of file groups.php */
/* Location: ./application/controllers/admin/groups.php */