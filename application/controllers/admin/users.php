<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller 
{
	protected $_editStatus = 'Operation complete.';
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Users_model', 'users');
		

	}

	public function index()
	{
		if($this->_destroy())
			$data['success'] = $this->_editStatus;
			
		$data['users'] = $this->users->all();
		$this->load->view('admin/layout_parts/header', $data);
		$this->load->view('admin/layout_parts/left', $data);
		$this->load->view('admin/users/index', $data);
		$this->load->view('admin/layout_parts/footer', $data);
	}
	
	public function new_one()
	{
		$data = array();
		if($this->_create())
			$data['success'] = $this->_editStatus;
			
		$this->load->view('admin/layout_parts/header', $data);
		$this->load->view('admin/layout_parts/left', $data);
		$this->load->view('admin/users/new_one', $data);
		$this->load->view('admin/layout_parts/footer', $data);
	}
	
	protected function _create()
	{
		if($this->input->post('create'))
			if($this->form_validation->run('users/_create'))
			{	
				unset($_POST['create']);
				if($this->users->create($_POST))
				{	
					unset($_POST);
					return TRUE;
				}
			}
		return FALSE;
	}
	
	public function show($id)
	{
		if($data['users'] = $this->users->find(array('id' => $id)))
		{
			$this->load->view('admin/layout_parts/header', $data);
			$this->load->view('admin/layout_parts/left', $data);
			$this->load->view('admin/users/show', $data);
			$this->load->view('admin/layout_parts/footer', $data);
		}
		else
			show_404(current_url());
	}
	
	public function edit($id)
	{
		if($this->_update())
			$data['success'] = $this->_editStatus;
			
		if($data['users'] = $this->users->find(array('id' => $id)))
		{
			$this->load->view('admin/layout_parts/header', $data);
			$this->load->view('admin/layout_parts/left', $data);
			$this->load->view('admin/users/edit', $data);
			$this->load->view('admin/layout_parts/footer', $data);
		}
		else
			show_404(current_url());
	}
	
	protected function _update()
	{
		if($this->input->post('update'))
			if($this->form_validation->run('users/_update'))
			{	
				unset($_POST['update']);
				if($this->users->update($_POST))	
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
			if($this->form_validation->run('users/_destroy'))
			{
				unset($_POST['delete']);
				if($this->users->delete($_POST))	
				{	
					unset($_POST);
					return TRUE;
				}
			}
		return FALSE;
	}
}

/* End of file users.php */
/* Location: ./application/controllers/admin/users.php */