<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testi extends CI_Controller {

public function index() {
	echo 'Tämä on siis Testi-Controllerin index-funktio';
}

public function eka() {
	echo 'Tämä on siis Testi-Controllerin eka-funktio';
}

public function toka() {
	$nimi="Jussi";
	$nimet=array(
		array("en"=>'Jussi',"sn"=>'Virtanen'),
		array("en"=>'Eino',"sn"=>'Leino'),
		array("en"=>'Juha',"sn"=>'Mieto')
		);
	$data['nimi']=$nimi;
	$data['nimet']=$nimet;
	$this->load->view('testi/toka', $data);
}

public function kolmas() {
	$this->load->model('Testi_model');
	$data['nimet']=$this->Testi_model->getNimet();
	$this->load->view('testi/kolmas',$data);
}

}