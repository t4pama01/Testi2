<?php
class Testi_model extends CI_Model {

public function getNimet() {
	$nimet=array(
		array("en"=>'Jussi',"sn"=>'Virtanen'),
		array("en"=>'Eino',"sn"=>'Leino'),
		array("en"=>'Juha',"sn"=>'Mieto')
		);
	return $nimet;
}

}
