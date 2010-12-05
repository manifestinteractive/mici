<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('LoginAttempt', 'default');

/**
 * BaseLoginAttempt
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $ip_address
 * @property string $login
 * @property time $time
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseLoginAttempt extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('login_attempt');
        $this->hasColumn('id', 'integer', 10, array(
             'primary' => true,
             'unsigned' => true,
             'type' => 'integer',
             'autoincrement' => true,
             'fixed' => 0,
             'length' => '10',
             ));
        $this->hasColumn('ip_address', 'string', 40, array(
             'type' => 'string',
             'ip' => true,
             'length' => '40',
             ));
        $this->hasColumn('login', 'string', 50, array(
             'type' => 'string',
             'length' => '50',
             ));
        $this->hasColumn('time', 'time', 25, array(
             'type' => 'time',
             'length' => '25',
             ));


        $this->index('ip_address_index', array(
             'fields' => 
             array(
              0 => 'ip_address',
             ),
             ));
        $this->index('login_index', array(
             'fields' => 
             array(
              0 => 'login',
             ),
             ));
        $this->index('time_index', array(
             'fields' => 
             array(
              0 => 'time',
             ),
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}