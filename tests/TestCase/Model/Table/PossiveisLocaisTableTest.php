<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PossiveisLocaisTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PossiveisLocaisTable Test Case
 */
class PossiveisLocaisTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PossiveisLocaisTable
     */
    public $PossiveisLocais;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.possiveis_locais'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PossiveisLocais') ? [] : ['className' => 'App\Model\Table\PossiveisLocaisTable'];
        $this->PossiveisLocais = TableRegistry::get('PossiveisLocais', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PossiveisLocais);

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
