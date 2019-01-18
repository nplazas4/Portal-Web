<?php
use Migrations\AbstractMigration;

class CreateProjectCodeValueTable extends AbstractMigration
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
      $table = $this->table('PROJECTCODEVALUES');
      $table ->addColumn('ID_PROJECT_CODE_VALUE','integer')
             ->create();
      $refTable = $this->table('PROJECTCODEVALUES');
      $refTable ->addColumn('CODE_TYPE_ID','integer',array('signed'=>'disable'))
                ->addForeignKey('CODE_TYPE_ID','PROJECTCODES','id',array('delete'=>'CASCADE','update'=>'NO_ACTION'))
                ->addColumn('PROJECT_ID','integer',array('signed'=>'disable'))
                ->addForeignKey('PROJECT_ID','PROJECTS','id',array('delete'=>'CASCADE','update'=>'NO_ACTION'))
                ->update();
    }
}
