<?php
class Jonas_Socialshare_Block_Socialshare extends Mage_Catalog_Block_Product
{
	protected function _construct(){
        parent::_construct();
		
        	$this->setTemplate('socialshare/socialshareproduct.phtml');

	}
	 public function getCacheLifetime() { return null; } 
	 
	public function socialhareEnable(){
       return Mage::getStoreConfig('socialshare_options/messages/socialshareEnable');
     }
     
    public function facebookEnable(){
       return Mage::getStoreConfig('socialshare_options/messages/facebookEnable');
     } 
     public function tweeterEnable(){
       return Mage::getStoreConfig('socialshare_options/messages/tweeterEnable');
     } 
     public function pinEnable(){
       return Mage::getStoreConfig('socialshare_options/messages/pinEnable');
     } 
    public function amazonEnable(){
       return Mage::getStoreConfig('socialshare_options/messages/amazonEnable');
     } 
    public function googleEnable(){
       return Mage::getStoreConfig('socialshare_options/messages/googleEnable');
     } 
    public function tumblrEnable(){
       return Mage::getStoreConfig('socialshare_options/messages/tumblrEnable');
     } 
    public function linkdinEnable(){
       return Mage::getStoreConfig('socialshare_options/messages/linkdinEnable');
     } 
	
	public function _prepareLayout(){
		return parent::_prepareLayout();
    }
   
}