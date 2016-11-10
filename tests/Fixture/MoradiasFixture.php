<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MoradiasFixture
 *
 */
class MoradiasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idMoradia' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'idAdotante_Adotante' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'idTipoMoradia_TipoMoradia' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'idEndereco_Endereco' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'adotante_fk' => ['type' => 'index', 'columns' => ['idAdotante_Adotante'], 'length' => []],
            'endereco_fk' => ['type' => 'index', 'columns' => ['idEndereco_Endereco'], 'length' => []],
            'tipomoradia_fk' => ['type' => 'index', 'columns' => ['idTipoMoradia_TipoMoradia'], 'length' => []],
            'pk_moradia' => ['type' => 'index', 'columns' => ['idMoradia'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idMoradia'], 'length' => []],
            'moradias_ibfk_1' => ['type' => 'foreign', 'columns' => ['idAdotante_Adotante'], 'references' => ['adotantes', 'idAdotante'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'moradias_ibfk_2' => ['type' => 'foreign', 'columns' => ['idEndereco_Endereco'], 'references' => ['enderecos', 'idEndereco'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'moradias_ibfk_3' => ['type' => 'foreign', 'columns' => ['idTipoMoradia_TipoMoradia'], 'references' => ['tipo_moradias', 'idTipoMoradia'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'idMoradia' => 1,
            'idAdotante_Adotante' => 1,
            'idTipoMoradia_TipoMoradia' => 1,
            'idEndereco_Endereco' => 1
        ],
    ];
}
