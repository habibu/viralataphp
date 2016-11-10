<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TipoMoradiasFixture
 *
 */
class TipoMoradiasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idTipoMoradia' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'descricao' => ['type' => 'string', 'fixed' => true, 'length' => 25, 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'pk_tipomoradia' => ['type' => 'index', 'columns' => ['idTipoMoradia'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idTipoMoradia'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_bin'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'idTipoMoradia' => 1,
            'descricao' => 'Lorem ipsum dolor sit a'
        ],
    ];
}
