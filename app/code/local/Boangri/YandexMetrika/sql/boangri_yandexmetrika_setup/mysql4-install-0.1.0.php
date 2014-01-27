<?php
/**
 * Boangri YandexMetrika module
 * 
 * Install script. It creates a table for the YM counter.
 * 
 * @category Boangri
 * @package Boangri_YandexMetrika
 * @copyright Copyright (c) 2014 Cyberhull LLC (www.cyberhull.com)
 * @author Boris Gribovskiy (boris.gribovskiy@cyberhull.com)
 */
 
//echo 'Running This Upgrade: '.get_class($this)."\n <br /> \n"; die;
$installer = $this;
$installer->startSetup();
$installer->run("
    CREATE TABLE `{$installer->getTable('boangri_yandexmetrika/counter')}` (
      `website_id` int(11) NOT NULL auto_increment,
      `counter` text,
      `status` tinyint default 1,
      `timestamp` timestamp NOT NULL default CURRENT_TIMESTAMP,
      PRIMARY KEY  (`website_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
");
$installer->endSetup();

/* RDBMS Agnostic version:
 * 
$installer = $this;
$installer->startSetup();
$table = $installer->getConnection()->newTable($installer->getTable('weblog/blogpost'))
    ->addColumn('blogpost_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'unsigned' => true,
        'nullable' => false,
        'primary' => true,
        'identity' => true,
        ), 'Blogpost ID')
    ->addColumn('title', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable' => false,
        ), 'Blogpost Title')
    ->addColumn('post', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable' => true,
        ), 'Blogpost Body')
    ->addColumn('date', Varien_Db_Ddl_Table::TYPE_DATETIME, null, array(
        ), 'Blogpost Date')
    ->addColumn('timestamp', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(
        ), 'Timestamp')
    ->setComment('Magentotutorial weblog/blogpost entity table');
$installer->getConnection()->createTable($table);

$installer->endSetup(); 

*/
