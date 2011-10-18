<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Static_pages extends CI_Controller 
{
	protected $_editStatus = 'Operation complete.';
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Static_pages_model', 'static_pages');
		
		$this->load->model('Users_model', 'users');

	}

	public function index()
	{
		if($this->_destroy())
			$data['success'] = $this->_editStatus;
			
		$data['static_pages'] = $this->static_pages->all();
		$this->load->view('admin/static_pages/index', $data);
	}
	
	public function new_one()
	{
		if($this->_create())
			$data['success'] = $this->_editStatus;
			
		$data['static_pagesDataTypes'] = $this->static_pages->get_data_types();
		$data['users'] = $this->users->all();
		$this->load->view('admin/static_pages/new_one', $data);
	}
	
	protected function _create()
	{
		if($this->input->post('create'))
			if($this->form_validation->run('static_pages/_create'))
			{	
				unset($_POST['create']);
				if($this->static_pages->create($_POST))
				{	
					unset($_POST);
					return TRUE;
				}
			}
		return FALSE;
	}
	
	public function show($id)
	{
		if($data['static_pages'] = $this->static_pages->find(array('id' => $id)))
			$this->load->view('admin/static_pages/show', $data);
		else
			show_404(current_url());
	}
	
	public function edit($id)
	{
		if($this->_update())
			$data['success'] = $this->_editStatus;
			
		$data['static_pagesDataTypes'] = $this->static_pages->get_data_types();
		$data['users'] = $this->users->all();
		if($data['static_pages'] = $this->static_pages->find(array('id' => $id)))
			$this->load->view('admin/static_pages/edit', $data);
		else
			show_404(current_url());
	}
	
	protected function _update()
	{
		if($this->input->post('update'))
			if($this->form_validation->run('static_pages/_update'))
			{	
				unset($_POST['update']);
				if($this->static_pages->update($_POST))	
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
			if($this->form_validation->run('static_pages/_destroy'))
			{
				unset($_POST['delete']);
				if($this->static_pages->delete($_POST))	
				{	
					unset($_POST);
					return TRUE;
				}
			}
		return FALSE;
	}
}

/* End of file static_pages.php */
/* Location: ./application/controllers/admin/static_pages.php */