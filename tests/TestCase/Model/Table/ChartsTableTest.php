<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChartsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChartsTable Test Case
 */
class ChartsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ChartsTable
     */
    public $Charts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.charts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Charts') ? [] : ['className' => ChartsTable::class];
        $this->Charts = TableRegistry::getTableLocator()->get('Charts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Charts);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
