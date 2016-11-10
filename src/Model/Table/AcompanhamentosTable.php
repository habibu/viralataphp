<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Acompanhamentos Model
 *
 * @method \App\Model\Entity\Acompanhamento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Acompanhamento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Acompanhamento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Acompanhamento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Acompanhamento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Acompanhamento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Acompanhamento findOrCreate($search, callable $callback = null)
 */
class AcompanhamentosTable extends Table
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

        $this->table('acompanhamentos');
        $this->displayField('idAcompanhamento');
        $this->primaryKey('idAcompanhamento');
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
            ->integer('idAcompanhamento')
            ->allowEmpty('idAcompanhamento', 'create');

        $validator
            ->integer('idUsuario_Usuario')
            ->requirePresence('idUsuario_Usuario', 'create')
            ->notEmpty('idUsuario_Usuario');

        $validator
            ->integer('idSolicitacaoAdocao_SolicitacaoAdocao')
            ->requirePresence('idSolicitacaoAdocao_SolicitacaoAdocao', 'create')
            ->notEmpty('idSolicitacaoAdocao_SolicitacaoAdocao');

        $validator
            ->allowEmpty('statusAcompanhamento');

        $validator
            ->allowEmpty('comentario');

        return $validator;
    }
}
