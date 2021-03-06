<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articles extends CI_Controller 
{
	protected $_editStatus = 'Operation complete.';
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Articles_model', 'articles');
		
		$this->load->model('Categories_model', 'categories');
		$this->load->model('Uploaded_files_model', 'uploaded_files');
		$this->load->model('Users_model', 'users');

	}

	public function index($page = 0)
	{
		if($this->_destroy())
			$data['success'] = $this->_editStatus;
			
		$data['articles'] = $this->articles->all($page);
		
		$pconf['total_rows'] = $this->db->count_all('articles');
		$pconf['per_page'] = $this->config->item('cms_list_limit');
		$pconf['base_url'] = site_url('admin/articles/index/');
		
		$this->pagination->initialize($pconf);
		
		$this->load->view('admin/layout_parts/header', $data);
		$this->load->view('admin/layout_parts/left', $data);
		$this->load->view('admin/articles/index', $data);
		$this->load->view('admin/layout_parts/footer', $data);
	}
	
	public function new_one()
	{
		if($this->_create())
			$data['success'] = $this->_editStatus;
			
		$data['categories'] = $this->categories->all();
		$data['uploaded_files'] = $this->uploaded_files->all();
		$data['users'] = $this->users->all();
		$this->load->view('admin/layout_parts/header', $data);
		$this->load->view('admin/layout_parts/left', $data);
		$this->load->view('admin/articles/new_one', $data);
		$this->load->view('admin/layout_parts/footer', $data);
	}
	
	protected function _create()
	{
		if($this->input->post('create'))
			if($this->form_validation->run('articles/_create'))
			{	
				unset($_POST['create']);
				if($this->articles->create($_POST))
				{	
					unset($_POST);
					return TRUE;
				}
			}
		return FALSE;
	}
	
	public function show($id)
	{
		if($data['articles'] = $this->articles->find(array('id' => $id)))
		{
			$this->load->view('admin/layout_parts/header', $data);
			$this->load->view('admin/layout_parts/left', $data);
			$this->load->view('admin/articles/show', $data);
			$this->load->view('admin/layout_parts/footer', $data);
		}
		else
			show_404(current_url());
	}
	
	public function edit($id)
	{
		if($this->_update())
			$data['success'] = $this->_editStatus;
			
		$data['categories'] = $this->categories->all();
		$data['uploaded_files'] = $this->uploaded_files->all();
		$data['users'] = $this->users->all();
		if($data['articles'] = $this->articles->find(array('id' => $id)))
		{
			$this->load->view('admin/layout_parts/header', $data);
			$this->load->view('admin/layout_parts/left', $data);
			$this->load->view('admin/articles/edit', $data);
			$this->load->view('admin/layout_parts/header', $data);
		}
		else
			show_404(current_url());
	}
	
	protected function _update()
	{
		if($this->input->post('update'))
			if($this->form_validation->run('articles/_update'))
			{	
				unset($_POST['update']);
				if($this->articles->update($_POST))	
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
			if($this->form_validation->run('articles/_destroy'))
			{
				unset($_POST['delete']);
				if($this->articles->delete($_POST))	
				{	
					unset($_POST);
					return TRUE;
				}
			}
		return FALSE;
	}
}

/* End of file articles.php */
/* Location: ./application/controllers/admin/articles.php */