<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Role', 'default');

/**
 * BaseRole
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $User_id
 * @property string $title
 * @property blob $description
 * @property User $User
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRole extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('role');
        $this->hasColumn('id', 'integer', 10, array(
             'primary' => true,
             'type' => 'integer',
             'autoincrement' => true,
             'length' => '10',
             ));
        $this->hasColumn('User_id', 'integer', 10, array(
             'type' => 'integer',
             'length' => '10',
             ));
        $this->hasColumn('title', 'string', 100, array(
             'unique' => true,
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('description', 'blob', null, array(
             'type' => 'blob',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('User', array(
             'local' => 'User_id',
             'foreign' => 'id'));

        $versionable0 = new Doctrine_Template_Versionable();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($versionable0);
        $this->actAs($timestampable0);
    }
}