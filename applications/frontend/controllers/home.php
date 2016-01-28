<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	public function index()
	{
		$this->mLayout = "home";
		$this->mTitle = "Participa por tu SOAP 2016";
		$this->mViewFile = 'home';
		$arrTipoVehiculo = ['auto','moto'];
	}
}