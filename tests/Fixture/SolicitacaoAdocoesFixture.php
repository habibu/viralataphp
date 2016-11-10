<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SolicitacaoAdocoesFixture
 *
 */
class SolicitacaoAdocoesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idSolicitacaoAdocao' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'dataSolicitacaoAdocao' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'descricao' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'comment' => '', 'precision' => null],
        'idAdotante_Adotante' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'idAnimal_Animal' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'idUsuario_Usuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'idFeira_Feira' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'idstatus_status' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'usuario_fk' => ['type' => 'index', 'columns' => ['idUsuario_Usuario'], 'length' => []],
            'feira_fk' => ['type' => 'index', 'columns' => ['idFeira_Feira'], 'length' => []],
            'Animal_fk' => ['type' => 'index', 'columns' => ['idAnimal_Animal'], 'length' => []],
            'status_fk' => ['type' => 'index', 'columns' => ['idstatus_status'], 'length' => []],
            'pk_solicitacaoAdocao' => ['type' => 'index', 'columns' => ['idSolicitacaoAdocao'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idSolicitacaoAdocao'], 'length' => []],
            'solicitacao_adocoes_ibfk_1' => ['type' => 'foreign', 'columns' => ['idUsuario_Usuario'], 'references' => ['usuarios', 'idUsuario'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'solicitacao_adocoes_ibfk_2' => ['type' => 'foreign', 'columns' => ['idFeira_Feira'], 'references' => ['feiras', 'idFeira'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'solicitacao_adocoes_ibfk_3' => ['type' => 'foreign', 'columns' => ['idAnimal_Animal'], 'references' => ['animais', 'idAnimal'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'solicitacao_adocoes_ibfk_4' => ['type' => 'foreign', 'columns' => ['idstatus_status'], 'references' => ['status', 'idstatus'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'idSolicitacaoAdocao' => 1,
            'dataSolicitacaoAdocao' => '2016-11-10',
            'descricao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'idAdotante_Adotante' => 1,
            'idAnimal_Animal' => 1,
            'idUsuario_Usuario' => 1,
            'idFeira_Feira' => 1,
            'idstatus_status' => 1
        ],
    ];
}
