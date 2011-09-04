<?php

/**
 * BaseTeamRoleTag
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $tag_id
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTeamRoleTag extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('team_role_tag');
        $this->hasColumn('id', 'integer', 10, array(
             'type' => 'integer',
             'length' => 10,
             'notnull' => false,
             'unsigned' => true,
             'primary' => true,
             ));
        $this->hasColumn('tag_id', 'integer', 8, array(
             'primary' => true,
             'type' => 'integer',
             'length' => 8,
             'notnull' => false,
             'unsigned' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}