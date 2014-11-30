<?php
class InvoiceModel extends Model{

	public function __construct(){
			parent::__construct();
	}
	public function all($numidex = false){
		$c = 'SELECT i.* FROM invoices i';
		$res = $this->_db->query($c);
		if ($numidex){
			return $res->fetchAll(PDO::FETCH_NUM);
		}else{
			return $res->fetchAll(PDO::FETCH_ASSOC);
		}
	}

	public function details($invoice){
		$c  = 'SELECT d.*, i.* FROM invoice_details d, invoices i ';
		$c .= 'WHERE d.invoice_id = i.id and i.id = '.$invoice;
		$res = $this->_db->query($c);
		return $res->fetchAll(PDO::FETCH_ASSOC);
	}

	public function find($invoice){
		$c  = 'SELECT i.* FROM invoices i WHERE i.id = '.$invoice;
		$res = $this->_db->query($c);
		return $res->fetch(PDO::FETCH_ASSOC);
	}

}