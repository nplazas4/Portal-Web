<?php
use Migrations\AbstractMigration;

class CreateRisksTable extends AbstractMigration
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
      $table = $this->table('RISKS');
      $table ->addColumn('RISK_NUMBER','integer')
             ->addColumn('RISK_NAME','string',array('limit'=>100))
             ->addColumn('PROBABILITY','enum',array('values'=>'1, 2, 3, 4, 5'))
             ->addColumn('IMPACT','enum',array('values'=>'1, 2, 3, 4, 5'))
             ->addColumn('IMPACT_RISK','integer')
             ->addColumn('PLAN_ONE','string',array('limit'=>200))
             ->addColumn('PLAN_TWO','string',array('limit'=>200))
             ->addColumn('PLAN_THREE','string',array('limit'=>200))
             ->addColumn('PLAN_FOUR','string',array('limit'=>200))
             ->addColumn('PLAN_FIVE','string',array('limit'=>200))
             ->addColumn('RISK_QUALIFICATION','integer')
             ->addColumn('PLAN_ONE_S','string',array('limit'=>200))
             ->addColumn('PLAN_TWO_S','string',array('limit'=>200))
             ->addColumn('PLAN_THREE_S','string',array('limit'=>200))
             ->addColumn('PLAN_FOUR_S','string',array('limit'=>200))
             ->addColumn('PLAN_FIVE_S','string',array('limit'=>200))
             ->addColumn('TOTAL_RISK','integer')
             ->create();
             $refTable = $this->table('RISKS');
             $refTable ->addColumn('PROJECT_CODE','integer')
                       ->addForeignKey('PROJECT_CODE','PROJECTS','id',array('delete'=>'CASCADE','update'=>'NO_ACTION'))
                       ->update();
    }
}
