<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PEpsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PEpsTable Test Case
 */
class PEpsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PEpsTable
     */
    public $PEps;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.p_eps'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PEps') ? [] : ['className' => PEpsTable::class];
        $this->PEps = TableRegistry::getTableLocator()->get('PEps', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PEps);

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
