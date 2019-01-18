<?php
use Migrations\AbstractMigration;

class CreateProjectCodeTable extends AbstractMigration
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
      $table = $this->table('PROJECTCODES');
      $table ->addColumn('CODE_NAME','string',array('limit' => 100))
             ->addColumn('CODE_DESCRIPTION','string',array('limit' => 500))
             ->create();
    }
}
