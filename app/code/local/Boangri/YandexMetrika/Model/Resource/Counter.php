<?php
/**
 * Boangri YandexMetrika module
 * 
 * @category Boangri
 * @package Boangri_YandexMetrika
 * @copyright Copyright (c) 2014 Cyberhull LLC (www.cyberhull.com)
 * @author Boris Gribovskiy (boris.gribovskiy@cyberhull.com)
 */
/**
 * YM counter model resource
 * 
 * @category Boangri
 * @package Boangri_YandexMetrika 
 */

class Boangri_YandexMetrika_Model_Resource_Counter extends Mage_Core_Model_Resource_Db_Abstract
{
    /**
     * magento constructor
     */
    protected function _construct()
    {
        $this->_init('boangri_yandexmetrika/counter', 'website_id');
    }
}
