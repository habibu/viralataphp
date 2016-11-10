<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StatusFixture
 *
 */
class StatusFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'status';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idstatus' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'descricao' => ['type' => 'string', 'fixed' => true, 'length' => 25, 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'pk_status' => ['type' => 'index', 'columns' => ['idstatus'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idstatus'], 'length' => []],
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
            'idstatus' => 1,
            'descricao' => 'Lorem ipsum dolor sit a'
        ],
    ];
}
