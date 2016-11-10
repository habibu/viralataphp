<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SolicitacaoAdoco Entity
 *
 * @property int $idSolicitacaoAdocao
 * @property \Cake\I18n\Time $dataSolicitacaoAdocao
 * @property string $descricao
 * @property int $idAdotante_Adotante
 * @property int $idAnimal_Animal
 * @property int $idUsuario_Usuario
 * @property int $idFeira_Feira
 * @property int $idstatus_status
 */
class SolicitacaoAdoco extends Entity
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
        'idSolicitacaoAdocao' => false
    ];
}
