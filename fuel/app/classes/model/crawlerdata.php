<?php
class Model_Crawlerdata extends Orm\Model {
    protected static $_connection = null;
    protected static $_table_name = 'crawlerdata';
    protected static $_primary_key = array('id');
    
    protected static $_properties = array (
        'id',
        'title' => array (
            'data_type' => 'varchar',
            'label' => 'Title',
            'validation' => array (
                'required',
                'min_length' => array(3),
                'max_length' => array(256)
            ),
            
            'form' => array (
                'type' => 'text'
            ),
            
            'default' => 'title',
        ),
        
        'url' => array (
            'data_type' => 'varchar',
            'label' => 'URL',
            'validation' => array (
                'required',
            ),
            
            'form' => array (
                'type' => 'text'
            ),
            
            'default' => 'www',
        ),
        
        'created_at' => array (
            'data_type' => 'int',
            'label' => 'Created At',
            'validation' => array (
                'required',
            ),
            
            'form' => array (
                'type' => false,
            ),
            
        ),
    );
    
}