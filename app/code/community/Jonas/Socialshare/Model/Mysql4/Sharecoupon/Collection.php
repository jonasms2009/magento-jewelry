<?php
class Jonas_Socialshare_Model_Mysql4_Sharecoupon_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        //parent::__construct();
        $this->_init('socialshare/sharecoupon');
    }
}