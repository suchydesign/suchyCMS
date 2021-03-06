<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Access extends CI_Controller 
{
	protected $_editStatus = 'Operation complete.';
	
	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
		$this->load->library('form_validation');
		$this->load->model('Access_model', 'access');
		
		$this->load->model('Applications_model', 'applications');
		$this->load->model('Groups_model', 'groups');

	}

	public function index($page = 0)
	{
		if($this->_destroy())
			$data['success'] = $this->_editStatus;
			
		$data['access'] = $this->access->all($page);
		
		$pconf['total_rows'] = $this->db->count_all('access');
		$pconf['per_page'] = $this->config->item('cms_list_limit');
		$pconf['base_url'] = site_url('admin/access/index/');
		
		$this->pagination->initialize($pconf);
		
		$this->load->view('admin/layout_parts/header', $data);
		$this->load->view('admin/layout_parts/left', $data);
		$this->load->view('admin/access/index', $data);
		$this->load->view('admin/layout_parts/footer', $data);
	}
	
	public function new_one()
	{
		if($this->_create())
			$data['success'] = $this->_editStatus;
			
		$data['applications'] = $this->applications->all(0, false);
		$data['groups'] = $this->groups->all(0, false);
		
		$this->load->view('admin/layout_parts/header', $data);
		$this->load->view('admin/layout_parts/left', $data);
		$this->load->view('admin/access/new_one', $data);
		$this->load->view('admin/layout_parts/footer', $data);
	}
	
	protected function _create()
	{
		if($this->input->post('create_new'))
			if($this->form_validation->run('access/_create'))
			{
				unset($_POST['create_new']);
				$this->_prepare_post();
				if($this->access->create($_POST))
				{
					unset($_POST);
					return TRUE;
				}
			}
		return FALSE;
	}
	
	public function show($id)
	{
		if($data['access'] = $this->access->find(array('id' => $id)))
		{
			$id = array(
				'id' => $data['access'][0]->applications_id
			);
			$data['applications'] = $this->applications->find($id);
			
			$id = array(
				'id' => $data['access'][0]->groups_id
			);
			$data['groups'] = $this->groups->find($id);
			
			$this->load->view('admin/layout_parts/header', $data);
			$this->load->view('admin/layout_parts/left', $data);
			$this->load->view('admin/access/show', $data);
			$this->load->view('admin/layout_parts/footer', $data);
		}
		else
			show_404(current_url());
	}
	
	public function edit($id)
	{
		if($this->_update())
			$data['success'] = $this->_editStatus;
			
		$data['applications'] = $this->applications->all(0, FALSE);
		$data['groups'] = $this->groups->all(0, false);
		
		if($data['access'] = $this->access->find(array('id' => $id)))
		{
			$this->load->view('admin/layout_parts/header', $data);
			$this->load->view('admin/layout_parts/left', $data);
			$this->load->view('admin/access/edit', $data);
			$this->load->view('admin/layout_parts/footer', $data);
		}
		else
			show_404(current_url());
	}
	
	protected function _update()
	{
		if($this->input->post('update_acc'))
			if($this->form_validation->run('access/_update'))
			{	
				unset($_POST['update_acc']);
				$this->_prepare_post();
				if($this->access->update($_POST))	
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
			if($this->form_validation->run('access/_destroy'))
			{
				unset($_POST['delete']);
				if($this->access->delete($_POST))	
				{	
					unset($_POST);
					return TRUE;
				}
			}
		return FALSE;
	}
	
	protected function _prepare_post()
	{
		$dt = $this->access->get_data_types();
		unset($dt['id']);
		unset($dt['groups_id']);
		unset($dt['applications_id']);
				
		foreach($dt as $k => $v)
			if(!isset($_POST[$k]))
				$_POST[$k] = 0;
	}

}

/* End of file access.php */
/* Location: ./application/controllers/admin/access.php */