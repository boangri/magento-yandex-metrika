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
 * Form container
 * 
 * @category Boangri
 * @package Boangri_YandexMetrika 
 */

class Boangri_YandexMetrika_Block_Adminhtml_Form 
    extends Mage_Adminhtml_Block_Widget_Form_Container
{
    /**
     * Construct
     */
    public function __construct()
    {
        parent::__construct();
                  
        $this->_objectId = 'website_id';
        $this->_blockGroup = 'boangri_yandexmetrika';
        $this->_controller = 'adminhtml_form';
         
        $this->_updateButton('save', 'label', Mage::helper('boangri_yandexmetrika')->__('Save'));
        /*
        $this->_updateButton('delete', 'label', Mage::helper('boangri_yandexmetrika')->__('Delete'));
         
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);
        */
    }
    
    /**
     * Output header
     * 
     * @return type
     */
    public function getHeaderText()
    {
        return Mage::helper('boangri_yandexmetrika')->__('Edit Counter');
    }
}
