<?php
use Migrations\AbstractMigration;

class CreateEpsTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
      $table = $this->table('EPS');
      $table ->addColumn('EPS_ID','string',array('limit' => 100))
             ->addColumn('EPS_NAME','string',array('limit'=> 100))
             ->create();
    }
}
