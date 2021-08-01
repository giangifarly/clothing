<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_product');
        $this->load->model('m_event');
        $this->load->model('m_eventproduct');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = "Home";
        $data['products'] = $this->m_product->getAllFeatured()->result();

        $this->load->view('_partials/header', $data);
        $this->load->view('home', $data);
        $this->load->view('_partials/footer');
    }
    public function shop()
    {
        $data['judul'] = "Shop";
        $data['products'] = $this->m_product->getAll()->result();

        $this->load->view('_partials/header', $data);
        $this->load->view('shop', $data);
        $this->load->view('_partials/footer');
    }
    public function event()
    {
		$this->pagesRules();
        $data['judul'] = "Event";
        $data['event'] = $this->m_event->getAllStatusOn()->result();
        $data['comingsoon'] = $this->m_event->getAllStatusOff()->result();

        $this->load->view('_partials/header', $data);
        $this->load->view('event', $data);
        $this->load->view('_partials/footer');
    }
    public function view_event_product($id)
    {
		$this->pagesRules();
        $data['judul'] = "Lihat Event";
		$data['products'] = $this->m_eventproduct->getById($id)->result();

        $this->load->view('_partials/header', $data);
        $this->load->view('view_event_product', $data);
        $this->load->view('_partials/footer');
    }
    public function view_event_product_description($id)
    {
		$this->pagesRules();
        $data['judul'] = "Lihat Event";
		$data['products'] = $this->m_eventproduct->getProductById($id)->result();

        $this->load->view('_partials/header', $data);
        $this->load->view('view_event_product_description', $data);
        $this->load->view('_partials/footer');
    }
    public function about()
    {
        $data['judul'] = "About";

        $this->load->view('_partials/header', $data);
        $this->load->view('about', $data);
        $this->load->view('_partials/footer');
    }

    public function description($id = null)
    {
        $data['judul'] = "Description";
        $data['products'] = $this->m_product->getById($id);

        $this->load->view('_partials/header', $data);
        $this->load->view('description', $data);
        $this->load->view('_partials/footer');
    }

    public function store()
    {
        $data['judul'] = "Store";

        $this->load->view('_partials/header', $data);
        $this->load->view('store', $data);
        $this->load->view('_partials/footer');
    }
    public function profile()
    {
		$this->pagesRules();
        $data['judul'] = "Profile";

        $this->load->view('_partials/header', $data);
        $this->load->view('profile', $data);
        $this->load->view('_partials/footer');
    }

    public function cart()
    {
		$this->pagesRules();
        $data['judul'] = "Keranjang";

        $this->load->view('_partials/header', $data);
        $this->load->view('cart', $data);
        $this->load->view('_partials/footer');
    }
	public function edit_profile()
    {
		$this->pagesRules();
        $data['judul'] = "Edit Profile";

        $this->load->view('_partials/header', $data);
        $this->load->view('edit_profile', $data);
        $this->load->view('_partials/footer');
    }
    public function login()
    {
        $this->load->view('login');
    }
    public function register()
    {
        $this->load->view('register');
    }

	private function pagesRules()
	{
		if ($this->session->userdata('level') == 0) {
			redirect('','refresh');
		}
	}
}
