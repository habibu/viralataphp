<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Adotante Entity
 *
 * @property int $idAdotante
 * @property float $rendaFamiliar
 * @property int $criancasEmCasa
 * @property int $quantidadeanimais
 * @property int $reputacao
 * @property int $idUsuario_Usuario
 */
class Adotante extends Entity
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
        'idAdotante' => false
    ];
}
