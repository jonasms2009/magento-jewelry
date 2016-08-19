<?php
class Jonas_Socialshare_Block_ShareCOUPON extends Mage_Catalog_Block_Product
{
	protected function _construct(){
        parent::_construct();
		
        	$this->setTemplate('socialshare/sharecoupon.phtml');

	}
	 public function getCacheLifetime() { return null; } 
	
}