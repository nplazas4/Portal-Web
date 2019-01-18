<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjectcodesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjectcodesTable Test Case
 */
class ProjectcodesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjectcodesTable
     */
    public $Projectcodes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.projectcodes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Projectcodes') ? [] : ['className' => ProjectcodesTable::class];
        $this->Projectcodes = TableRegistry::getTableLocator()->get('Projectcodes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projectcodes);

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
