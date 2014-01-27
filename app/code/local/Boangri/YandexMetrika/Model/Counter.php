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
 * YM counter model 
 * 
 * @category Boangri
 * @package Boangri_YandexMetrika 
 */

class Boangri_YandexMetrika_Model_Counter extends Mage_Core_Model_Abstract
{
    /**
     * Magento constructor
     */
    protected function _construct()
    {
        $this->_init('boangri_yandexmetrika/counter');
    }
}
