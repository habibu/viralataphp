<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SolicitacaoAdocoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SolicitacaoAdocoesTable Test Case
 */
class SolicitacaoAdocoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SolicitacaoAdocoesTable
     */
    public $SolicitacaoAdocoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.solicitacao_adocoes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SolicitacaoAdocoes') ? [] : ['className' => 'App\Model\Table\SolicitacaoAdocoesTable'];
        $this->SolicitacaoAdocoes = TableRegistry::get('SolicitacaoAdocoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SolicitacaoAdocoes);

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
