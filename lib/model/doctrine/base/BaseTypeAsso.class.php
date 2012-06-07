<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TypeAsso', 'doctrine');

/**
 * BaseTypeAsso
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property Doctrine_Collection $Asso
 * 
 * @method string              getName() Returns the current record's "name" value
 * @method Doctrine_Collection getAsso() Returns the current record's "Asso" collection
 * @method TypeAsso            setName() Sets the current record's "name" value
 * @method TypeAsso            setAsso() Sets the current record's "Asso" collection
 * 
 * @package    simde
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTypeAsso extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('type_asso');
        $this->hasColumn('name', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));

        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Asso', array(
             'local' => 'id',
             'foreign' => 'type_id'));
    }
}