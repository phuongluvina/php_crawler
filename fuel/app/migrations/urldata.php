<?php
use Fuel;

namespace Fuel\Migrations\;

class Urldata
{
    function up()
    {
        \DBUtil::create_table('urldata', array(
            'id' => array('type' => 'int', 'constraint' => 11, 'auto_increment' => true),
            'title' => array('type' => 'varchar', 'constraint' => 256),
            'url' => array('type' => 'text'),
            'create_date' => array('constraint' => 11, 'type' => 'int'),
        ), array('id'));
    }
    
    function down()
    {
        \DBUtil::drop_table('urldata');
    }
}