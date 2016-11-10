<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EnderecosFixture
 *
 */
class EnderecosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idEndereco' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'rua' => ['type' => 'string', 'fixed' => true, 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'comment' => '', 'precision' => null],
        'numero' => ['type' => 'integer', 'length' => 6, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'complemento' => ['type' => 'string', 'fixed' => true, 'length' => 75, 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'comment' => '', 'precision' => null],
        'cep' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'areaMoradia' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'tipoEndereco' => ['type' => 'string', 'fixed' => true, 'length' => 6, 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'comment' => '', 'precision' => null],
        'bairro' => ['type' => 'string', 'fixed' => true, 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'comment' => '', 'precision' => null],
        'telefone' => ['type' => 'string', 'fixed' => true, 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'comment' => '', 'precision' => null],
        'ativo' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'idUsuario_Usuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'idCidade_Cidade' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'usuario_fk' => ['type' => 'index', 'columns' => ['idUsuario_Usuario'], 'length' => []],
            'cidade_fk' => ['type' => 'index', 'columns' => ['idCidade_Cidade'], 'length' => []],
            'pk_endereco' => ['type' => 'index', 'columns' => ['idEndereco'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idEndereco'], 'length' => []],
            'enderecos_ibfk_1' => ['type' => 'foreign', 'columns' => ['idUsuario_Usuario'], 'references' => ['usuarios', 'idUsuario'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'enderecos_ibfk_2' => ['type' => 'foreign', 'columns' => ['idCidade_Cidade'], 'references' => ['cidades', 'idCidade'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'idEndereco' => 1,
            'rua' => 'Lorem ipsum dolor sit amet',
            'numero' => 1,
            'complemento' => 'Lorem ipsum dolor sit amet',
            'cep' => 1,
            'areaMoradia' => 1,
            'tipoEndereco' => 'Lore',
            'bairro' => 'Lorem ipsum dolor sit amet',
            'telefone' => 'Lorem ipsum dolor sit amet',
            'ativo' => 1,
            'idUsuario_Usuario' => 1,
            'idCidade_Cidade' => 1
        ],
    ];
}
