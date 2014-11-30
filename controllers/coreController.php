<?php
class coreController extends Controller{

	public function __construct($name, $action){
		parent::__construct($name, $action);
	}

	public function index(){
		Session::access(1);
		$this->_view->renderView();
	}
}