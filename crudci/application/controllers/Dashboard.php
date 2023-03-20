<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function index()
	{
		$this->load->model("gamesModel");
		$data["games"] = $this->gamesModel->index();
		$data["title"] = "Dashboard - CodeIgniter";
		$this->load->view('pages/dashboard');
	}
}