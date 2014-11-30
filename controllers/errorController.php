<?php
class errorController extends Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->toRender('code404');
	}

	public function code404(){
		$this->toRender('code404');
	}
}