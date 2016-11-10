<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SolicitacaoAdocoes Model
 *
 * @method \App\Model\Entity\SolicitacaoAdoco get($primaryKey, $options = [])
 * @method \App\Model\Entity\SolicitacaoAdoco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SolicitacaoAdoco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SolicitacaoAdoco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SolicitacaoAdoco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SolicitacaoAdoco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SolicitacaoAdoco findOrCreate($search, callable $callback = null)
 */
class SolicitacaoAdocoesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('solicitacao_adocoes');
        $this->displayField('idSolicitacaoAdocao');
        $this->primaryKey('idSolicitacaoAdocao');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('idSolicitacaoAdocao')
            ->allowEmpty('idSolicitacaoAdocao', 'create');

        $validator
            ->date('dataSolicitacaoAdocao')
            ->allowEmpty('dataSolicitacaoAdocao');

        $validator
            ->allowEmpty('descricao');

        $validator
            ->integer('idAdotante_Adotante')
            ->allowEmpty('idAdotante_Adotante');

        $validator
            ->integer('idAnimal_Animal')
            ->allowEmpty('idAnimal_Animal');

        $validator
            ->integer('idUsuario_Usuario')
            ->allowEmpty('idUsuario_Usuario');

        $validator
            ->integer('idFeira_Feira')
            ->allowEmpty('idFeira_Feira');

        $validator
            ->integer('idstatus_status')
            ->allowEmpty('idstatus_status');

        return $validator;
    }
}
