<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AcompanhamentosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AcompanhamentosTable Test Case
 */
class AcompanhamentosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AcompanhamentosTable
     */
    public $Acompanhamentos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.acompanhamentos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Acompanhamentos') ? [] : ['className' => 'App\Model\Table\AcompanhamentosTable'];
        $this->Acompanhamentos = TableRegistry::get('Acompanhamentos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Acompanhamentos);

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
