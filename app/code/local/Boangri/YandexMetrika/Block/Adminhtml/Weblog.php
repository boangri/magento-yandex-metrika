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
        $this->_blockGroup = 'weblog';
        $this->_headerText = Mage::helper('weblog')->__('Post Manager');
        $this->_addButtonLabel = Mage::helper('weblog')->__('Add Post');
        
        // Add a button
        //$this->_addButton('button1', array(
        //    'label'     => Mage::helper('weblog')->__('Button Label1'),
        //    'onclick'   => 'setLocation(\'' . $this->getUrl('*/*/button1') .'\')',
        //    'class'     => 'add',
        //));
        
        parent::__construct();
    }
}
