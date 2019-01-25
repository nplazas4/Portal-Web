<?php
use Migrations\AbstractMigration;

class CreateProjectsTable extends AbstractMigration
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
      $table = $this->table('PROJECTS');
      $table ->addColumn('ID_PROJECT','string',array('limit' => 100))
             ->addColumn('PROJECT_NAME','string',array('limit' => 500))
             ->addColumn('DESCRIPTION','string',array('limit'=> 500))
             ->addColumn('PLANNED','integer')
             ->addColumn('EXECUTED','integer')
             ->addColumn('AC','decimal',['precision'=>10,'scale'=>2])
             ->addColumn('PV','decimal',['precision'=>10,'scale'=>2])
             ->addColumn('CAPEX_PLANNED','integer')
             ->addColumn('CAPEX_EXECUTED','integer')
             ->addColumn('FASE','integer')
             ->addColumn('REGIONAL','enum',array('values'=>'norte, sur, centro, occidente'))
             ->addColumn('ALCANCE','string',array('limit'=> 500))
             ->addColumn('SOLICITUD','string',array('limit'=> 500))
             ->addColumn('DISTANCIA','integer')
             ->addColumn('LINEA_TRANS','integer')
             ->addColumn('FOPO','date')
             ->addColumn('FEPO','date')
             ->addColumn('ADJUDICACION','date')
             ->addColumn('APROBACION','date')
             ->addColumn('TORRE','integer')
             ->addColumn('NUM_SUBESTACION','integer')
             ->create();
             // $refTable = $this->table('PROJECTS');
             // // $refTable ->addColumn('CODE_EPS','integer',array('signed'=>'disable'))
             // //           ->addForeignKey('CODE_EPS','PROJECTS','id',array('delete'=>'CASCADE','update'=>'NO_ACTION'))
             // $refTable ->addColumn('PROJECT_RISK','integer',array('signed'=>'disable'))
             //           ->addForeignKey('PROJECT_RISK','PROJECTS','id',array('delete'=>'CASCADE','update'=>'NO_ACTION'))
             //           ->update();
    }
}
