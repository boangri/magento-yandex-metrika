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
 * Tabs widget
 * 
 * @category Boangri
 * @package Boangri_YandexMetrika
 */

class Boangri_YandexMetrika_Block_Adminhtml_Form_Edit_Tabs 
    extends Mage_Adminhtml_Block_Widget_Tabs
{
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->setId('form_tabs');
        $this->setDestElementId('edit_form'); // this should be same as the form id define above
        $this->setTitle(Mage::helper('boangri_yandexmetrika')->__('Post Information'));
    }
    
    /**
     * 
     * @return type
     */
    protected function _beforeToHtml()
    {
        $this->addTab('form_section', array(
          'label'     => Mage::helper('boangri_yandexmetrika')->__('Required data'),
          'title'     => Mage::helper('boangri_yandexmetrika')->__('Required data'),
          'content'   => $this->getLayout()->createBlock('boangri_yandexmetrika/adminhtml_form_edit_tab_form')->toHtml(),
        ));
      /*
        $this->addTab('form_section2', array(
          'label'     => Mage::helper('boangri_yandexmetrika')->__('Optional data'),
          'title'     => Mage::helper('boangri_yandexmetrika')->__('Optional data'),
          'content'   => $this->getLayout()->createBlock('boangri_yandexmetrika/adminhtml_form_edit_tab_form2')->toHtml(),
        ));
       * 
       */
        // AJAX 
        
        //$this->addTab('form_section3', array(
        //        'label'     => Mage::helper('weblog')->__('Item Information3'),
        //        'url'       => $this->getUrl('*/*/form', array('_current' => true)),
        //        'class'     => 'ajax',
        //));
        
        return parent::_beforeToHtml();
    }
}
