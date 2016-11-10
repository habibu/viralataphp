<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AdotantesFixture
 *
 */
class AdotantesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idAdotante' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'rendaFamiliar' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'criancasEmCasa' => ['type' => 'integer', 'length' => 6, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'quantidadeanimais' => ['type' => 'integer', 'length' => 6, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'reputacao' => ['type' => 'integer', 'length' => 6, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'idUsuario_Usuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'usuario_fk' => ['type' => 'index', 'columns' => ['idUsuario_Usuario'], 'length' => []],
            'pk_adotante' => ['type' => 'index', 'columns' => ['idAdotante'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idAdotante'], 'length' => []],
            'adotantes_ibfk_1' => ['type' => 'foreign', 'columns' => ['idUsuario_Usuario'], 'references' => ['usuarios', 'idUsuario'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'idAdotante' => 1,
            'rendaFamiliar' => 1,
            'criancasEmCasa' => 1,
            'quantidadeanimais' => 1,
            'reputacao' => 1,
            'idUsuario_Usuario' => 1
        ],
    ];
}
