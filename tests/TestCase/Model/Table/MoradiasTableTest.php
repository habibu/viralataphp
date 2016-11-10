<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MoradiasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MoradiasTable Test Case
 */
class MoradiasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MoradiasTable
     */
    public $Moradias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.moradias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Moradias') ? [] : ['className' => 'App\Model\Table\MoradiasTable'];
        $this->Moradias = TableRegistry::get('Moradias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Moradias);

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
