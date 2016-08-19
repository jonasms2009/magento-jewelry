<?php

class Jonas_Socialshare_AjaxController extends Mage_Core_Controller_Front_Action
{
	const EMAIL_TEMPLATE = "socialshare_options/email/template";
	protected function _getSession(){
		return Mage::getSingleton('socialshare/session');
	}
	
	
	
	/**
	 * Action for AJAX
	 */
	 public function sendemailAction(){
	 	$customer = Mage::getSingleton('customer/session')->getCustomer();  
	 	$username = $customer->getFirstname() . ' ' .$customer->getLastname();
	 	$sender = $customer->getEmail();
	 	$postdata = $this->getRequest()->getPost();
	 	if(isset($postdata) && !empty($postdata) ){
	 		
	 		/*$emailTemplate = Mage::getModel('socialshare/email_template');
			$emailTemplate->setDesignConfig(array('area'=>'frontend', 'store'=>Mage::app()->getStore()->getStoreId()))
                    ->loadDefault(self::EMAIL_TEMPLATE )
                    ->sendEmail(array('email'=>$sender,'name'=>$username), $postdata['tofriend'],$username, 
                    	array(
                    			'product_name' => $postdata['pname'],
                                'message' => $postdata['note'],
                                'subject' => $postdata['cSubject'],
                                'product_url' => $postdata['purl'],
                                'imageurl' => $postdata['imageurl'],
                        ));*/
                        
                        
              	$sender = Array('name'  => 'System Message', 'email' => $sender);    
				$to = array($postdata['tofriend']); 
				   
				/*This is optional*/    
				$storeId = Mage::app()->getStore()->getId();     
				$template = Mage::getStoreConfig(self::EMAIL_TEMPLATE);     
				$mailConfirm = Mage::getModel('core/email_template');    
				$translate  = Mage::getSingleton('core/translate');    
				   
				$mailConfirm ->setTemplateSubject($mailSubject)    
				             ->sendTransactional($template, $sender, $to, '', array(
                    			'product_name' => $postdata['pname'],
                                'message' => $postdata['note'],
                                'subject' => $postdata['cSubject'],
                                'product_url' => $postdata['purl'],
                                'imageurl' => $postdata['imageurl'],
                        ),$storeId);    
				$translate->setTranslateInline(true);             
            
              return true;          
	 	}
	 	
	 }
}