<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SituacoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SituacoesTable Test Case
 */
class SituacoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SituacoesTable
     */
    public $Situacoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.situacoes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Situacoes') ? [] : ['className' => 'App\Model\Table\SituacoesTable'];
        $this->Situacoes = TableRegistry::get('Situacoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Situacoes);

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
