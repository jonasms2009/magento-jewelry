<?php
print_r($installer);die();
$installer = $this;
$installer->startSetup();
$installer->run("
DROP TABLE IF EXISTS {$this->getTable('socialshare/sharecoupon')};
CREATE TABLE IF NOT EXISTS {$this->getTable('socialshare/sharecoupon')} (
  `coupon_id` char(16) NOT NULL,
  `coupon_code` char(16) NOT NULL,
  `create_date` datetime NOT NULL,
  KEY `id` (`coupon_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
    ");

$installer->endSetup();