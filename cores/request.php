<?php

	class Request{
		
		private $_requestBase;
		private $_controller;
		private $_action;
		private $_args;
		
		public function __construct(){
			global $routes;

			$route = $routes->run();
			if($route !== null){
				$tmp = $route->controller();
				$this->_controller = $tmp[0];
				$this->_action = $tmp[1];
				$this->_args = $route->getParams();
				if($route->verify()){
					$response = authenticate();
					if(!$response['Auth-Error']){
						array_push ($this->_args, $response['Auth-Error'], $response["Auth-Message"]);	
					}else{
						toResponse('400', $response);
					}
					
				}
			}else{
				$this->_controller = 'error';
				$this->_action = 'code404';
			}
		} // fin del constructor.

		public function getContoller(){	 return $this->_controller;}
		public function getAction(){	 return $this->_action;}
  		public function getParams(){	 return $this->_args;}
		public function getRequestBase(){return $this->_requestBase;}
	}