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
            
            'form' => array (
                'type' => 'text'
            ),
        ),
        
        'url' => array (
            'data_type' => 'varchar',
            'label' => 'URL',
            
            'form' => array (
                'type' => 'text'
            ),

        ),
        
        'created_at' => array (
            'data_type' => 'int',
            'label' => 'Created At',
            
            'form' => array (
                'type' => false,
            ),            
        ),
    );
    
}