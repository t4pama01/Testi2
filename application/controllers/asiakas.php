<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class asiakas extends CI_Controller {

	public function naytaAsiakas() {
		$this->load->model('Asiakas_model');
		$data['asiakkaat']=$this->Asiakas_model->getAsiakas();
		$data['sivun_sisalto']="asiakas/naytaAsiakas";
		$this->load->view('menu/valikko',$data);
	}

}