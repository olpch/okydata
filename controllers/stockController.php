<?php
class stockController extends Controller{

	public function __construct($name, $action){
		parent::__construct($name, $action);
		$this->_view->mnuTab = 'Stock';
	}

	public function index(){
		Session::access(1);
		$this->_view->renderView();
	}

}