<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ContactEmail', 'default');

/**
 * BaseContactEmail
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property boolean $is_default
 * @property enum $type
 * @property string $email
 * @property integer $ContactAddressBook_id
 * @property ContactAddressBook $ContactAddressBook
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseContactEmail extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('contact_address_book_email');
        $this->hasColumn('id', 'integer', 10, array(
             'primary' => true,
             'type' => 'integer',
             'autoincrement' => true,
             'length' => '10',
             ));
        $this->hasColumn('is_default', 'boolean', 1, array(
             'default' => 0,
             'type' => 'boolean',
             'notnull' => true,
             'length' => '1',
             ));
        $this->hasColumn('type', 'enum', null, array(
             'default' => 'work',
             'type' => 'enum',
             'notnull' => true,
             'values' => 
             array(
              0 => 'work',
              1 => 'home',
              2 => 'other',
             ),
             ));
        $this->hasColumn('email', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '255',
             ));
        $this->hasColumn('ContactAddressBook_id', 'integer', 10, array(
             'type' => 'integer',
             'length' => '10',
             ));


        $this->index('email_address', array(
             'fields' => 
             array(
              0 => 'email',
             ),
             ));
        $this->index('email_type', array(
             'fields' => 
             array(
              0 => 'type',
             ),
             ));
        $this->index('is_default', array(
             'fields' => 
             array(
              0 => 'is_default',
             ),
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ContactAddressBook', array(
             'local' => 'ContactAddressBook_id',
             'foreign' => 'id'));

        $versionable0 = new Doctrine_Template_Versionable();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $searchable0 = new Doctrine_Template_Searchable(array(
             'fields' => 
             array(
              0 => 'type',
              1 => 'email',
             ),
             ));
        $trackauthor0 = new TrackAuthor();
        $this->actAs($versionable0);
        $this->actAs($timestampable0);
        $this->actAs($searchable0);
        $this->actAs($trackauthor0);
    }
}