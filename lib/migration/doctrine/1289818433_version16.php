<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version16 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('tb_missing_time_entries', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => '8',
              'autoincrement' => '1',
              'primary' => '1',
             ),
             'day' => 
             array(
              'type' => 'date',
              'length' => '25',
             ),
             'user_id' => 
             array(
              'type' => 'integer',
              'length' => '20',
             ),
             'ignored_at' => 
             array(
              'type' => 'timestamp',
              'length' => '25',
             ),
             ), array(
             'primary' => 
             array(
              0 => 'id',
             ),
             ));
        $this->addColumn('tb_project', 'account_id', 'integer', '20', array(
             ));
    }

    public function down()
    {
        $this->dropTable('tb_missing_time_entries');
        $this->removeColumn('tb_project', 'account_id');
    }
}