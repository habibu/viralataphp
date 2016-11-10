<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AcompanhamentosFixture
 *
 */
class AcompanhamentosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idAcompanhamento' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'idUsuario_Usuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'idSolicitacaoAdocao_SolicitacaoAdocao' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'statusAcompanhamento' => ['type' => 'string', 'fixed' => true, 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'comment' => '', 'precision' => null],
        'comentario' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'usuario_fk' => ['type' => 'index', 'columns' => ['idUsuario_Usuario'], 'length' => []],
            'pk_acompanhamento' => ['type' => 'index', 'columns' => ['idAcompanhamento'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idAcompanhamento'], 'length' => []],
            'acompanhamentos_ibfk_1' => ['type' => 'foreign', 'columns' => ['idUsuario_Usuario'], 'references' => ['usuarios', 'idUsuario'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'idAcompanhamento' => 1,
            'idUsuario_Usuario' => 1,
            'idSolicitacaoAdocao_SolicitacaoAdocao' => 1,
            'statusAcompanhamento' => 'Lorem ipsum d',
            'comentario' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
        ],
    ];
}
