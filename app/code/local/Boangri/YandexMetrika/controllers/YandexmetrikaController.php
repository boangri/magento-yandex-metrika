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
 * Adminhtml controller 
 * 
 * @category Boangri
 * @package Boangri_YandexMetrika 
 */

class Boangri_YandexMetrika_YandexmetrikaController extends Mage_Adminhtml_Controller_action
{
    /**
     * index action
     */
    public function indexAction() {
        $this->loadLayout();
        $this->renderLayout();
    }
    
    /**
     * new action
     */
    public function newAction(){
        $this->loadLayout();
        $this->_addContent($this->getLayout()->createBlock('boangri_yandexmetrika/adminhtml_form'))
            ->_addLeft($this->getLayout()->createBlock('boangri_yandexmetrika/adminhtml_form_edit_tabs'));   
        $this->renderLayout();
    }

    /**
     * edit action
     */
    public function editAction() {
        //echo "here we are!";
        //$params = $this->getRequest()->getParams();
        $counter = Mage::getModel('boangri_yandexmetrika/counter');
        //echo("Loading the blogpost with an ID of ".$params['id']);
        $counter->load(1); //($params['id']);
        $data = $counter->getData();
        Mage::register('boangri_counter', $data);
        //var_dump($data);
        $this->loadLayout();
        $this->_addContent($this->getLayout()->createBlock('boangri_yandexmetrika/adminhtml_form'))
             ->_addLeft($this->getLayout()->createBlock('boangri_yandexmetrika/adminhtml_form_edit'));   
        $this->renderLayout();
    }
    
    /**
     * save action
     */
    public function saveAction() {
        if ($data = $this->getRequest()->getPost()) {
            $id = $data['id'];
            $blogpost = Mage::getModel('boangri_yandexmetrika/counter');
            if ($id > 0) {
                $blogpost = $blogpost->load($id);
            }
            $blogpost->setTitle($data['title']);
            $blogpost->setPost($data['content']);
            $blogpost->setStatus($data['status']);
            if ($data['date']) {
                $a = explode('/', $data['date']);
                $date = $a[2].'-'.$a[0].'-'.$a[1];
                $blogpost->setDate($date);
            }
            $blogpost->save();
        }
        $this->loadLayout();
        $this->_addContent($this->getLayout()->createBlock('boangri_yandexmetrika/adminhtml_form'));
        $this->renderLayout();
    }
}
