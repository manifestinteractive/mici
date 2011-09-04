<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('JanrainEngageAddress', 'default');

/**
 * BaseJanrainEngageAddress
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $formatted
 * @property string $street_address
 * @property string $locality
 * @property string $region
 * @property string $postal_code
 * @property string $country
 * @property integer $Engage_id
 * @property JanrainEngage $JanrainEngage
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseJanrainEngageAddress extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('janrain_engage_address');
        $this->hasColumn('id', 'integer', 10, array(
             'primary' => true,
             'type' => 'integer',
             'autoincrement' => true,
             'length' => '10',
             ));
        $this->hasColumn('formatted', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('street_address', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('locality', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('region', 'string', 50, array(
             'type' => 'string',
             'length' => '50',
             ));
        $this->hasColumn('postal_code', 'string', 25, array(
             'type' => 'string',
             'length' => '25',
             ));
        $this->hasColumn('country', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('Engage_id', 'integer', 10, array(
             'type' => 'integer',
             'length' => '10',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('JanrainEngage', array(
             'local' => 'Engage_id',
             'foreign' => 'id'));

        $versionable0 = new Doctrine_Template_Versionable();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $trackauthor0 = new TrackAuthor();
        $this->actAs($versionable0);
        $this->actAs($timestampable0);
        $this->actAs($trackauthor0);
    }
}