<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HistoricoFeiraAnimaisTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HistoricoFeiraAnimaisTable Test Case
 */
class HistoricoFeiraAnimaisTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HistoricoFeiraAnimaisTable
     */
    public $HistoricoFeiraAnimais;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.historico_feira_animais'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('HistoricoFeiraAnimais') ? [] : ['className' => 'App\Model\Table\HistoricoFeiraAnimaisTable'];
        $this->HistoricoFeiraAnimais = TableRegistry::get('HistoricoFeiraAnimais', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HistoricoFeiraAnimais);

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
