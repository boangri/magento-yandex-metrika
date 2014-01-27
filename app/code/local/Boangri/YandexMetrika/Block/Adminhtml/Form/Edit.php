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
 * Edit form
 * 
 * @category Boangri
 * @package Boangri_YandexMetrika 
 */
class Boangri_YandexMetrika_Block_Adminhtml_Form_Edit 
    extends Mage_Adminhtml_Block_Widget_Form
{
    /**
     * 
     * @return type
     */
    protected function _prepareForm()
    {
        $form = new Varien_Data_Form(array(
                        'id' => 'edit_form',
                        'action' => $this->getUrl('*/*/save', 
                                array('id' => $this->getRequest()->getParam('website_id'))),
                        'method' => 'post',
                        'enctype' => 'multipart/form-data'
                     )
        );

        $form->setUseContainer(true);
        $this->setForm($form);
        return parent::_prepareForm();
    }
}
