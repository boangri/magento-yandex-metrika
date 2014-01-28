<?php
/**
 * Yandex Metrika module
 * 
 * @category Boangri
 * @package Boangri_YandexMetrika
 * @copyright Copyright (c) 2014 Cyberhull LLC (www.cyberhull.com)
 * @author Boris Gribovskiy (boris.gribovskiy@cyberhull.com)
 */
/**
 * Block for output of YandexMetrika counter
 * 
 * @category Boangri
 * @package Boangri_YandexMetrika  
 */
class Boangri_YandexMetrika_Block_Counter extends Mage_Core_Block_Template
{
    /**
     * YandexMetrika counter body
     * 
     * @var type String
     */
    protected $_counterBody;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $counter = Mage::getModel('boangri_yandexmetrika/counter')->load(1);
        if(!$counter) {
            $this->_counterBody = 'Counter not set!';
            return;
        }
        $data = $counter->getData();
        $this->_counterBody = $data['counter'];
    }
    
    /**
     * Get current date (for testing purposes only)
     * 
     * @return type String
     */
    public function getDate()
    {
        $date = date('Y-m-d');
        return urlencode($date);
    }
}
