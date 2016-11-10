<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoMoradiasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoMoradiasTable Test Case
 */
class TipoMoradiasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoMoradiasTable
     */
    public $TipoMoradias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tipo_moradias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TipoMoradias') ? [] : ['className' => 'App\Model\Table\TipoMoradiasTable'];
        $this->TipoMoradias = TableRegistry::get('TipoMoradias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TipoMoradias);

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
