<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Galleries extends CI_Controller 
{
	protected $_editStatus = 'Operation complete.';
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Galleries_model', 'galleries');
		
		$this->load->model('Categories_model', 'categories');
		$this->load->model('Users_model', 'users');

	}

	public function index()
	{
		if($this->_destroy())
			$data['success'] = $this->_editStatus;
			
		$data['galleries'] = $this->galleries->all();
		$this->load->view('admin/galleries/index', $data);
	}
	
	public function new_one()
	{
		if($this->_create())
			$data['success'] = $this->_editStatus;
			
		$data['galleriesDataTypes'] = $this->galleries->get_data_types();
		$data['categories'] = $this->categories->all();
		$data['users'] = $this->users->all();
		$this->load->view('admin/galleries/new_one', $data);
	}
	
	protected function _create()
	{
		if($this->input->post('create'))
			if($this->form_validation->run('galleries/_create'))
			{	
				unset($_POST['create']);
				if($this->galleries->create($_POST))
				{	
					unset($_POST);
					return TRUE;
				}
			}
		return FALSE;
	}
	
	public function show($id)
	{
		if($data['galleries'] = $this->galleries->find(array('id' => $id)))
			$this->load->view('admin/galleries/show', $data);
		else
			show_404(current_url());
	}
	
	public function edit($id)
	{
		if($this->_update())
			$data['success'] = $this->_editStatus;
			
		$data['galleriesDataTypes'] = $this->galleries->get_data_types();
		$data['categories'] = $this->categories->all();
		$data['users'] = $this->users->all();
		if($data['galleries'] = $this->galleries->find(array('id' => $id)))
			$this->load->view('admin/galleries/edit', $data);
		else
			show_404(current_url());
	}
	
	protected function _update()
	{
		if($this->input->post('update'))
			if($this->form_validation->run('galleries/_update'))
			{	
				unset($_POST['update']);
				if($this->galleries->update($_POST))	
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
			if($this->form_validation->run('galleries/_destroy'))
			{
				unset($_POST['delete']);
				if($this->galleries->delete($_POST))	
				{	
					unset($_POST);
					return TRUE;
				}
			}
		return FALSE;
	}
}

/* End of file galleries.php */
/* Location: ./application/controllers/admin/galleries.php */