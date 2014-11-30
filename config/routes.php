<?php
	// start the routes in the API.
	$routes = new Router('/apicore');

	//	/-------------------------------------------\
	// 	| :id 	=>	 Numeric Values.				|
	//  | :str 	=>	 String  Values.				|
	//	\-------------------------------------------/
	
	// Root (HTML)
 	$routes->add( '/', 'index#index');

 	
	//  ***** Api Routes (JSON). *****

	// ==> Login Controller
	$routes->post('/api/signin', 'login#signin');
	$routes->get( '/login',  'login#index');
	$routes->post('/login',  'login#index');
	$routes->get( '/logout', 'login#logout');
	$routes->get( '/signup', 'login#signup');
	$routes->post('/signup', 'login#signup');
	$routes->get( '/logout', 'login#logout');


	// nucleo del programa
	$routes->get( '/dashboard', 'core#dashboard');

	// Stock Controller
	$routes->get( '/stocks', 'stock#index');

	// páginas de error
	$routes->get( '/404',  'error#code404');

	//  ==> Document Controller
	$routes->get('/docs', 'document#index');
	
	$routes->get( '/invoices',       'invoice#index');


	//  ==> Invoice Controller
	$routes->get( '/api/invoices',       'invoice#index'); //, true);  ==> for api authenticate.
	$routes->post('/api/invoices',       'invoice#create'); //, true);
	$routes->get( '/api/invoices/:id',   'invoice#show'); //,   true);
	$routes->post('/api/invoices/:id',   'invoice#update'); //, true);
	$routes->delete('/api/invoices/:id', 'invoice#destroy'); //,true);
	$routes->get( '/api/invoices/:id/details', 'invoice#details');



	// Page not found (HTML) - Error 404
	//$routes->get('/.*', 'error#404');


	// Developed routes (HTML)
	$routes->get('/test' , 'develop#test');
	$routes->get('/rake/routes', 'develop#routes');
