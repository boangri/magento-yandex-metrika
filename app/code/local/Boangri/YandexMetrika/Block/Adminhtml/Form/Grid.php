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
 * Grid widget
 * 
 * @category Boangri
 * @package Boangri_YandexMetrika 
 */

class Boangri_YandexMetrika_Block_Adminhtml_Form_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->setId('counterGrid');
        $this->setDefaultSort('id');
        $this->setDefaultDir('ASC');
        $this->setSaveParametersInSession(true);
        // for AJAX
        $this->setSaveParametersInSession(true);
        $this->setUseAjax(true);

    }
    
    /**
     * 
     * @return type 
     */
    protected function _prepareCollection()
    {
        $collection = Mage::getModel('boangri_yandexmetrika/counter')->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }
    
    /**
     * 
     * @return type
     */
    protected function _prepareColumns()
    {
        $this->addColumn('id', array(
          'header'    => Mage::helper('boangri_yandexmetrika')->__('ID'),
          'align'     =>'right',
          'width'     => '10px',
          'index'     => 'website_id',
        ));
 
        $this->addColumn('title', array(
          'header'    => Mage::helper('boangri_yandexmetrika')->__('Title'),
          'align'     =>'left',
          'index'     => 'title',
          'width'     => '50px',
        ));
       
        $this->addColumn('content', array(
            'header'    => Mage::helper('boangri_yandexmetrika')->__('Content'),
            'width'     => '150px',
            'index'     => 'post',
        ));
        
        $this->addColumn('dropdown', array(
          'header'    => Mage::helper('boangri_yandexmetrika')->__('Post Type'),
          'width'     => '50px',  
          'align'     =>'left',
          'index'     => 'status',
          'type'      => 'options',
          'options'    => array('1' => 'Draft','2' => 'Published' , '3' => 'Hidden')
        ));
        
        $this->addColumn('date', array(
            'header'    => Mage::helper('boangri_yandexmetrika')->__('Date'),
            'width'     => '50px',
            'index'     => 'date',
        ));
        
        $this->addColumn('ts', array(
            'header'    => Mage::helper('boangri_yandexmetrika')->__('Timestamp'),
            'width'     => '50px',
            'index'     => 'timestamp',
        ));
           
        $this->addExportType('*/*/exportCsv', Mage::helper('boangri_yandexmetrika')->__('CSV'));
        $this->addExportType('*/*/exportXml', Mage::helper('boangri_yandexmetrika')->__('XML'));
       
        return parent::_prepareColumns();
    }
    
    /**
     * 
     * @param type $row
     * @return type
     */
    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }
    
    // For  AJAX
    /**
     * 
     * @return type
     */
    public function getGridUrl()
    {
        return $this->getUrl('*/*/grid', array('_current'=>true));
    }
    
    /**
     * 
     * @return \Boangri_Weblog_Block_Adminhtml_Weblog_Grid
     */
    protected function _prepareMassaction()
    {
        $this->setMassactionIdField('website_id');
        $this->getMassactionBlock()->setFormFieldName('id');
 
        $this->getMassactionBlock()->addItem('delete', array(
             'label'    => Mage::helper('boangri_yandexmetrika')->__('Delete'),
             'url'      => $this->getUrl('*/*/massDelete'),
             'confirm'  => Mage::helper('boangri_yandexmetrika')->__('Are you sure?')
        ));
 
        $statuses = array(1 => 'Draft', 2 => 'Published', 3 => 'Hidden');
        // $statuses = Mage::getSingleton('boangri_yandexmetrika/status')->getOptionArray();
 
        array_unshift($statuses, array('label'=>'', 'value'=>''));
        $this->getMassactionBlock()->addItem('status', array(
             'label'=> Mage::helper('boangri_yandexmetrika')->__('Change status'),
             'url'  => $this->getUrl('*/*/massStatus', array('_current'=>true)),
             'additional' => array(
                    'visibility' => array(
                         'name' => 'status',
                         'type' => 'select',
                         'class' => 'required-entry',
                         'label' => Mage::helper('boangri_yandexmetrika')->__('Status'),
                         'values' => $statuses
        )
        )
        ));
        return $this;
    }

}
