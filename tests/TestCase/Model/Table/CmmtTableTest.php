<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CmmtTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CmmtTable Test Case
 */
class CmmtTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CmmtTable
     */
    public $Cmmt;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Cmmt',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Cmmt') ? [] : ['className' => CmmtTable::class];
        $this->Cmmt = TableRegistry::getTableLocator()->get('Cmmt', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cmmt);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
