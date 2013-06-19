<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class recreateAvanceTreso extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->dropTable('avance_treso');
        $this->createTable('avance_treso', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => '8',
              'autoincrement' => '1',
              'primary' => '1',
             ),
             'emetteur_id' => 
             array(
              'type' => 'integer',
              'notnull' => '1',
              'length' => '8',
             ),
             'asso_id' => 
             array(
              'type' => 'integer',
              'notnull' => '1',
              'length' => '8',
             ),
             'commentaire' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'length' => '',
             ),
             'transaction_id' => 
             array(
              'type' => 'integer',
              'notnull' => '1',
              'length' => '8',
             ),
             'transaction_emetteur_id' => 
             array(
              'type' => 'integer',
              'notnull' => '1',
              'length' => '8',
             ),
             ), array(
             'primary' => 
             array(
              0 => 'id',
             ),
             'collate' => 'utf8_unicode_ci',
             'charset' => 'utf8',
             ));
    }

    public function down()
    {
        $this->dropTable('avance_treso');
    }
}