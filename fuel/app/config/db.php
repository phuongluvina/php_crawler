<?php
/**
 * Use this file to override global defaults.
 *
 * See the individual environment DB configs for specific config information.
 */

return array(
    
    /*
     * If you don't specify a DB configuration name when you create a connection
     * the configuration to be used will be determined by the 'active' value
     */
    'active' => 'default',
    
    /**
     * Base MySQLi config
     */
    
    'default' => array(
        'type'        => 'mysqli',
        'connection'  => array(
            // 'dsn'        => 'mysql',
            'hostname'   => 'localhost',
            'username'   => 'root',
            'password'   => 'pass',
            'database'   => 'fuel_dev',
            'persistent' => false,
            'compress'   => false,
        ),
        'identifier'   => '`',
        'table_prefix' => '',
        'charset'      => 'utf8',
        'collation'    => false,
        'enable_cache' => false,
        'profiling'    => false,
        'readonly'     => false,
    ),
       
);
