<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProjectsFixture
 *
 */
class ProjectsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'ID_PROJECT' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'PROJECT_NAME' => ['type' => 'string', 'length' => 500, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Proj_Obj' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'DESCRIPTION' => ['type' => 'string', 'length' => 500, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'PLANNED' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'EXECUTED' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'AC' => ['type' => 'decimal', 'length' => 13, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'PV' => ['type' => 'decimal', 'length' => 13, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'CAPEX_PLANNED' => ['type' => 'decimal', 'length' => 13, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'CAPEX_EXECUTED' => ['type' => 'decimal', 'length' => 13, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'FASE' => ['type' => 'string', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'REGIONAL' => ['type' => 'string', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ALCANCE' => ['type' => 'string', 'length' => 500, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'SOLICITUD' => ['type' => 'string', 'length' => 500, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'DISTANCIA' => ['type' => 'decimal', 'length' => 13, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'LINEA_TRANS' => ['type' => 'decimal', 'length' => 13, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'FOPO' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'FEPO' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'ADJUDICACION' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'APROBACION' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'TORRE' => ['type' => 'decimal', 'length' => 13, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'NUM_SUBESTACION' => ['type' => 'decimal', 'length' => 13, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'CPI_ANUAL' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'AC_BAC' => ['type' => 'decimal', 'length' => 13, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'AC_PPTO' => ['type' => 'decimal', 'length' => 13, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'PROJ_TOTAL_PRES' => ['type' => 'decimal', 'length' => 13, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'TOTAL_FORECAST' => ['type' => 'decimal', 'length' => 13, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'PROJ_AC' => ['type' => 'decimal', 'length' => 13, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'PRES_PROJ' => ['type' => 'decimal', 'length' => 13, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'FORECAST_PROJ' => ['type' => 'decimal', 'length' => 13, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'CATEGORY' => ['type' => 'string', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'STATUS' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'FOTO' => ['type' => 'upload.file', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
<<<<<<< HEAD
        'FOTO_DIR' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'EPS_REL' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
=======
        'EPS_REL' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'CHART' => ['type' => 'upload.file', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'IGR' => ['type' => 'decimal', 'length' => 13, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'IGR_DATE' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'CPI_DATE' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'ID_PROJECT' => ['type' => 'unique', 'columns' => ['ID_PROJECT'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_spanish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'ID_PROJECT' => 'Lorem ipsum dolor sit amet',
                'PROJECT_NAME' => 'Lorem ipsum dolor sit amet',
                'Proj_Obj' => 'Lorem ipsum dolor sit amet',
                'DESCRIPTION' => 'Lorem ipsum dolor sit amet',
                'PLANNED' => 1,
                'EXECUTED' => 1,
                'AC' => 1.5,
                'PV' => 1.5,
                'CAPEX_PLANNED' => 1.5,
                'CAPEX_EXECUTED' => 1.5,
                'FASE' => 'Lorem ipsum dolor sit amet',
                'REGIONAL' => 'Lorem ipsum dolor sit amet',
                'ALCANCE' => 'Lorem ipsum dolor sit amet',
                'SOLICITUD' => 'Lorem ipsum dolor sit amet',
                'DISTANCIA' => 1.5,
                'LINEA_TRANS' => 1.5,
<<<<<<< HEAD
                'FOPO' => '2019-03-11',
                'FEPO' => '2019-03-11',
                'ADJUDICACION' => '2019-03-11',
                'APROBACION' => '2019-03-11',
=======
                'FOPO' => '2019-04-01',
                'FEPO' => '2019-04-01',
                'ADJUDICACION' => '2019-04-01',
                'APROBACION' => '2019-04-01',
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                'TORRE' => 1.5,
                'NUM_SUBESTACION' => 1.5,
                'CPI_ANUAL' => 1,
                'AC_BAC' => 1.5,
                'AC_PPTO' => 1.5,
                'PROJ_TOTAL_PRES' => 1.5,
                'TOTAL_FORECAST' => 1.5,
                'PROJ_AC' => 1.5,
                'PRES_PROJ' => 1.5,
                'FORECAST_PROJ' => 1.5,
                'CATEGORY' => 'Lorem ipsum dolor sit amet',
                'STATUS' => 1,
                'FOTO' => '',
<<<<<<< HEAD
                'FOTO_DIR' => 'Lorem ipsum dolor sit amet',
                'EPS_REL' => 1
=======
                'EPS_REL' => 1,
                'CHART' => '',
                'IGR' => 1.5,
                'IGR_DATE' => '2019-04-01',
                'CPI_DATE' => '2019-04-01'
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
            ],
        ];
        parent::init();
    }
}
