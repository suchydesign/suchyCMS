<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class File_types extends CI_Controller 
{
	protected $_editStatus = 'Operation complete.';
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('File_types_model', 'file_types');
		

	}

	public function index($page = 0)
	{
		if($this->_destroy())
			$data['success'] = $this->_editStatus;
			
		$data['file_types'] = $this->file_types->all($page);
		
		$pconf['total_rows'] = $this->db->count_all('file_types');
		$pconf['per_page'] = $this->config->item('cms_list_limit');
		$pconf['base_url'] = site_url('admin/file_types/index/');
		
		$this->pagination->initialize($pconf);
		
		$this->load->view('admin/layout_parts/header', $data);
		$this->load->view('admin/layout_parts/left', $data);
		$this->load->view('admin/file_types/index', $data);
		$this->load->view('admin/layout_parts/footer', $data);
	}
	
	public function new_one()
	{
		if($this->_create())
			$data['success'] = $this->_editStatus;
		
		$data = array();
		$this->load->view('admin/layout_parts/header', $data);
		$this->load->view('admin/layout_parts/left', $data);
		$this->load->view('admin/file_types/new_one', $data);
		$this->load->view('admin/layout_parts/footer', $data);
	}
	
	protected function _create()
	{
		if($this->input->post('create'))
			if($this->form_validation->run('file_types/_create'))
			{	
				unset($_POST['create']);
				if($this->file_types->create($_POST))
				{	
					unset($_POST);
					return TRUE;
				}
			}
		return FALSE;
	}
	
	public function show($id)
	{
		if($data['file_types'] = $this->file_types->find(array('id' => $id)))
		{
			$this->load->view('admin/layout_parts/header', $data);
			$this->load->view('admin/layout_parts/left', $data);
			$this->load->view('admin/file_types/show', $data);
			$this->load->view('admin/layout_parts/footer', $data);
		}
		else
			show_404(current_url());
	}
	
	public function edit($id)
	{
		if($this->_update())
			$data['success'] = $this->_editStatus;
			
		if($data['file_types'] = $this->file_types->find(array('id' => $id)))
		{
			$this->load->view('admin/layout_parts/header', $data);
			$this->load->view('admin/layout_parts/left', $data);
			$this->load->view('admin/file_types/edit', $data);
			$this->load->view('admin/layout_parts/footer', $data);
		}
		else
			show_404(current_url());
	}
	
	protected function _update()
	{
		if($this->input->post('update'))
			if($this->form_validation->run('file_types/_update'))
			{	
				unset($_POST['update']);
				if($this->file_types->update($_POST))	
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
			if($this->form_validation->run('file_types/_destroy'))
			{
				unset($_POST['delete']);
				if($this->file_types->delete($_POST))	
				{	
					unset($_POST);
					return TRUE;
				}
			}
		return FALSE;
	}
}

/* End of file file_types.php */
/* Location: ./application/controllers/admin/file_types.php */