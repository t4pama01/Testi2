<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class asiakas extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Asiakas_model');
    }

	public function naytaAsiakas() {
		
		$data['asiakkaat']=$this->Asiakas_model->getAsiakas();
		
		$data['sivun_sisalto']="asiakas/naytaAsiakas";
		$this->load->view('menu/valikko',$data);
	}

	public function lisaaAsiakas() {
		$btn=$this->input->post('btn');
		//Jos painiketta painettu
		if(isset($btn)) {
			$lisaa_data=array(
				"etunimi"=>$this->input->post('en'),
				"sukunimi"=>$this->input->post('sn'),
				"email"=>$this->input->post('email')
				);
			$testi=$this->Asiakas_model->addAsiakas($lisaa_data);
			if($testi>0) {
				$data['ilmoitus']="Asiakkaan lisäys onnistui";
			}
		}
		$data['sivun_sisalto']="asiakas/lisaaAsiakas";
		$this->load->view('menu/valikko',$data);
	}

	public function naytaMuokattava($id) {
		$data['asiakas'] = $this->Asiakas_model->getValittuAsiakas($id);
		$data['sivun_sisalto']="asiakas/naytaMuokattava";
		$this->load->view('menu/valikko',$data);
	}

	public function muokkaaAsiakas() {
		$btn=$this->input->post('btn');
		$update_id=$this->input->post('id');
		if(isset($btn)) {
			$update_data = array(
				"etunimi"=>$this->input->post('en'),
				"sukunimi"=>$this->input->post('sn'),
				"email"=>$this->input->post('email')	
				);
			$testi=$this->Asiakas_model->updateAsiakas($update_id,$update_data);
			if($testi>0) {
				$this->naytaAsiakas();
			}
		}
	}

}