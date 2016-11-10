<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdotantesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdotantesTable Test Case
 */
class AdotantesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AdotantesTable
     */
    public $Adotantes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.adotantes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Adotantes') ? [] : ['className' => 'App\Model\Table\AdotantesTable'];
        $this->Adotantes = TableRegistry::get('Adotantes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Adotantes);

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
