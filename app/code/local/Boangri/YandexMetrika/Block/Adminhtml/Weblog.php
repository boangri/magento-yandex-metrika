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
 * Weblog block
 * 
 * @category Boangri
 * @package Boangri_YandexMetrika 
 */

class Boangri_YandexMetrika_Block_Adminhtml_Weblog 
    extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->_controller = 'adminhtml_form';
        $this->_blockGroup = 'boangri_yandexmetrika';
        $this->_headerText = Mage::helper('boangri_yandexmetrika')->__('Post Manager');
        $this->_addButtonLabel = Mage::helper('boangri_yandexmetrika')->__('Add Post');
        
        // Add a button
        //$this->_addButton('button1', array(
        //    'label'     => Mage::helper('boangri_yandexmetrika')->__('Button Label1'),
        //    'onclick'   => 'setLocation(\'' . $this->getUrl('*/*/button1') .'\')',
        //    'class'     => 'add',
        //));
        
        parent::__construct();
    }
}
