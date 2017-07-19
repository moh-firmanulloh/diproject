<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event_organizer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['konten'] = 'eo/home';
		$this->load->view('eo/layout/template', $data);
	}

	public function eventsGallery()
	{
		$data['konten'] = 'eo/events';
		$this->load->view('eo/layout/template', $data);
	}

	public function aboutUs()
	{
		$data['konten']	= 'eo/about';
		$this->load->view('eo/layout/template', $data);
	}

}

/* End of file Event_organizer.php */
/* Location: ./application/controllers/Event_organizer.php */