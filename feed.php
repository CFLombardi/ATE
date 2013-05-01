<?php

class Feed extends CI_Controller {

  public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('tank_auth');
		$this->load->model('articles_model');
	}

	public function index($page = 'feed')
	{
		if(!$this->tank_auth->is_logged_in())
		{
			redirect('auth/login');
		}
		else
		{
			if ( ! file_exists('application/views/'.$page.'.php'))
			{
				// Whoops, we don't have a page for that!
				show_404();
			}
			else
			{
				$data['articles'] = $this->articles_model->get_articles();
				$data['title'] = ucfirst($page);
				
				$this->load->view('templates/header', $data);
				$this->load->view('templates/navBarFeed', $data);
				$this->load->view('feed', $data);
				$this->load->view('templates/footer');
			}
		}
	}
	
	public function create()
	{	
		$data['title'] = 'Create a post';
	
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('subject', 'Subject', 'required');
	
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('templates/navBarFeed', $data);
			$this->load->view('create', $data);
			$this->load->view('templates/footer');
		
		}
		else
		{
			$this->news_model->set_news();
			$this->load->view('templates/header', $data);
			$this->load->view('templates/navBarFeed', $data);
			$this->load->view('success');
			$this->load->view('templates/footer');
		}
	}
	
	public function view($slug)
	{
		$data['articles'] = $this->articles_model->get_articles($slug);
		
		if (empty($data['article_item']))
		{
			show_404();
		}

		$data['title'] = $data['article_item']['title'];

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navBarFeed', $data);
		$this->load->view('view', $data);
		$this->load->view('templates/footer');
	}
}
?>
