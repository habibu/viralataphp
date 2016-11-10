<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Situacoes Model
 *
 * @method \App\Model\Entity\Situaco get($primaryKey, $options = [])
 * @method \App\Model\Entity\Situaco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Situaco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Situaco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Situaco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Situaco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Situaco findOrCreate($search, callable $callback = null)
 */
class SituacoesTable extends Table
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

        $this->table('situacoes');
        $this->displayField('idSituacao');
        $this->primaryKey('idSituacao');
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
            ->integer('idSituacao')
            ->allowEmpty('idSituacao', 'create');

        $validator
            ->allowEmpty('descricao');

        return $validator;
    }
}
