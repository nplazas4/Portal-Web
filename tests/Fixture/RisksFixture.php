<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RisksFixture
 *
 */
class RisksFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'RISK_NUMBER' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'RISK_NAME' => ['type' => 'string', 'length' => 300, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'PROBABILITY' => ['type' => 'string', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'IMPACT' => ['type' => 'string', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'IMPACT_RISK' => ['type' => 'decimal', 'length' => 13, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'PLAN_ONE' => ['type' => 'string', 'length' => 600, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'PLAN_TWO' => ['type' => 'string', 'length' => 600, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'PLAN_THREE' => ['type' => 'string', 'length' => 600, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'PLAN_FOUR' => ['type' => 'string', 'length' => 600, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'PLAN_FIVE' => ['type' => 'string', 'length' => 600, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
<<<<<<< HEAD
        'PLAN_ONE_S' => ['type' => 'string', 'length' => 600, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'PLAN_TWO_S' => ['type' => 'string', 'length' => 600, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'PLAN_THREE_S' => ['type' => 'string', 'length' => 600, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'PLAN_FOUR_S' => ['type' => 'string', 'length' => 600, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'PLAN_FIVE_S' => ['type' => 'string', 'length' => 600, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
=======
        'ACTION_STATE' => ['type' => 'string', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'MATERIALIZACION' => ['type' => 'string', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
        'PROJECT_CODE' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'PROJECT_CODE' => ['type' => 'index', 'columns' => ['PROJECT_CODE'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'risks_ibfk_1' => ['type' => 'foreign', 'columns' => ['PROJECT_CODE'], 'references' => ['projects', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
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
                'RISK_NUMBER' => 'Lorem ipsum dolor sit amet',
                'RISK_NAME' => 'Lorem ipsum dolor sit amet',
                'PROBABILITY' => 'Lorem ipsum dolor sit amet',
                'IMPACT' => 'Lorem ipsum dolor sit amet',
                'IMPACT_RISK' => 1.5,
                'PLAN_ONE' => 'Lorem ipsum dolor sit amet',
                'PLAN_TWO' => 'Lorem ipsum dolor sit amet',
                'PLAN_THREE' => 'Lorem ipsum dolor sit amet',
                'PLAN_FOUR' => 'Lorem ipsum dolor sit amet',
                'PLAN_FIVE' => 'Lorem ipsum dolor sit amet',
<<<<<<< HEAD
                'PLAN_ONE_S' => 'Lorem ipsum dolor sit amet',
                'PLAN_TWO_S' => 'Lorem ipsum dolor sit amet',
                'PLAN_THREE_S' => 'Lorem ipsum dolor sit amet',
                'PLAN_FOUR_S' => 'Lorem ipsum dolor sit amet',
                'PLAN_FIVE_S' => 'Lorem ipsum dolor sit amet',
=======
                'ACTION_STATE' => 'Lorem ipsum dolor sit amet',
                'MATERIALIZACION' => 'Lorem ipsum dolor sit amet',
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                'PROJECT_CODE' => 1
            ],
        ];
        parent::init();
    }
}
