<?php
class Jonas_Socialshare_Model_Mysql4_Sharecoupon extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {   
        $this->_init('socialshare/sharecoupon', 'id');
    }
}