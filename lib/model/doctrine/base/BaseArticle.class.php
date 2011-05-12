<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Article', 'doctrine');

/**
 * BaseArticle
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $asso_id
 * @property string $name
 * @property string $text
 * @property boolean $is_weekmail
 * @property Asso $Asso
 * 
 * @method integer getAssoId()      Returns the current record's "asso_id" value
 * @method string  getName()        Returns the current record's "name" value
 * @method string  getText()        Returns the current record's "text" value
 * @method boolean getIsWeekmail()  Returns the current record's "is_weekmail" value
 * @method Asso    getAsso()        Returns the current record's "Asso" value
 * @method Article setAssoId()      Sets the current record's "asso_id" value
 * @method Article setName()        Sets the current record's "name" value
 * @method Article setText()        Sets the current record's "text" value
 * @method Article setIsWeekmail()  Sets the current record's "is_weekmail" value
 * @method Article setAsso()        Sets the current record's "Asso" value
 * 
 * @package    simde
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseArticle extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('article');
        $this->hasColumn('asso_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('name', 'string', 200, array(
             'type' => 'string',
             'length' => 200,
             ));
        $this->hasColumn('text', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('is_weekmail', 'boolean', null, array(
             'type' => 'boolean',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Asso', array(
             'local' => 'asso_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}