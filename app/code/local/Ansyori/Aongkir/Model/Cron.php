<?php
/**
 * Indonesia Shipping Carriers
 * @copyright   Copyright (c) 2015 Ansyori B.
 * @email		ansyori@gmail.com / ansyori@kemanaservices.com
 * @build_date  March 2015   
 * @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */
class Ansyori_Aongkir_Model_Cron{	
	public function UpdateAlamat(){
		//do something
		$helper = Mage::helper('aongkir')->grabAllRates(1);
		$helper = Mage::helper('aongkir')->saveAreaToDb();
		
	} 
}