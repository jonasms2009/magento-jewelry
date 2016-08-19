<?php
class Jonas_Socialshare_Model_Sharecoupon extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('socialshare/sharecoupon');
    }
    
     public function addCouponToSystem($create_date,$coupon_code) { 

	 	$fromdate = date('Y-m-d',strtotime($create_date));
		$todate = date('Y-m-d',strtotime($create_date) + 3600 * 24 * 6);
		$coupon = Mage::getModel('salesrule/rule');
        $coupon->setName('5% Ddiscount')
		->setCouponCode($coupon_code)
		->setDescription('You can get 5% discount ; This coupon can only used once and valid in 7 days')
		->setFromDate($fromdate)
		->setToDate($todate)
		->setUsesPerCustomer('1000')
		->setIsActive('1')
		->setStopRulesProcessing('0')
		->setIsAdvanced('1')
		->setProductIds(NULL)
		->setSortOrder('0')
		->setSimpleAction('by_percent')
		->setDiscountAmount(self::DISCOUNT )
		->setDiscountQty(NULL)
		->setDiscountStep('0')
		->setSimpleFreeShipping('0')
		->setApplyToShipping('0')
		->setTimesUsed('1')
		->setIsRss('0')
		->setCouponType('2')
		->setUseAutoGeneration('0')
		->setUsesPerCoupon('1000')
		->setCustomerGroupIds(array('0','1',))
		->setWebsiteIds(array('1',));
		$coupon->save();
	 } 
    
}