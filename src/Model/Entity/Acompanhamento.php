<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Acompanhamento Entity
 *
 * @property int $idAcompanhamento
 * @property int $idUsuario_Usuario
 * @property int $idSolicitacaoAdocao_SolicitacaoAdocao
 * @property string $statusAcompanhamento
 * @property string $comentario
 */
class Acompanhamento extends Entity
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
        'idAcompanhamento' => false
    ];
}
