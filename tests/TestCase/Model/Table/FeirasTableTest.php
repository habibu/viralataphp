<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FeirasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FeirasTable Test Case
 */
class FeirasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FeirasTable
     */
    public $Feiras;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.feiras'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Feiras') ? [] : ['className' => 'App\Model\Table\FeirasTable'];
        $this->Feiras = TableRegistry::get('Feiras', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Feiras);

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
