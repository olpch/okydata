<?php
class invoiceController extends Controller{

	public function __construct($name, $action){
		parent::__construct($name, $action);
		$this->invoices = $this->loadModel('invoice');
	}

	public function index(){
		$this->_view->mnuTab = 'invoices';
		$this->_view->invoices = $this->invoices->all();
		$this->_view->renderView();
	}

	public function create(){
		echo '{"messaje": "new item!!"}';
	}

	public function destroy(){
		echo '{"messaje": "now 2 destroyed item!!"}';
	}

	public function details($invoice){
		$response = $this->invoices->details($invoice);
		toResponse('200', $response);
	}

	public function show($invoice){
		$response = $this->invoices->find($invoice);
		toResponse('200', $response);
	}

}

