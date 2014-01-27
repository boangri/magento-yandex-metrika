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
 * YandexMetrika Controller
 * 
 * @category Boangri
 * @package Boangri_YandexMetrika  
 */
class Boangri_YandexMetrika_YandexmetrikaController extends Mage_Adminhtml_Controller_Action
{
    /**
     * index action
     */
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}