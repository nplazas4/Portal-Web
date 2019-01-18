<?php
use Migrations\AbstractMigration;

class IndicatorsTable extends AbstractMigration
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
      $table = $this->table('INDICATORS');
      $table ->addColumn('RIESGOS','decimal',['precision'=>10,'scale'=>2])
             ->addColumn('SPI_EXTERNO','decimal',['precision'=>10,'scale'=>1])
             ->create();
    }
}
