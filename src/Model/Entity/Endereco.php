<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Endereco Entity
 *
 * @property int $idEndereco
 * @property string $rua
 * @property int $numero
 * @property string $complemento
 * @property int $cep
 * @property float $areaMoradia
 * @property string $tipoEndereco
 * @property string $bairro
 * @property string $telefone
 * @property bool $ativo
 * @property int $idUsuario_Usuario
 * @property int $idCidade_Cidade
 */
class Endereco extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'idEndereco' => false
    ];
}
