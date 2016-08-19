<?php
class Jonas_Socialshare_Helper_Data extends Mage_Core_Helper_Abstract {
	
	const EMAIL_TEMPLATE = "socialshare/email/template";
	public function sendEmail_bak($mail_info=array()){
		 
		/*$from = $mail_info['from'];
		$to = array($mail_info['to']);
		$sender = Array('name'  => 'System Message', 'email' => $from);    
	
		
		$storeId = Mage::app()->getStore()->getId();   
		$template = Mage::getStoreConfig(self::EMAIL_TEMPLATE ); 
		$mailConfirm = Mage::getModel('core/email_template');    
		$translate  = Mage::getSingleton('core/translate');  
		   
		$mailConfirm ->setTemplateSubject($mailSubject)    
		             ->sendTransactional($template, $sender, $to, '', Array('subject'=>$mail_info['subject'],'message'=>$mail_info['message'],
		             'name'=>$mail_info['name'],'product_name'=>$mail_info['product_name']),$storeId);    
		$translate->setTranslateInline(true);   	*/

		$emailTemplate  = Mage::getModel('core/email_template')->loadDefault('socialshare_email_template');
		//Create an array of variables to assign to template
		$emailTemplateVariables = array();
		$emailTemplateVariables['name'] = $mail_info['name'];
		$emailTemplateVariables['product_name'] = $mail_info['product_name'];
		$emailTemplateVariables['message'] = $mail_info['message'];
		$emailTemplateVariables['subject'] = $mail_info['subject'];
		/**
		 * The best part <img src="http://inchoo.net/wp-includes/images/smilies/icon_smile.gif" alt=":)" class="wp-smiley">
		 * Opens the activecodeline_custom_email1.html, throws in the variable array
		 * and returns the 'parsed' content that you can use as body of email
		 */
		$processedTemplate = $emailTemplate->getProcessedTemplate($emailTemplateVariables);
		/*
		 * Or you can send the email directly,
		 * note getProcessedTemplate is called inside send()
		 */
		$emailTemplate->send($mail_info['to'],'', $emailTemplateVariables);
			
	 }
}