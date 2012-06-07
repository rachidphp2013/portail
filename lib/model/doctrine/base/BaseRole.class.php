<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Role', 'doctrine');

/**
 * BaseRole
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property integer $sort
 * @property boolean $bureau
 * @property integer $droits
 * @property Doctrine_Collection $AssoMember
 * 
 * @method string              getName()       Returns the current record's "name" value
 * @method integer             getSort()       Returns the current record's "sort" value
 * @method boolean             getBureau()     Returns the current record's "bureau" value
 * @method integer             getDroits()     Returns the current record's "droits" value
 * @method Doctrine_Collection getAssoMember() Returns the current record's "AssoMember" collection
 * @method Role                setName()       Sets the current record's "name" value
 * @method Role                setSort()       Sets the current record's "sort" value
 * @method Role                setBureau()     Sets the current record's "bureau" value
 * @method Role                setDroits()     Sets the current record's "droits" value
 * @method Role                setAssoMember() Sets the current record's "AssoMember" collection
 * 
 * @package    simde
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRole extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('role');
        $this->hasColumn('name', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('sort', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('bureau', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             'notnull' => true,
             ));
        $this->hasColumn('droits', 'integer', null, array(
             'type' => 'integer',
             'default' => 0,
             'notnull' => true,
             ));

        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('AssoMember', array(
             'local' => 'id',
             'foreign' => 'role_id'));
    }
}