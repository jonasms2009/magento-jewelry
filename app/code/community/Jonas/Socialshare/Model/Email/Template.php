<?php



class Jonas_Socialshare_Model_Email_Template extends Mage_Core_Model_Email_Template //Aschroder_SMTPPro_Model_Email_Template
{

    /**
     * Sends email
     * @param $sender
     * @param $email
     * @param $name
     * @param $vars
     * @param $storeId
     * @return Jonas_Socialshare_Model_Email_Template
     */
    public function sendEmail($sender, $email, $name, $vars = array(), $storeId = null) {
        $this->setSentSuccess(false);

        if(!$email) return $this;

        if (($storeId === null) && $this->getDesignConfig()->getStore()) {
            $storeId = $this->getDesignConfig()->getStore();
        }

        if (!is_array($sender)) {
            $this->setSenderName(Mage::getStoreConfig('trans_email/ident_'.$sender.'/name', $storeId));
            $this->setSenderEmail(Mage::getStoreConfig('trans_email/ident_'.$sender.'/email', $storeId));
        } else {
            $this->setSenderName($sender['name']);
            $this->setSenderEmail($sender['email']);
        }

        if (!isset($vars['store'])) {
            $vars['store'] = Mage::app()->getStore($storeId);
        }
        
		try{
		        if($this->getProcessedTemplate($vars)) {
		            $this->setSentSuccess($this->send($email, $name, $vars));
		        } else {
		            $this->setSentSuccess(true);
		        }
		}catch (Exception $e){
		
		}
		
        return $this;
    }
}
