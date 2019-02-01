<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * IndicatorsFixture
 *
 */
class IndicatorsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'CPI' => ['type' => 'decimal', 'length' => 10, 'precision' => 1, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'SPI_EXTERNO' => ['type' => 'decimal', 'length' => 10, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'TOTAL_PRES' => ['type' => 'decimal', 'length' => 13, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'TOTAL_EJEC_USD' => ['type' => 'decimal', 'length' => 13, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'PRES_ANUAL' => ['type' => 'decimal', 'length' => 13, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'EJECT_ANUAL' => ['type' => 'decimal', 'length' => 13, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
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
                'CPI' => 1.5,
                'SPI_EXTERNO' => 1.5,
                'TOTAL_PRES' => 1.5,
                'TOTAL_EJEC_USD' => 1.5,
                'PRES_ANUAL' => 1.5,
                'EJECT_ANUAL' => 1.5
            ],
        ];
        parent::init();
    }
}
