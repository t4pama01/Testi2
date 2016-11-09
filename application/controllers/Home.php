<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function index() {
		$data['sivun_sisalto']="home/index";
		$this->load->view('menu/valikko',$data);
	}
}